<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");

	}
	
	public function index()
	{
		if(isset($_SESSION['admin']))
		{

			$data['tutor_requests_count'] = $this->get_tutor_requests_count();

			$this->load->view("pages/admin/dashboard", $data);
		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}
	
	public function response_tutor_request($id, $response)
	{
		if(isset($_SESSION['admin']))
		{

			$data['tutor_requests_count'] = $this->get_tutor_requests_count();
			
			if(strtolower($response) == 'approved' || strtolower($response) == 'denied')
			{
				$this->load->model('Tutors');
				$this->load->model('TutorRequests');
				$result1 = $this->Tutors->update($id,array('status' => $response));
				$result2 = $this->TutorRequests->update($id,array('status' => $response));
				if($result1 > 0 && $result2 > 0)
				{
					redirect(site_url('AdminPanel/view_tutor_requests?success_info=' . $response));
				}
				else
				{
					redirect(site_url('AdminPanel/view_tutor_requests?error_message=unexpected_statuses_of_tutor_and_request'));
				}
			}
			else
			{
				redirect(site_url('AdminPanel/view_tutor_requests?error_message=unexpected_response'));
			}


		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}
	
	public function tutor_profile($id)
	{
		if(isset($_SESSION['admin']))
		{

			$data['tutor_requests_count'] = $this->get_tutor_requests_count();
			$this->load->model('Tutors');
			$data['tutor_profile_data'] = $this->Tutors->get_where('tutor.id',$id)->result_array();

			if(empty($data['tutor_profile_data'])){
				echo 'No tutor with this ID exixts';
			}
			else{
				$data['tutor_profile_data'] = $data['tutor_profile_data'][0];

				$this->load->model('TutorPrefferedAreas');
				$this->load->model('TutorPrefferedSubjects');
				$this->load->model('TutorPrefferedClasses');
				$this->load->model('Classes');
				$this->load->model('Areas');
				$this->load->model('Subjects');

				$data['tutor_profile_data']['prefered_classes'] = $this->TutorPrefferedClasses->get_where('tutor_id',$id)->result_array();

				foreach ($data['tutor_profile_data']['prefered_classes'] as $key => $record) 
				{
					$data['tutor_profile_data']['prefered_classes'][$key]['class_name'] = $this->Classes->get($record['class_id'])->result_array()[0]['name'];

				}

				$data['tutor_profile_data']['prefered_areas'] = $this->TutorPrefferedAreas->get_where('tutor_id',$id)->result_array();

				foreach ($data['tutor_profile_data']['prefered_areas'] as $key => $record) 
				{
					$data['tutor_profile_data']['prefered_areas'][$key]['area_name'] = $this->Areas->get($record['area_id'])->result_array()[0]['name'];

				}

				$data['tutor_profile_data']['prefered_subjects'] = $this->TutorPrefferedSubjects->get_where('tutor_id',$id)->result_array();

				foreach ($data['tutor_profile_data']['prefered_subjects'] as $key => $record) 
				{
					$data['tutor_profile_data']['prefered_subjects'][$key]['subject_name'] = $this->Subjects->get($record['subject_id'])->result_array()[0]['name'];

				}

				$this->load->view("pages/admin/tutor_profile", $data);
			}
		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}

	private function tutor_document_file_download($file_name)
	{
		if(isset($_SESSION['admin']))
		{

			$this->load->helper('download'); 

			$data['download_file'] = $file_name;    

			$this->load->view("pages/download_file_view",$data);

            // redirect('AdminPanel', "refresh");

		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}

	public function tutor_documents_download($id)
	{
		if(isset($_SESSION['admin']))
		{
			/*
			$this->load->model('Tutors');
			$data['tutor_profile_data'] = $this->Tutors->get_where('tutor.id',$id)->result_array()[0];

			$this->tutor_document_file_download($data['tutor_profile_data']['cnic_pic_path_1']);
			$this->tutor_document_file_download($data['tutor_profile_data']['cnic_pic_path_2']);*/

			$this->load->library('zip');

	        // pass second argument as TRUE if want to preserve dir structure
			// $this->zip->read_file(base_url('tutor_assets/15558409295099070915cbc3fa165f07.jpg'));
			ob_start();
			$this->zip->read_file(base_url('tutor_assets/15558409295099070915cbc3fa165f07.jpg'));


			// $filename ='images.zip');

		    // create zip file on server
			$this->zip->archive(base_url('tutor_assets/' . $filename));

		    // prompt user to download the zip file
			$this->zip->download($filename);

		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}
	
	public function view_tutor_requests($request_status=null)
	{
		if(isset($_SESSION['admin']))
		{
			$data['tutor_requests_count'] = $this->get_tutor_requests_count();

			$this->load->model('TutorRequests');

			//just for the sake of security
			if(strtolower( $request_status) == 'unseen' || strtolower( $request_status) == 'approved' || strtolower( $request_status) == 'denied'){

				$data['tutor_requests'] = json_encode($this->TutorRequests->get_proper_where('tutor_requests.status',strtolower($request_status))->result_array());
			}else{
				$data['tutor_requests'] = json_encode($this->TutorRequests->get_proper_where('tutor_requests.status','unseen')->result_array());
			}


			$this->load->view("pages/admin/tutor_requests_table", $data);
		}
		else if(isset($_SESSION['tutor']))
		{
			redirect(site_url('Tutor'));
		}
		else
		{
			redirect(site_url('Login'));
		}
	}

	private function get_tutor_requests_count()
	{
		$this->load->model('TutorRequests');

		$result = $this->TutorRequests->get_where('status','unseen');

		return count($result->result_array());
	}
}