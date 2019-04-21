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
		if(isset($_SESSION['admin']))
		{
			redirect(site_url('AdminPanel'));
		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			$this->load->view('pages/login');
		}
	}

	public function servlet()
	{


		if(isset($_SESSION['admin']))
		{
			redirect(site_url('AdminPanel'));
		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{

			$this->load->library('form_validation');
			$this->load->library('upload');
			$this->load->helper('security');

			$this->form_validation->set_error_delimiters('','');

		if($this->form_validation->run('login') == false)//  if posted data is not valid
		{
			$this->index();// reloading form with errors(got form validation)
		}
		else
		{
			if(isset($_POST) && !empty($_POST))
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$this->load->model("Administrators");
				$this->load->model("Tutors");

				$query_result = $this->Administrators->get_login($email,$password)->result();

				if(!empty($query_result))// if admin login
				{
					$_SESSION['admin'] = json_decode(json_encode($query_result[0]), True);

					redirect(site_url("AdminPanel"));
				}
				else
				{
					$query_result = $this->Tutors->get_login($email,$password)->result();

					if(!empty($query_result))// if tutor login
					{
						$_SESSION['tutor'] = json_decode(json_encode($query_result[0]), True);

						redirect(site_url('Tutor'));
					}
					else
					{
						$data['login_error'] = "invalid email or password.";
						$this->load->view('pages/login',$data);
					}
				}
			}else{
				redirect(site_url("Login"));
			}
		}

	}
}
}