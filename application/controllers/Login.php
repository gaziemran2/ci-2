<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    public function index()
    {
        $data['page_title'] = 'Abc COMPANY | login'; //will be available as $page_title in view
        $this->load->view('login/index', $data);   
    }

    public function forgot_password(){
        $data['page_title'] = 'Abc COMPANY | Forgot Password';
        $this->load->view('login/forgot_password', $data);
    }

    public function login_check(){
        $admin_email = $this->input->post('admin_email', true);
        $admin_pass = $this->input->post('admin_pass', true);
        $this->load->model('admin_login');
        $result = $this->admin_login->login_info($admin_email, $admin_pass);
        $sdata=array();

        if ($result) {
			$sdata['admin_id']=$result->admin_id;
			$sdata['admin_name']=$result->admin_name;
			$this->session->set_userdata($sdata);
            redirect('dashboard');
        } else {
            $sdata['message']='Your email or password is invalid';
            $this->session->set_userdata($sdata);
            redirect(base_url());
        }
    }
    public function dashboard(){

		if (!$this->session->userdata('admin_id')) {
			$sdata['message']='Please login to access this page';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
		else
		{
			$data['page_title'] = 'Abc COMPANY | Dashboard';
			$data['main_content'] = $this->load->view('dashboard/index', '',true);
			$this->load->view('common/template', $data);
		}
    }

    public function logout(){
		if (!$this->session->userdata('admin_id')) {
			$sdata['message']='Please login to access this page';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
		else
		{
			$this->session->unset_userdata('admin_id');
			$this->session->unset_userdata('admin_name');
			$sdata['message'] = 'Logout Successfully';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}
    }
}
