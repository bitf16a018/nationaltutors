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
		$this->load->model("Areas");
		$this->load->model("Classes");
		$this->load->model("Subjects");
		$data['areas'] = json_encode($this->Areas->get_table()->result());
		$data['subjects'] = json_encode($this->Subjects->get_table()->result());
		$data['classes'] = json_encode($this->Classes->get_table()->result());

		$this->load->view('pages/tutor_registeration',$data);
	}

	public function register_servlet()
	{
		/*
		$config['upload_path']          = './tutor_assets';//base_url("tutor_assets/");
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['file_name']            = 'aziz78';
		$config['max_size']             = 500;
		$config['max_width']            = 600;
		$config['max_height']           = 400;

		$this->load->library('upload');
		$this->upload->initialize($config);

		echo $config['upload_path'];

		if ( ! $this->upload->do_upload('cnic-pic-1'))
		{

			echo '<h1>Failure!</h1>';
			echo '<pre>';
			print_r($this->upload->display_errors());
			echo '</pre>';
		}
		else
		{
			echo '<h1>Success!</h1>';
			echo '<pre>';
			print_r($this->upload->data());
			echo '</pre>';
			
		}*/

		// $data = array();

		$this->load->library('form_validation');
		$this->load->helper('security');


		// $this->form_validation->set_rules('tutor_registration');

		$this->form_validation->set_error_delimiters('','');


		if($this->form_validation->run('tutor_registration') == false)
		{
			$this->register();
		}
		else
		{

			if(isset($_POST) && !empty($_POST)){

				$tutor  = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'fname' => $this->input->post('fname'),
					'cnic' => $this->input->post('cnic'),
					'phone' => $this->input->post('phone'),
					'altphone' => $this->input->post('altphone'),
					'gender' => $this->input->post('gender'),
					'city' => $this->input->post('city'),
					'maddress' => $this->input->post('maddress'),
					'paddress' => $this->input->post('paddress'),
					'password' => $this->input->post('password'),
					'cpassword' => $this->input->post('cpassword'),
					'experience' => $this->input->post('experience'),
				);

				$tutor_preffered_subjects = $this->input->post('subjects');
				$tutor_preffered_classes = $this->input->post('classes');
				$tutor_preffered_areas = $this->input->post('areas');

				echo '<h4>Tutor</h4>';
				echo '<pre>';
				print_r($tutor);
				echo '</pre>';

				echo '<h4>Subjects</h4>';
				echo '<pre>';
				print_r($tutor_preffered_subjects);
				echo '</pre>';

				echo '<h4>Classes</h4>';
				echo '<pre>';
				print_r($tutor_preffered_classes);
				echo '</pre>';

				echo '<h4>Areas</h4>';
				echo '<pre>';
				print_r($tutor_preffered_areas);
				echo '</pre>';


			}else{
				$this->load->view('pages/tutor_registeration');
			}
		}
	}
}