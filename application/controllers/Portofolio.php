<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

    public function index(){
        $data['title'] = "My Portofolio";

        $this->load->view('portofolio/layout/header', $data);
        $this->load->view('portofolio/v_portofolio');
        $this->load->view('portofolio/layout/footer');
    }

}