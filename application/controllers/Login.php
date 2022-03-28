<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        if ($this->session->logged_in) {
            redirect('dashboard');
        }
        $data['title'] = 'AMCC PRESENCE APP LOGIN';
        $this->load->view('forLogin_model', $data);
    }

    public function login_action()
    {
        $email = $this->input->post('email', true);
        $pass =  md5($this->input->post('password', true));

        $cek = $this->Login_model->cek_login($email);
        if ($cek) {
            if ($pass == $cek['pass']) {
                $cek_devision = $this->Login_model->get_division($email);
                $userdata = array(
                    'nim' => $cek['nim'],
                    'name' => $cek['name'],
                    'role_user' => $cek['role_user'],
                    'email' => $cek['email'],
                    'division_name' => $cek_devision['division_name'],
                    'logged_in' => true
                );
                $this->session->set_userdata($userdata);
                if ($cek['role_user'] == 'A') {
                    redirect('dashboard/pengurus');
                } else {
                    redirect('dashboard/member');
                }
            } else {
                $this->session->set_flashdata('flash', 'Password anda salah');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('flash', 'Email anda salah');
            redirect('Login');
        }
    }

    public function logout()
    {

        session_destroy();
        redirect('Login');
    }
}
