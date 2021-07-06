<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login extends CI_Model{

    public function login_info($admin_email, $admin_pass)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email', $admin_email);
        $this->db->where('admin_pass', md5($admin_pass));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
