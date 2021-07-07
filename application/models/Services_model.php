<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Services_model extends CI_Model{

	public function save()
	{
		$data=array();
		$data['service_name']=$this->input->post('service_name', true);
		$this->db->insert('tbl_services', $data);
	}
	public function get_services(){
		//$this->db->SELECT('*');
		//$this->db->FROM('tbl_services');
		$result=$this->db->get('tbl_services');
		return $result->result();
		//$service_info=$result->result();
		//echo '<pre>'; print_r($service_info);exit;
		//return $service_info;
	}
	public function service_info_by_id($service_id){
		//$this->db->SELECT('*');
		//$this->db->FROM('tbl_services');
		$result=$this->db->WHERE('service_id', $service_id)->get('tbl_services')->row();
		//$query=$this->db->get('tbl_services');
		//$result=$query->row();
		//echo '<pre>'; print_r($result);exit;
		return $result;
	}
}
