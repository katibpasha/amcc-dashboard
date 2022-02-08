<?php

class Madmin extends CI_Model
{

    public function tampil_material($string)
    {
        $sql = "SELECT d.division_name, m.*, m.name as modul, u.name as user FROM tbl_material m INNER JOIN tbl_user u ON m.users_id=u.nim INNER JOIN tbl_division d ON m.division_id =d.division_id WHERE m.category='$string' ORDER BY m.training_to ASC";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }

    public function dashboard_graph($id_division)
    {
        $sql = "SELECT COUNT(p.event_id) as total_presensi, p.date_presence FROM tbl_presence p INNER JOIN tbl_survey s ON p.survey_id=s.survey_id WHERE p.event_id='$id_division' GROUP BY DATE_FORMAT(p.date_presence,'%Y-%m-%d')";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }

    public function materi_graph($param, $id)
    {
        $sql = "SELECT s.$param as indeks,count(s.$param) as materi FROM tbl_presence p INNER JOIN tbl_survey s ON p.survey_id=s.survey_id WHERE p.event_id=$id GROUP BY s.$param ";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }

    public function surpel_get($param)
    {
        $sql = "SELECT * FROM tbl_presence p INNER JOIN tbl_survey s ON p.survey_id=s.survey_id WHERE trouble !='' AND critic_suggest !='' AND p.event_id=$param";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }
}
