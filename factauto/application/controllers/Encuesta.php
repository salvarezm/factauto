<?php

class Encuesta extends CI_Controller {

    public function __construct(){
        parent::__construct();  
        $this->load->helper('form');
        $this->load->library('form_validation');      
    }

    public function responder(){
        if($this->input->post('resp1')){
            $resp1 = $this->input->post('resp1');
            $resp2 = $this->input->post('resp2');
            $resp3 = $this->input->post('resp3');

            $username = $this->session->userdata('username');

            $opts = array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => '{        
                        "resp1": "'.$resp1.'",
                        "resp2": "'.$resp2.'",
                        "resp3": "'.$resp3.'",
                        "username": "'.$username.'"
                }
                '
                )
            );

             # Create the context
             $context = stream_context_create($opts);
             # Get the response (you can use this for GET)
             $result = file_get_contents($this->config->item('base_api').'responder', false, $context);
             
             $retorno = json_decode($result);
 
             if($retorno->status == "success"){
                 $this->session->set_flashdata('exito', "se ha ingresado las respuestas correctamente");                
             }else{
                 $this->session->set_flashdata('error', $retorno->message);                
             }
        }
        $this->load->view('templates/header');
        $this->load->view('encuesta/responder');
        $this->load->view('templates/footer');
    }

    public function listado(){
        $opts = array('http' =>
            array(
                'method'  => 'GET',
                'header'  => 'Content-type: application/json',
                'content' => '{}'
            )
        );
        # Create the context
        $context = stream_context_create($opts);
        # Get the response (you can use this for GET)
        $result = file_get_contents($this->config->item('base_api').'respuestas', false, $context);
        
        $data = json_decode($result);        

        $this->load->view('templates/header');
        $this->load->view('encuesta/listado',$data);
        $this->load->view('templates/footer');
    }

    public function grafico(){
        $this->load->view('templates/header');
        $this->load->view('encuesta/grafico');
        $this->load->view('templates/footer');
    }
}