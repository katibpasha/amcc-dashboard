<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Member extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->logged_in) {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard Member';
        $this->template->load('template/template_member', 'client/index', $data);
    }

    public function presensi()
    {
        $data['title'] = 'Member Presensi';
        $this->template->load('template/template_member', 'client/presensi', $data);
    }

    public function profile()
    {
        $data['title'] = 'Member Profile';
        $this->template->load('template/template_member', 'client/profile', $data);
    }
}
