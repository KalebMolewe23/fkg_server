<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

        $data['title'] = "Dashboard";
        $data['show_modal'] = true;

        $this->load->view('programmer/layout/header', $data);
        $this->load->view('programmer/dashboard/v_dashboard');
        $this->load->view('programmer/layout/footer');
    }

}