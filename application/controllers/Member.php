<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Member extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Mmember');
        $this->load->model('M_login');
        if (!$this->session->logged_in) {
            redirect('Login');
        }
    }

    private function convertDevisi()
    {
        $email = $this->session->userdata('email');
        $nama_devisi = $this->M_login->get_division($email);
        $divisi_name = $this->session->userdata('division_name');

        if ($divisi_name == $nama_devisi['division_name']) {
            return $nama_devisi['division_id'];
        }
    }

    private function cekPresensi()
    {

        $get_time = $this->db->get_where('tbl_event', array('event_id' => 1))->row_array();

        if ((date('D') == 'Sat' || date('D') == 'Sun') && (date('H') >= $get_time['event_start'] && date('H:i') <= $get_time['event_end'])) {
            $data['title'] = 'Member Surpel';
            $this->template->load('template/template_member', 'client/surpel', $data);
        } else {
            $this->session->set_flashdata('flash-gagal', 'Pelatihan belum dimulai harap bersabar yahh');
            redirect('Member/presensi');
        }
    }

    public function index()
    {
        $division = $this->session->userdata("division_name");
        $data['title'] = 'Dashboard Member';
        $data['modul_pelatihan'] = $this->Mmember->tampil_material('MODUL', $division);
        $data['modul_rekaman'] = $this->Mmember->tampil_material('RECORD', $division);
        $data['presensi'] = $this->Mmember->cek_eventStatus("Pelatihan" . " " . $this->session->userdata('division_name'));
        $data['jmh_presensi'] = $this->db->get_where('tbl_presence', array('nim' => $this->session->userdata('nim')))->num_rows();
        $this->template->load('template/template_member', 'client/index', $data);
    }

    public function presensi()
    {
        $data['title'] = 'Member Presensi';
        $data['riwayat_presensi'] = $this->Mmember->riwayat_presensi($this->session->userdata('nim'));
        $data['presensi'] = $this->Mmember->cek_eventStatus("Pelatihan" . " " . $this->session->userdata('division_name'));
        $this->template->load('template/template_member', 'client/presensi', $data);
    }

    public function profile()
    {
        $data['title'] = 'Member Profile';
        $data['user'] = $this->db->get_where('tbl_user', array('nim' => $this->session->userdata('nim')))->row_object();
        $this->template->load('template/template_member', 'client/profile', $data);
    }

    public function surpel()
    {
        $this->cekPresensi();
    }

    public function surpel_action()
    {
        $sesi = $this->input->post('radio-sesi', true);
        $efektif = $this->input->post('radio-efektifitas', true);
        $pemahaman = $this->input->post('radio-penyampaian', true);
        $interaksi = $this->input->post('radio-suasana', true);
        $jawaban = $this->input->post('radio-responsibilitas', true);
        $kendala = $this->input->post('kendala', true);
        $kritik = $this->input->post('kritik', true);
        $id_survey = strtotime(date('h:m:s')) . $this->session->userdata('nim');
        $event_id = $this->convertDevisi();

        $data_insert_survey = array(
            'survey_id' => $id_survey,
            'session' => $sesi,
            'effectivity' => $efektif,
            'understanding' => $pemahaman,
            'interactive' => $interaksi,
            'answer_satisfy' => $jawaban,
            'trouble' => $kendala,
            'critic_suggest' => $kritik
        );
        $data_insert_presence = array(
            'nim' => $this->session->userdata('nim'),
            'event_id' => $event_id,
            'survey_id' => $id_survey
        );
        $insert_survey = $this->db->insert('tbl_survey', $data_insert_survey);
        $insert_presence = $this->db->insert('tbl_presence', $data_insert_presence);
        if ($insert_survey && $insert_presence) {
            $this->session->set_flashdata('flash', 'Presensi Berhasil');
            redirect('Member/presensi');
        } else {
            $this->session->set_flashdata('flash-gagal', 'Maaf Presensi Tidak Berhasil');
            redirect('Member/presensi');
        }
    }

    public function profile_action()
    {
        $this->form_validation->set_rules('pass1', 'pass1', 'matches[pass2]', [
            'matches' => 'Password tidak sama'
        ]);

        $this->form_validation->set_rules('pass2', 'pass2', 'matches[pass1]', [
            'matches' => 'Password tidak sama'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Member Profile';
            $data['user'] = $this->db->get_where('tbl_user', array('nim' => $this->session->userdata('nim')))->row_object();
            $this->template->load('template/template_member', 'client/profile', $data);
        } else {
            $nama = $this->input->post('nama', true);
            $no_hp = $this->input->post('no_hp', true);
            $pass = $this->input->post('pass1', true);

            $data_update = array(
                'name' => $nama,
                'phone' => $no_hp,
                'pass' => md5($pass)
            );

            $this->db->set($data_update);
            $this->db->where('nim', $this->session->userdata('nim'));
            $this->db->update('tbl_user');

            $this->session->set_flashdata('flash', 'Data user berhasil diupdate');
            redirect('Member');
        }
    }
}
