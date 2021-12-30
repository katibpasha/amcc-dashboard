<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard';
        $data['data_member_all'] = $this->db->get_where('tbl_user', array('role_user' => 'B'))->num_rows();
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y')))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $this->template->load('template/template_admin', 'server/index', $data);
    }

    public function member()
    {
        $data['title'] = 'Member';
        $this->template->load('template/template_admin', 'server/member', $data);
    }

    public function events()
    {
        $data['title'] = 'Events';
        $this->template->load('template/template_admin', 'server/events', $data);
    }

    public function chart_details()
    {
        $data['title'] = 'Chart Details';
        $this->template->load('template/template_admin', 'server/chart-details', $data);
    }

    public function pengurus()
    {
        $data['title'] = 'Pengurus';
        $this->template->load('template/template_admin', 'server/pengurus', $data);
    }

    public function material()
    {
        $data['title'] = 'Material';
        $this->template->load('template/template_admin', 'server/materi', $data);
    }
}
