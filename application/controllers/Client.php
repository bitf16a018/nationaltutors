<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		$this->load->helper("url");
		$this->load->view("pages/tutors");
	}
}