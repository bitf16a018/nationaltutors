<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");

	}
	
	public function index()
	{
		
		if(isset($_SESSION['admin']))
		{
			unset($_SESSION['admin']);
			redirect(site_url('Home'));
		}
		else if(isset($_SESSION['tutor']))
		{
			unset($_SESSION['tutor']);
			redirect(site_url('Home'));
		}
		else
		{
			$this->load->view('pages/login');
		}
	}
}