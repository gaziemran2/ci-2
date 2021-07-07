<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login extends CI_Model{

    public function login_info($admin_email, $admin_pass)
    {
        $this->db->SELECT('*');
        $this->db->FROM('tbl_admin');
        $this->db->WHERE('admin_email', $admin_email);
        $this->db->WHERE('admin_pass', md5($admin_pass));
        $query_result = $this->db->get();
        $result = $query_result->row();
		//echo '<pre>'; print_r($result);exit;
        return $result;
    }
}
