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
			$data['page_title'] = 'Abc COMPANY | Add Services';
			$data['main_content'] = $this->load->view('dashboard/add_service', '',true);
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
	public function manage_services(){

	}
}
