<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");

	}
	public function index()
	{
			$this->load->view('pages/login');
	}

	public function servlet()
	{ 
		if(isset($_POST) && !empty($_POST))
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model("Administrators");

			$query_result = $this->Administrators->get_login($email,$password);

			if(empty($query_result->result())){
				$data['login_error'] = "Error! invalid email or password.";
				$this->load->view('pages/login',$data);
			}else{
				redirect(site_url("AdminPanel"));
			}
		}else{
			redirect(site_url("Login"));
		}
	}

}
