<?php

class Madmin extends CI_Model
{

    public function tampil_material($string)
    {
        $sql = "SELECT m.id, d.division_name, m.name as modul ,m.link, m.training_to, u.name as user, m.created_at FROM tbl_material m INNER JOIN tbl_user u ON m.users_id=u.nim INNER JOIN tbl_division d ON m.division_id =d.division_id WHERE m.category='$string' ORDER BY m.training_to ASC";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }
}
