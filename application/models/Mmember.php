<?php

class Mmember extends CI_Model
{

    public function tampil_material($string, $str2)
    {
        $sql = "SELECT m.name as modul ,m.link, m.training_to, u.name as user, m.created_at FROM tbl_material m INNER JOIN tbl_user u ON m.users_id=u.nim INNER JOIN tbl_division d ON m.division_id=d.division_id WHERE m.category='$string' AND d.division_name='$str2' ";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }

    public function riwayat_presensi($nim)
    {
        $sql = "SELECT e.event_name, p.date_presence FROM tbl_presence p INNER JOIN tbl_event e ON p.event_id=e.event_id WHERE p.nim = '$nim' ORDER BY p.date_presence DESC";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }

    public function cek_eventStatus($division_name)
    {
        $sql = "SELECT `status` FROM tbl_event WHERE event_name = '$division_name' ";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            return $result;
        } else {
            return array();
        }
    }

    public function member()
    {
        $sql = "SELECT * FROM tbl_user u INNER JOIN tbl_division d ON u.division_id = d.division_id ORDER BY u.year DESC";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }
}
