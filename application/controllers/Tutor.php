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
		if(isset($_SESSION['tutor']))
		{
			$this->load->model('TutorPrefferedSubjects');
			$this->load->model('TutorPrefferedAreas');
			$this->load->model('TutorPrefferedClasses');
			$this->load->model('TutorDocuments');
			$this->load->model('Tutors');

			$data['preffered_classes'] = $this->TutorPrefferedClasses->get($_SESSION['tutor']['id'])->result();
			$data['preffered_areas'] = $this->TutorPrefferedAreas->get($_SESSION['tutor']['id'])->result();
			$data['preffered_subjects'] = $this->TutorPrefferedSubjects->get($_SESSION['tutor']['id'])->result();

			$data['acadamic_documents'] = $this->TutorDocuments->get($_SESSION['tutor']['id'])->result();

			$data['personal_documents'] = $this->Tutors->get_fields($_SESSION['tutor']['id'],'cnic_pic_path_1, cnic_pic_path_2')->result_array()[0];

			if(empty($data['preffered_classes']) || empty($data['preffered_areas']) || empty($data['preffered_subjects'])|| empty($data['acadamic_documents']) || empty($data['personal_documents']['cnic_pic_path_1']) || empty($data['personal_documents']['cnic_pic_path_2']))
			{
				$this->load->view('pages/tutor/tutor_1', $data);
			}
			else
			{
				echo 'your profile is complete and a notification has been sent to admin. he\'ll soon be in touch with you.';
			}
		}
		else
		{
			redirect(site_url('Login'));
		}
	}
	

	public function request()
	{
		$this->load->view('pages/tutor_profile');
	}

	public function register($data=null)
	{
		$this->load->view('pages/tutor_registeration',$data);
	}

	public function register_servlet()
	{
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('security');

		$this->form_validation->set_error_delimiters('','');

		if($this->form_validation->run('tutor_registration') == false)//  if posted data is not valid
		{
			$this->register();// reloading form with errors(got form validation)
		}
		else
		{
			if(isset($_POST) && !empty($_POST))
			{
				/*******************     start file uplod       ******************/

				$config['upload_path']          = './tutor_assets';
				$config['allowed_types']        = 'jpeg|jpg|png';
				$config['max_size']             = 500;
				$config['max_width']            = 600;
				$config['max_height']           = 400;

				//uploading CNIC backside pic
				$config['file_name'] =  time() . uniqid(rand());// making file name unique
				$this->upload->initialize($config);
				$this->upload->do_upload('profilepic');	// trying to upload profile pic

				$profilepic = ($this->upload->data())['file_name'];	// saving file name (that has been uploaded to server(when no error has occured))
				$profilepic_errors = $this->upload->display_errors();	// saving errors(if any occured on uploading) array to specific variable

				/*******************     end file uplod       ******************/

				/****************** start dealing with errors in uploading files (if any) ****************/
				if(!empty($profilepic_errors) )
				{
					$data['profilepic_errors'] = $profilepic_errors;

					$this->register($data);// reloading form with errors(got form file upload validation)
				}
				/****************** end dealing with errors in uploading files (if any) ****************/

				/***************    start saving posted data in local variables    ******************/
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
					'profile_pic_path'		=> $profilepic
				);
				/***************    end saving posted data in local variables    ******************/

				/******************  start inserting tutor record in database    **********************/
				$this->load->model('Tutors');

				$last_insert_id = $this->Tutors->add($tutor);


				if($last_insert_id > 0){
					$data['login_after_register_message'] = 'You have successfully registered to NationalTutors. You need to login to continue.';
					$this->load->view('pages/login',$data);
				}else{
					echo '<h5>Oops! something went wrong</h5>';
					echo 'You may <a href="' . site_url('Tutor/register') . '">Go back</a> and try again.';
				}
				/******************   end inserting tutor record in database    **********************/

			}else{
				$this->load->view('pages/tutor_registeration');
			}
		}
	}

	// public function register_2()
	// {

	// 	echo 'teri id a ' . $this->tutor_database_id;
	// 	return;
	// 	$this->load->model("Areas");
	// 	$this->load->model("Classes");
	// 	$this->load->model("Subjects");
	// 	$data['areas'] = json_encode($this->Areas->get_table()->result());
	// 	$data['subjects'] = json_encode($this->Subjects->get_table()->result());
	// 	$data['classes'] = json_encode($this->Classes->get_table()->result());
	// 	$this->load->view('pages/tutor_registeration_2', $data);
	// }

	
	// public function register_servlet_3()
	// {
	// 	$this->load->library('form_validation');
	// 	$this->load->library('upload');
	// 	$this->load->helper('security');

	// 	$this->form_validation->set_error_delimiters('','');

	// 	if($this->form_validation->run('tutor_registration') == false)//  if posted data is not valid
	// 	{
	// 		$this->register();// reloading form with errors(got form validation)
	// 	}
	// 	else
	// 	{

	// 		if(isset($_POST) && !empty($_POST)){


	// 			/*******************     start file uplod       ******************/

	// 			$config['upload_path']          = './tutor_assets';
	// 			$config['allowed_types']        = 'jpeg|jpg|png';
	// 			$config['max_size']             = 500;
	// 			$config['max_width']            = 600;
	// 			$config['max_height']           = 400;

	// 			//uploading CNIC frontside pic
	// 			$config['file_name'] =  time() . uniqid(rand());// making file name unique
	// 			$this->upload->initialize($config);
	// 			$this->upload->do_upload('cnic-pic-1');	// trying to upload CNIC front side pic

	// 			$cnic_pic_1 = ($this->upload->data())['file_name'];	// saving file name (that has been uploaded to server(when no error has occured))
	// 			$cnic_pic_1_errors = $this->upload->display_errors();	// saving errors(if any occured on uploading) array to specific variable


	// 			//uploading CNIC backside pic
	// 			$config['file_name'] =  time() . uniqid(rand());// making file name unique
	// 			$this->upload->initialize($config);
	// 			$this->upload->do_upload('cnic-pic-2');	// trying to upload CNIC front side pic

	// 			$cnic_pic_2 = ($this->upload->data())['file_name'];	// saving file name (that has been uploaded to server(when no error has occured))
	// 			$cnic_pic_2_errors = $this->upload->display_errors();	// saving errors(if any occured on uploading) array to specific variable


	// 			//uploading CNIC backside pic
	// 			$config['file_name'] =  time() . uniqid(rand());// making file name unique
	// 			$this->upload->initialize($config);
	// 			$this->upload->do_upload('profilepic');	// trying to upload CNIC front side pic

	// 			$profilepic = ($this->upload->data())['file_name'];	// saving file name (that has been uploaded to server(when no error has occured))
	// 			$profilepic_errors = $this->upload->display_errors();	// saving errors(if any occured on uploading) array to specific variable

	// 			/*******************     end file uplod       ******************/

	// 			/****************** start dealing with errors in uploading files (if any) ****************/
	// 			if(!empty($profilepic_errors) )
	// 			{
	// 				$data['profilepic_errors'] = $profilepic_errors;

	// 				$this->register($data);// reloading form with errors(got form file upload validation)
	// 			}
	// 			/****************** end dealing with errors in uploading files (if any) ****************/

	// 			/***************    end saving posted data in local variables    ******************/
	// 			$tutor  = array(
	// 				'name' 					=> $this->input->post('name'),
	// 				'email'					=> $this->input->post('email'),
	// 				'fname'					=> $this->input->post('fname'),
	// 				'cnic'					=> $this->input->post('cnic'),
	// 				'phone'					=> $this->input->post('phone'),
	// 				'alt_phone'				=> $this->input->post('altphone'),
	// 				'gender'				=> $this->input->post('gender'),
	// 				'city'					=> $this->input->post('city'),
	// 				'mailing_address'		=> $this->input->post('maddress'),
	// 				'permanent_address'		=> $this->input->post('paddress'),
	// 				'password'				=> $this->input->post('password'),
	// 				'teaching_experience'	=> $this->input->post('experience'),
	// 				'profile_pic_path'		=> $profilepic
	// 			);

	// 			$tutor_preffered_subjects = $this->input->post('subjects');
	// 			$tutor_preffered_classes = $this->input->post('classes');
	// 			$tutor_preffered_areas = $this->input->post('areas');

	// 			/***************    end saving posted data in local variables    ******************/

	// 			/******************  start inserting tutro record in database    **********************/
	// 			$this->load->model('Tutors');

	// 			$last_insert_id = $this->Tutors->add($tutor);


	// 			if($last_insert_id > 0){
	// 				echo 'ho gya insert-- aa id c ' . $last_insert_id;
	// 			}else{
	// 				echo 'hoya e nai';
	// 			}
	// 			/******************   end inserting tutro record in database    **********************/

	// 		}else{
	// 			$this->load->view('pages/tutor_registeration');
	// 		}
	// 	}
	// }
}