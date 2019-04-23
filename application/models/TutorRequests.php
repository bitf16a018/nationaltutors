<?php
class TutorRequests extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'tutor_requests';
	}

	public function get_table()
	{
		return $this->db->get($this->table);
	}


	public function insert($record)
	{
		$this->db->insert($this->table, $record);
	}

	public function get_where($field_name, $field_value)
	{
		$this->db->where($field_name, $field_value);
		return $this->db->get($this->table);
	}

	public function get_proper_where($field_name, $field_value)
	{
		$this->db->select('tutor.name,tutor.email, tutor_requests.tutor_id, tutor_requests.status as request_status, date(tutor_requests.date_of_request) date_of_request, tutor_requests.date_of_response, tutor_requests.reason');
		$this->db->from($this->table);
		$this->db->where($field_name, $field_value);
		$this->db->join('tutor',$this->table .  '.tutor_id = tutor.id');
		// echo $this->db->get_compiled_select();die();
		return $this->db->get();
	}
}