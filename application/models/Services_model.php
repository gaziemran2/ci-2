<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Services_model extends CI_Model{

	public function save()
	{
		$data=array();
		$data['service_name']=$this->input->post('service_name', true);
		$this->db->insert('tbl_services', $data);
	}
}
