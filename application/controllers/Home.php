<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper("url");

		$this->load->view("pages/header");
		$this->load->view('pages/welcome_message');
		$this->load->view("pages/footer");
	}

}
