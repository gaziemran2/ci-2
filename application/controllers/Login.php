<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    public function index()
    {
        $data['page_title'] = 'Abc TECH | login'; //will be available as $page_title in view
        $this->load->view('login/index', $data);   
    }

    public function forgot_password(){
        $data['page_title'] = 'Abc TECH | Forgot Password';
        $this->load->view('login/forgot_password', $data);
    }

    public function login_check(){
        $admin_email = $this->input->post('admin_email', true);
        $admin_pass = $this->input->post('admin_pass', true);
        $this->load->model('admin_login');
        $result = $this->admin_login->login_info($admin_email, $admin_pass);
        $sdata=array();

        if ($result) {
            redirect('dashboard');
        } else {
            $sdata['message']='Your email or password is invalid';
            $this->session->set_userdata($sdata);
            redirect(base_url());
        }
    }
    public function dashboard(){

        //$data = array();
        $data['page_title'] = 'Abc TECH | Dashboard';
        $data['main_content'] = $this->load->view('dashboard/index', '',true);
        $this->load->view('common/template', $data);
    }

    public function logout(){

        $data['page_title'] = 'Abc TECH | login';
        $sdata['message'] = 'Logout Successfully';
        $this->session->set_userdata($sdata);
        redirect(base_url());
    }
}
