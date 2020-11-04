<?php

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();  
        $this->load->helper('form');
        $this->load->library('form_validation');      
    }


    public function index(){
        if($this->input->post('username')){
            $username = $this->input->post('username');
            $opts = array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => '{
                        "username" : "'.$username.'",
                        "password" : "'.$this->input->post('password').'"
                    }'
                )
            );
            # Create the context
            $context = stream_context_create($opts);
            # Get the response (you can use this for GET)
            $result = file_get_contents($this->config->item('base_api').'login', false, $context);
            
            $retorno = json_decode($result);

            if($retorno->status == "success"){
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('role', $retorno->role);
                redirect('/Encuesta/responder');
            }else{
                $this->session->set_flashdata('error', 'usuario o contraseña erroneos');                
            }
        }

        $this->load->view('templates/header');
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function cerrar_sesion(){
        $this->session->sess_destroy();
        redirect('login/index');
    }
    
}