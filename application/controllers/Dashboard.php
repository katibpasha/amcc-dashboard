<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Member_model');
        $this->load->helper('file');
        $this->load->library('CSVReader');

        if (!$this->session->logged_in) {
            redirect('Login');
        }

        // check user role
        if ($this->session->userdata('role_user') != 'A' && $this->session->logged_in) {
            redirect('dashboard/member');
        }
    }

    /*
    *   Dashboard Data related action
    *   - index: get all member and division data, and display it
    *   - chart_details: get division progress (presence, survey pelatihan)
    */
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['data_member_all'] = $this->db->get_where('tbl_user', array('role_user' => 'B'))->num_rows();
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y', strtotime("-1 Year", strtotime(date('Y'))))))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $data['presensi'] = [
            "web" => $this->Admin_model->dashboard_graph(1),
            "desktop" => $this->Admin_model->dashboard_graph(2),
            "mobile" => $this->Admin_model->dashboard_graph(3),
            "network" => $this->Admin_model->dashboard_graph(4),
            "hs" => $this->Admin_model->dashboard_graph(5),
        ];
        $this->template->load('template/template_admin', 'server/index', $data);
    }

    public function chart_details($division_id)
    {
        $data['data_member'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'division_id' => $division_id, 'year' => date('Y', strtotime("-1 Year", strtotime(date('Y'))))))->num_rows();
        $data['divisi'] = $this->db->get_where('tbl_event', array('event_id' => $division_id))->row_object();
        $data['surpel'] = $this->Admin_model->surpel_get($division_id);
        $data['presensi'] = $this->Admin_model->dashboard_graph($division_id);
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y', strtotime("-1 Year", strtotime(date('Y'))))))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $data['title'] = 'Chart Details';
        $data['pie'] = [
            "materi" => $this->Admin_model->materi_graph('understanding', $division_id),
            "penyampaian" => $this->Admin_model->materi_graph('effectivity', $division_id),
            "kelas" => $this->Admin_model->materi_graph('interactive', $division_id),
            "jawaban" => $this->Admin_model->materi_graph('answer_satisfy', $division_id)
        ];
        $this->template->load('template/template_admin', 'server/chart-details', $data);
    }

    /*
    *   Member Data related action
    *   - member: get all member data, and display it
    *   - add_member: function untuk menambahkan member ke database satu persatu
    */
    public function member()
    {
        $data['title'] = 'Member';
        $data['division'] = $this->db->get('tbl_division')->result();
        $data['member'] =  $this->Member_model->member();
        $this->template->load('template/template_admin', 'server/member', $data);
    }

    public function add_member()
    {

        // validate, ensure that password and the password confirmation is matches
        $this->form_validation->set_rules('pass1', 'pass1', 'matches[pass2]', [
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('pass2', 'pass2', 'matches[pass1]', [
            'matches' => 'Password tidak sama'
        ]);

        // validate that NIM is unique (not exist in DB)
        $this->form_validation->set_rules('nim', 'nim', 'is_unique[tbl_user.nim]', [
            'is_unique' => 'NIM sudah digunakan'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Member';
            $data['division'] = $this->db->get('tbl_division')->result();
            $data['member'] =  $this->Member_model->member();
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

    /*
    *   Events Data related action
    *   - events: get all events data and display it
    *   - events_edit: function untuk mengedit data event
    *   - turn_action: fucntion untuk update state event (ON/OFF)
    */
    public function events()
    {
        $data['data_member_all'] = $this->db->get_where('tbl_user', array('role_user' => 'B'))->num_rows();
        $data['data_member_year'] = $this->db->get_where('tbl_user', array('role_user' => 'B', 'year' => date('Y')))->num_rows();
        $data['jmlh_devisi'] = $this->db->get('tbl_division')->num_rows();
        $data['events'] = $this->db->get('tbl_event')->result();
        $data['title'] = 'Events';
        $this->template->load('template/template_admin', 'server/events', $data);
    }

    public function events_edit()
    {
        $start = $this->input->post('event-start', true);
        $end = $this->input->post('event-end', true);

        $error = false;
        $error_message = '';


        if ($start >= $end) {
            $error = true;
            $error_message = 'Jam Mulai tidak boleh sama/lebih dari Jam Akhir';
        }

        if ($end <= $start) {
            $error = true;
            $error_message = 'Jam Akhir tidak boleh sama/kurang dari Jam Mulai';
        }

        if ($error) {
            $this->session->set_flashdata('flash-gagal', $error_message);
            redirect('events');
        } else {
            $id = $this->input->post('event-id', true);
            $nama = $this->input->post('event-name', true);


            $data = array(
                'event_id' => $id,
                'event_name' => $nama,
                'event_start' => $start,
                'event_end' => $end,
            );

            $this->db->set($data);
            $this->db->where('event_id', $id);
            $this->db->update('tbl_event');
            $this->session->set_flashdata('flash', "Data event berhasil diubah");
            redirect('events');
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

    /*
    *   Pengurus Data related action
    *   - pengurus: get all pengurus data and display it
    *   - add_pengurus: function untuk add data pengurus ke database
    *   - delete_pengurus: function untuk menghapus data pengurus
    *   - profiling: get all pengurus profile and display it
    *   - get_assesment: get data assesment by user id
    *   - get_portfolio: get data portfolio by user id
    */
    public function pengurus()
    {
        $data['title'] = 'Pengurus';
        $data['devisi'] = $this->db->get('tbl_division')->result();
        $data['pengurus'] = $this->db->get_where('tbl_user', array('role_user' => 'A'))->result();
        $this->template->load('template/template_admin', 'server/pengurus', $data);
    }

    public function add_pengurus()
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

    public function delete_pengurus($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('tbl_user');
        $this->session->set_flashdata('flash', 'Data berhasil di hapus');
        redirect('pengurus');
    }

    public function profiling()
    {
        $data['title'] = 'Profiling Skill';
        $data['pengurus_card'] = $this->Admin_model->pengurus_card();
        $this->template->load('template/template_admin', 'server/profiling', $data);
    }

    public function get_assesment($id)
    {
        $data = $this->Admin_model->pengurus_assesment($id);
        echo json_encode($data);
    }

    public function get_portfolio($id)
    {
        $data = $this->Admin_model->pengurus_portfolio($id);
        echo json_encode($data);
    }

    /*
    *   Material Data related action
    *   - material: get all material data and display it
    *   - add_material: function untuk add data materi ke database
    *   - edit_material: function untuk update data materi
    *   - delete_material: function untuk menghapus data materi
    */
    public function material()
    {
        $data['title'] = 'Material';
        $data['devisi'] = $this->db->get('tbl_division')->result();
        $data['modul_pelatihan'] = $this->Admin_model->tampil_material('MODUL');
        $data['modul_rekaman'] = $this->Admin_model->tampil_material('RECORD');
        $this->template->load('template/template_admin', 'server/materi', $data);
    }

    public function add_material()
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

    public function edit_material()
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

    public function delete_material($id)
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

    /*
    *   User Data related action
    *   - edit_user: functin untuk mengedit data user (pengurus/member)
    *   - promote_admin: mengubah role user (member) menjadi admin (pengurus)
    *   - demote_member: mengubah role user (pengurus) menjadi member 
    */
    public function edit_user($role)
    {

        // validate password, ensure that password matches with password confirmation and length >= 5
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
            redirect($role);
        } else {
            $nim = $this->input->post('nim', true);
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            $divisi = $this->input->post('divisi', true);
            $phone = $this->input->post('phone', true);
            $pass = $this->input->post('pass1', true);

            $data_update = array(
                'nim' => $nim,
                'name' => $nama,
                'email' => $email,
                'phone' => $phone,
                'pass' => empty($pass) ? md5($phone) : md5($pass)
            );

            if ($divisi) {
                array_push($data_update, [
                    'division_id' => $divisi,
                ]);
            }

            $this->db->set($data_update);
            $this->db->where('nim', $nim);
            $this->db->update('tbl_user');
            $this->session->set_flashdata('flash', "Data $nama berhasil diubah");
            redirect($role);
        }
    }

    public function promote_admin($nim)
    {
        $data = array(
            'role_user' => 'A',
        );
        $this->db->where('nim', $nim);
        $this->db->update('tbl_user', $data);
        $this->session->set_flashdata('flash', 'Berhasil Promote to Admin');
        redirect('member');
    }

    public function demote_member($nim)
    {
        $data = array(
            'role_user' => 'B',
        );
        $this->db->where('nim', $nim);
        $this->db->update('tbl_user', $data);
        $this->session->set_flashdata('flash', 'Berhasil Demote to Member');
        redirect('member');
    }

    // export all member users to csv
    public function export_to_csv()
    {
        $this->load->helper("download");
        $this->load->dbutil();

        $delimiter = ",";
        $file_name = "data-member-" . date('d-M-Y', strtotime(date("Y-m-d"))) . ".csv";

        $data = $this->dbutil->csv_from_result($this->Admin_model->get_all_users(), $delimiter, "\r\n", '"');

        force_download("$file_name", $data);

        $this->session->set_flashdata("flash", "Data member berhasil diexport");
        redirect("member");
    }

    // import csv to mysql

    public function import_csv()
    {

        // $data = $this->csvreader->parse_file('');

        $insertCount = $prevCount = $updateCount = $rowCount = 0;

        $this->form_validation->set_rules('import-data', 'CSV file', 'callback_file_check');

        if ($this->form_validation->run()) {
            $insertCount = $updateCount = $rowCount = $notAddCount = 0;

            $tmp_name = $_FILES['import-data']['tmp_name'];

            if (is_uploaded_file($tmp_name)) {
                $data = $this->csvreader->parse_file($tmp_name);

                if (!empty($data)) {
                    foreach ($data as $data) {
                        $rowCount++;

                        $tmp = array(
                            'nim' => $data['nim'],
                            'name' => $data['name'],
                            'division_id' => $data['division_id'],
                            'email' => $data['email'],
                            'phone' => $data['phone'],
                            'year' => $data['year'],
                            'note' => $data['note'],
                            'pass' => md5($data['phone']),
                            'role_user' => 'B',
                        );

                        $prevCount = $this->Admin_model->check_user_exist($data['nim']);


                        if ($prevCount > 0) {
                            // UPDATE DATA
                            $this->db->set($tmp);
                            $this->db->where('nim', $data['nim']);
                            $update = $this->db->update('tbl_user');

                            if ($update) {
                                $updateCount++;
                            }
                        } else {
                            // INSERT DATA

                            $insert = $this->db->insert('tbl_user', $tmp);

                            if ($insert) {
                                $insertCount++;
                            }
                        }
                    }

                    $message = "Data member berhasil diimport. Total rows: $rowCount | inserted: $insertCount | updated: $updateCount";
                    $this->session->set_flashdata("flash", $message);
                } else {
                    $message = "Tidak bisa parsing file CSV, coba periksa formatnya";
                    $this->session->set_flashdata("flash-gagal", $message);
                }
            }

            redirect('member');
        }
    }

    // rules used to check file extension
    public function file_check($str)
    {
        $allowed_mime_types = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
        if (isset($_FILES['import-data']['name']) && $_FILES['import-data']['name'] != "") {
            $mime = get_mime_by_extension($_FILES['import-data']['name']);
            $fileAr = explode('.', $_FILES['import-data']['name']);
            $ext = end($fileAr);
            if (($ext == 'csv') && in_array($mime, $allowed_mime_types)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only CSV file to upload.');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'Please select a CSV file to upload.');
            return false;
        }
    }
}
