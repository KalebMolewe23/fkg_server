<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index(){

    $data['title'] = "Home";

    $this->load->view('home/layout/header', $data);
    $this->load->view('home/v_home');
    $this->load->view('home/layout/footer');

  }

  public function about(){
    $data['title'] = "About";

    $this->load->view('home/layout/header', $data);
    $this->load->view('home/v_about');
    $this->load->view('home/layout/footer');
  }

  public function service(){
    $data['title'] = "About";

    $this->load->view('home/layout/header', $data);
    $this->load->view('home/v_service');
    $this->load->view('home/layout/footer');
  }

  public function project(){
    $data['title'] = "Project";

    $this->load->view('home/layout/header', $data);
    $this->load->view('home/v_project');
    $this->load->view('home/layout/footer');
  }

}