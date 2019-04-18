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

		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('security');

		$this->form_validation->set_error_delimiters('','');

		if($this->form_validation->run('tutor_registration') == false)
		{
			$this->register();
		}
		else
		{

			if(isset($_POST) && !empty($_POST)){

				/*******************     start file uplod       ******************/

				$config['upload_path']          = './tutor_assets';
				$config['allowed_types']        = 'jpeg|jpg|png';
				$config['file_name']			=  time() . uniqid(rand()) . '-cnic-pic-1';
				$config['max_size']             = 500;
				$config['max_width']            = 600;
				$config['max_height']           = 400;

				$this->upload->initialize($config);

				echo $config['upload_path'];

				if ( ! $this->upload->do_upload('cnic-pic-1'))
				{
					// echo '<h1>Failure!</h1>'; echo '<pre>'; print_r($this->upload->display_errors()); echo '</pre>';

				}/*
				else 
				{ 
					echo '<h1>Success!</h1>'; echo '<pre>'; print_r($this->upload->data()); echo '</pre>';
				}
				*/
				$cnic_pic_1 = ($this->upload->data())['file_name'];
				$cnic_pic_1_errors = $this->upload->display_errors();

				/*******************     end file uplod       ******************/

				$tutor  = array(
					'name' 					=> $this->input->post('name'),
					'email'					=> $this->input->post('email'),
					'fname'					=> $this->input->post('fname'),
					'cnic'					=> $this->input->post('cnic'),
					'phone'					=> $this->input->post('phone'),
					'alt_phone'				=> $this->input->post('altphone'),
					'gender'				=> $this->input->post('gender'),
					'city'					=> $this->input->post('city'),
					'mailing_address'		=> $this->input->post('maddress'),
					'permanent_address'		=> $this->input->post('paddress'),
					'password'				=> $this->input->post('password'),
					'teaching_experience'	=> $this->input->post('experience'),
					'cnic_pic_path_1'		=> $cnic_pic_1
				);

				$tutor_preffered_subjects = $this->input->post('subjects');
				$tutor_preffered_classes = $this->input->post('classes');
				$tutor_preffered_areas = $this->input->post('areas');

				$this->load->model('Tutors');

				$affested_rows = $this->Tutors->add($tutor);


				if($affested_rows == 1){
					echo '<script>alert(ho gya insert);</script>';
				}else{
					echo '<script>alert(hoya e nai);</script>';
				}

				if(!empty($cnic_pic_1_errors))
				{
					$data['cnic_pic_1_errors'] = $cnic_pic_1_errors;
					$this->load->view('pages/tutor_registeration',$data);
				}

			}else{
				$this->load->view('pages/tutor_registeration');
			}
		}
	}
}