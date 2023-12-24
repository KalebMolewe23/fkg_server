<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quest extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library(array('session'));
        is_logged_in();
   }

    public function index(){
        $data['user'] = $this->db->get_where('programmer', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['title'] = "My List";

        $this->db->join('client', 'client.id = project.id_client');
        $this->db->join('programmer', 'programmer.id = project.id_programmer'); 
        $client['data_client'] = $this->db->get('project');

        $this->load->view('programmer/layout/header', $data);
        $this->load->view('programmer/quest/v_quest', $client);
        $this->load->view('programmer/layout/footer');
    }

}