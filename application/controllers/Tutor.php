<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller 
{

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");

	}
	

	public function index()
	{

		$this->load->view('pages/tutor_profile');
	}

	public function register()
	{

		$this->load->view('pages/tutor_registeration');
	}

	public function register_servlet()
	{
		$this->load->view('pages/tutor_registeration');
	}
}