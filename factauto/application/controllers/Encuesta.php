<?php

class Encuesta extends CI_Controller {
    public function responder(){
        $this->load->view('templates/header');
        $this->load->view('encuesta/responder');
        $this->load->view('templates/footer');
    }

    public function listado(){
        $this->load->view('templates/header');
        $this->load->view('encuesta/listado');
        $this->load->view('templates/footer');
    }

    public function grafico(){
        $this->load->view('templates/header');
        $this->load->view('encuesta/grafico');
        $this->load->view('templates/footer');
    }
}