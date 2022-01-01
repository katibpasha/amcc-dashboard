<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Member extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
        if (!$this->session->logged_in) {
            redirect('Login');
        }
    }

    public function index()
    {
        $division = $this->session->userdata("division_name");
        $data['title'] = 'Dashboard Member';
        $data['modul_pelatihan'] = $this->Mmember->tampil_material('MODUL', $division);
        $data['modul_rekaman'] = $this->Mmember->tampil_material('RECORD', $division);
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

    public function surpel()
    {
        $data['title'] = 'Member Surpel';
        $this->template->load('template/template_member', 'client/surpel', $data);
    }
}
