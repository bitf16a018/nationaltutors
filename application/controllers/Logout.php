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
		
		unset($_SESSION['tutor']);
		redirect(site_url('Home'));
	}
}