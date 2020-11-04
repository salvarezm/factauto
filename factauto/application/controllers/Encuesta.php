<?php

class Encuesta extends CI_Controller {
    public function responder(){
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