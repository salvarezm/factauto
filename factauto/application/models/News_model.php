<?php

class News_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_news($slug = false){        
        if($slug === false){
            $query = $this->db->get('news');            
            return $query->result_array();
        }

        $query = $this->db->get_where('news',array('slug' => $slug));
        return $query->result_array();
    }

    public function set_news(){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'),'dash', true);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
}