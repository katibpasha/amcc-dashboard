<?php

class Madmin extends CI_Model
{

    public function tampil_material($string)
    {
        $sql = "SELECT m.name as modul ,m.link, m.training_to, u.name as user, m.created_at FROM tbl_material m INNER JOIN tbl_user u ON m.users_id=u.nim WHERE m.category='$string'";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
    }
}
