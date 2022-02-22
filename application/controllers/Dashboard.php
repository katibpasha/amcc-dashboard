<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->model('Mmember');
        if (!$this->session->logged_in) {
            redirect('Login');
        }

        if ($this->session->userdata('role_user') != 'A' && $this->session->logged_in) {
            redirect('dashboard/member');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['data_member_all'] = $this->db->get_where('tbl_user', array('role_user' => 'B'))->num_rows();
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y', strtotime("-1 Year", strtotime(date('Y'))))))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $data['presensi'] = [
            "web" => $this->Madmin->dashboard_graph(1),
            "desktop" => $this->Madmin->dashboard_graph(2),
            "mobile" => $this->Madmin->dashboard_graph(3),
            "network" => $this->Madmin->dashboard_graph(4),
            "hs" => $this->Madmin->dashboard_graph(5),
        ];
        $this->template->load('template/template_admin', 'server/index', $data);
    }

    public function member()
    {
        $data['title'] = 'Member';
        $data['division'] = $this->db->get('tbl_division')->result();
        $data['member'] =  $this->Mmember->member();
        $this->template->load('template/template_admin', 'server/member', $data);
    }

    public function events()
    {
        $data['data_member_all'] = $this->db->get_where('tbl_user', array('role_user' => 'B'))->num_rows();
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y')))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $data['events'] = $this->db->get('tbl_event')->result();
        $data['title'] = 'Events';
        $this->template->load('template/template_admin', 'server/events', $data);
    }

    public function chart_details($division_id)
    {
        $data['data_member'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'division_id' => $division_id, 'year' => date('Y', strtotime("-1 Year", strtotime(date('Y'))))))->num_rows();
        $data['divisi'] = $this->db->get_where('tbl_event', array('event_id' => $division_id))->row_object();
        $data['surpel'] = $this->Madmin->surpel_get($division_id);
        $data['presensi'] = $this->Madmin->dashboard_graph($division_id);
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y', strtotime("-1 Year", strtotime(date('Y'))))))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $data['title'] = 'Chart Details';
        $data['pie'] = [
            "materi" => $this->Madmin->materi_graph('understanding', $division_id),
            "penyampaian" => $this->Madmin->materi_graph('effectivity', $division_id),
            "kelas" => $this->Madmin->materi_graph('interactive', $division_id),
            "jawaban" => $this->Madmin->materi_graph('answer_satisfy', $division_id)
        ];
        $this->template->load('template/template_admin', 'server/chart-details', $data);
    }

    public function pengurus()
    {
        $data['title'] = 'Pengurus';
        $data['devisi'] = $this->db->get('tbl_division')->result();
        $data['pengurus'] = $this->db->get_where('tbl_user', array('role_user' => 'A'))->result();
        $this->template->load('template/template_admin', 'server/pengurus', $data);
    }

    public function material()
    {
        $data['title'] = 'Material';
        $data['devisi'] = $this->db->get('tbl_division')->result();
        $data['modul_pelatihan'] = $this->Madmin->tampil_material('MODUL');
        $data['modul_rekaman'] = $this->Madmin->tampil_material('RECORD');
        $this->template->load('template/template_admin', 'server/materi', $data);
    }

    public function material_action()
    {
        $judul = $this->input->post('judul', true);
        $training = $this->input->post('training', true);
        $divisi = $this->input->post('divisi', true);
        $kategori = $this->input->post('kategori', true);
        $kategori = $this->input->post('kategori', true);
        $link = $this->input->post('link', true);

        $data_insert = array(
            "name" => $judul,
            "division_id" => $divisi,
            "category" => $kategori,
            "training_to" => $training,
            "link" => $link,
            "users_id" => $this->session->userdata('nim')
        );
        $insert = $this->db->insert('tbl_material', $data_insert);
        if ($insert) {
            $this->session->set_flashdata('flash', 'Data materi berhasil ditambahkan');
            redirect('materi');
        } else {
            $this->session->set_flashdata('flash-gagal', 'Data materi gagal ditambahkan');
            redirect('materi');
        }
    }

    public function pengurus_action()
    {
        $this->form_validation->set_rules('pass1', 'pass1', 'matches[pass2]', [
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('pass2', 'pass2', 'matches[pass1]', [
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'is_unique[tbl_user.nim]', [
            'is_unique' => 'NIM sudah digunakan'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pengurus';
            $data['devisi'] = $this->db->get('tbl_division')->result();
            $data['pengurus'] = $this->db->get_where('tbl_user', array('role_user' => 'A'))->result();
            $this->template->load('template/template_admin', 'server/pengurus', $data);
        } else {
            $nim = $this->input->post('nim', true);
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            $phone = $this->input->post('phone', true);
            $divisi = $this->input->post('divisi', true);
            $pass = md5($this->input->post('pass1', true));
            $year = date('Y');

            $data_insert = array(
                "nim" => $nim,
                "role_user" => "A",
                "name" => $nama,
                "email" => $email,
                "phone" => $phone,
                "division_id" => $divisi,
                "year" => $year,
                "pass" => $pass
            );

            $insert = $this->db->insert('tbl_user', $data_insert);
            if ($insert) {
                $this->session->set_flashdata('flash', 'Data pengurus berhasil ditambahkan');
                redirect('pengurus');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Data pengurus gagal ditambahkan');
                redirect('pengurus');
            }
        }
    }

    public function turn_action($param, $param2)
    {
        if ($param == 'on') {
            $this->db->set('status', 'on');
            $this->db->where('event_id', $param2);
            $this->db->update('tbl_event');
            redirect('events');
        } else {
            $this->db->set('status', 'off');
            $this->db->where('event_id', $param2);
            $this->db->update('tbl_event');
            redirect('events');
        }
    }

    public function user_edit()
    {
        $this->form_validation->set_rules('pass1', 'pass1', 'matches[pass2]|min_length[5]', [
            "min_length" => 'Panjang minimal password 5 karakter',
            "matches" => 'Password yang kamu inputkan berbeda'
        ]);
        $this->form_validation->set_rules('pass2', 'pass2', 'matches[pass1]|min_length[5]', [
            "min_length" => 'Panjang minimal password 5 karakter'
        ]);

        if ($this->form_validation->run() == false) {
            $error1 = form_error('pass1');
            $error2 = form_error('pass2');

            if ($error1) {
                $this->session->set_flashdata('flash-gagal', substr($error1, 3, 35));
            } else if ($error2) {
                $this->session->set_flashdata('flash-gagal', substr($error2, 3, 35));
            }
            redirect('pengurus');
        } else {
            $nim = $this->input->post('nim', true);
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            $phone = $this->input->post('phone', true);
            $pass = $this->input->post('pass1', true);

            $data_update = array(
                'nim' => $nim,
                'name' => $nama,
                'email' => $email,
                'phone' => $phone,
                'pass' => empty($pass) ? md5($phone) : md5($pass)
            );

            $this->db->set($data_update);
            $this->db->where('nim', $nim);
            $this->db->update('tbl_user');
            $this->session->set_flashdata('flash', 'Data pengurus berhasil diubah');
            redirect('pengurus');
        }
    }

    public function hapus_pengurus($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('tbl_user');
        $this->session->set_flashdata('flash', 'Data berhasil di hapus');
        redirect('pengurus');
    }

    public function member_action()
    {

        $this->form_validation->set_rules('pass1', 'pass1', 'matches[pass2]', [
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('pass2', 'pass2', 'matches[pass1]', [
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'is_unique[tbl_user.nim]', [
            'is_unique' => 'NIM sudah digunakan'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Member';
            $data['division'] = $this->db->get('tbl_division')->result();
            $data['member'] =  $this->Mmember->member();
            $this->template->load('template/template_admin', 'server/member', $data);
        } else {
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass1');
            $divisi = $this->input->post('divisi');
            $tahun = $this->input->post('tahun');

            $data_insert = array(
                "nim" => $nim,
                "role_user" => "B",
                "name" => $nama,
                "email" => $email,
                "division_id" => $divisi,
                "year" => $tahun,
                "pass" => md5($pass),
            );

            $insert = $this->db->insert('tbl_user', $data_insert);

            if ($insert) {
                $this->session->set_flashdata('flash', 'data member berhasil di tambahkan');
                redirect('member');
            } else {
                $this->session->set_flashdata('flash-gagal', 'data member gagal di tambahkan');
                redirect('member');
            }
        }
    }

    public function materi_edit()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $link = $this->input->post('link');

        $data_update = array(
            'name' => $judul,
            'link' => $link
        );

        $update = $this->db->set($data_update)
            ->where('id', $id)
            ->update('tbl_material');

        if ($update) {
            $this->session->set_flashdata('flash', 'data materi berhasil di edit');
            redirect('materi');
        } else {
            $this->session->set_flashdata('flash-gagal', 'data materi gagal di edit');
            redirect('materi');
        }
    }

    public function hapus_materi($id)
    {
        $hapus = $this->db->where('id', $id)
            ->delete('tbl_material');

        if ($hapus) {
            $this->session->set_flashdata('flash', 'data materi berhasil di hapus');
            redirect('materi');
        } else {
            $this->session->set_flashdata('flash-gagal', 'data materi gagal di hapus');
            redirect('materi');
        }
    }

    public function profiling()
    {
        $data['title'] = 'Profiling Skill';
        $data['pengurus_card'] = $this->Madmin->pengurus_card();
        $this->template->load('template/template_admin', 'server/profiling', $data);
    }

    public function get_assesment($id)
    {
        $data = $this->Madmin->pengurus_assesment($id);
        echo json_encode($data);
    }

    public function get_portfolio($id)
    {
        $data = $this->Madmin->pengurus_portfolio($id);
        echo json_encode($data);
    }
}
