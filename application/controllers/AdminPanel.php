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

			$data['tutor_requests_count'] = $this->get_tutor_requests_count();

			$this->load->view("pages/admin/dashboard", $data);
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
	
	public function view_tutor_requests()
	{
		if(isset($_SESSION['admin']))
		{
			$data['tutor_requests_count'] = $this->get_tutor_requests_count();

			$this->load->model('TutorRequests');


			$data['tutor_requests'] = json_encode($this->TutorRequests->get_proper_where('tutor_requests.status','unseen')->result_array());


			$this->load->view("pages/admin/tutor_requests_table", $data);
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

	private function get_tutor_requests_count()
	{
		$this->load->model('TutorRequests');

		$result = $this->TutorRequests->get_where('status','unseen');

		return count($result->result_array());
	}
}