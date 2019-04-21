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
}