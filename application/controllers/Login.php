<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        if ($this->session->logged_in) {
            $this->session->set_flashdata("flash", "Kamu sudah login lohh");
            redirect('Dashboard');
        }
        $data['title'] = 'AMCC PRESENCE APP LOGIN';
        $this->load->view('form_login', $data);
    }

    public function login_action()
    {
        $email = $this->input->post('email', true);
        $pass =  md5($this->input->post('password', true));

        $cek = $this->M_login->cek_login($email);
        if ($cek) {
            if ($pass == $cek['pass']) {
                $cek_devision = $this->M_login->get_division($email);
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
                    redirect('Dashboard');
                } else {
                    redirect('Member');
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
