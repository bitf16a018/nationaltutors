<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller {

	public function index()
	{
		$this->load->helper("url");

		$this->load->view('pages/tutor_profile');
	}

	public function register()
	{
		$this->load->helper("url");

		$this->load->view('pages/tutor_registeration');
	}
}