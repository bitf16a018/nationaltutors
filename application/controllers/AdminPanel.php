<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");

	}
	
	public function index()
	{
		if(isset($_SESSION['admin']))
		{
			$this->load->model('TutorRequests');

			$result = $this->TutorRequests->get_where('status','unseen');

			echo '<pre>';
			print_r( $result->result_array());
			echo '</pre>';
			echo $result->rows_count();

			// $this->load->view("pages/admin/dashboard");
		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}
}