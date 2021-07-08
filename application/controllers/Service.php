<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller{
	public function index(){
		if (!$this->session->userdata('admin_id')){
			$sdata['message']='Please login to access this page';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
		else{
			$data=array();
			$data['service_info']=$this->services_model->get_services();
			$data['page_title'] = 'Abc COMPANY | Services';
			$data['main_content'] = $this->load->view('dashboard/add_service', $data,true);
			$this->load->view('common/template', $data);
		}
	}
	public function add_services(){
		$this->load->model('services_model');
		$this->services_model->save();
		$sdata['message']='Service added successfully';
		$this->session->set_userdata($sdata);
		redirect('service');
	}
	public function edit_service($service_id){
		if (!$this->session->userdata('admin_id')){
			$sdata['message']='Please login to access this page';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
		else{
			$data=array();
			$data['service_info_by_id']=$this->services_model->service_info_by_id($service_id);
			$data['page_title'] = 'Abc COMPANY | Edit Services';
			$data['main_content'] = $this->load->view('dashboard/edit_service', $data,true);
			$this->load->view('common/template', $data);
		}
	}
	public function update_service(){
		if (!$this->session->userdata('admin_id')){
			$sdata['message']='Please login to access this page';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
		else{
			$this->services_model->update_service();
			//$data=array();
			$sdata['message']='Service updated successfully';
			$this->session->set_userdata($sdata);
			$data['page_title'] = 'Abc COMPANY | Edit Services';
			redirect('service');
		}
	}
	public function row(){
		echo $this->db->count_all('tbl_services');
	}
}
