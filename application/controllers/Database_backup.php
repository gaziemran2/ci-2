<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Database_backup extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('admin_id')) {
			$sdata['message'] = 'Please login to access this page';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		} else {
			$this->load->dbutil();

			$prefs = array(
				'format'      => 'zip',
				'filename'    => 'my_db_backup.sql'
			);
			$backup =& $this->dbutil->backup($prefs);

			$db_name = 'backup-on-'. date("d-m-Y") .'.zip';
			$save = 'db/'.$db_name;

			$this->load->helper('file');
			write_file($save, $backup);


			$this->load->helper('download');
			force_download($db_name, $backup);
		}
	}
}
