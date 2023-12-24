<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
   }

    public function index(){
        if ($this->session->userdata('username')) { //fungsi session adalah fungsi untuk menyeleksi setiap user yang melakukan login/register
            redirect('programmer/auth');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required'); //untuk validasi user yang melakukan login sesuai id yang terdaftar sesuai email
        $this->form_validation->set_rules('password', 'Password', 'trim|required'); //untuk validasi user yang melakukan login sesuai id yang terdaftar sesuai password
        if ($this->form_validation->run() == false) { //jika data salah maka akan terarah ke login/tampilan login
            $data['title'] = "Login Programmer";

            $this->load->view('programmer/layout/header', $data);
            $this->load->view('programmer/login/v_login');
            $this->load->view('programmer/layout/footer');
        } else {
            $this->_login();
        }
    }

    public function _login(){
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $user       = $this->db->get_where('programmer', ['username' => $username])->row_array();

        if ($user){
            if ($user['is_active'] == 1){
                if (password_verify($password, $user['password'])){
                    $data = [
                        'username'  => $user['username'],
                        'role'  => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 1){
                        redirect('programmer/administrator/dashboard/');
                    }else{
                        redirect('programmer/dashboard/');
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah!!! </div>');
                    redirect('programmer/auth');
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Tidak Aktif </div>');
                redirect('programmer/auth');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Tidak Ada </div>');
            redirect('programmer/auth');
        }
    }

    public function logout()
    { //fungsi untuk logout
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu berhasil LogOut</div>');
        redirect('programmer/auth');
    }

    public function blocked(){
        echo 'access blocked';
    }

    // public function quest(){
    //     $data['title'] = "Dashboard";
    //     $data['show_modal'] = true;

    //     $this->load->view('programmer/layout/header', $data);
    //     $this->load->view('programmer/dashboard/v_dashboard');
    //     $this->load->view('programmer/layout/footer');
    // }
}