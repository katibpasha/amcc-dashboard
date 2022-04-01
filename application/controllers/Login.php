<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    // check session, already logged in or not, and load view login page
    public function index()
    {
        if ($this->session->logged_in) {
            redirect('dashboard');
        }
        $data['title'] = 'AMCC PRESENCE APP LOGIN';
        $this->load->view('form_login', $data);
    }

    /*
    * This method check user input data
    * If exist, will save user data into session
    */
    public function login_action()
    {
        $email = $this->input->post('email', true);
        $pass =  md5($this->input->post('password', true));

        $cek = $this->Login_model->cek_login($email);
        if ($cek) {
            if ($pass == $cek['pass']) {
                $cek_division = $this->Login_model->get_division($email);
                $userdata = array(
                    'nim' => $cek['nim'],
                    'name' => $cek['name'],
                    'role_user' => $cek['role_user'],
                    'email' => $cek['email'],
                    'division_name' => $cek_division['division_name'],
                    'division_id' => $cek_division['division_id'],
                    'logged_in' => true
                );
                $this->session->set_userdata($userdata);
                if ($cek['role_user'] == 'B') {
                    redirect('dashboard/member');
                } else {
                    redirect('dashboard/pengurus');
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
