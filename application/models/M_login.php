<?php

class M_login extends CI_Model
{

    public function cek_login($e)
    {
        return $this->db->get_where('tbl_user', array('email' => $e))->row_array();
    }

    
    public function get_division($e)
    {
        $sql = "SELECT d.division_id, d.division_name FROM tbl_user u INNER JOIN tbl_division d ON u.division_id=d.division_id WHERE u.email='$e'";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            return $result;
        } else {
            return array();
        }
    }
}
