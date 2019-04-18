<?php
class Tutors extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'tutor';
	}

	public function get_table()
	{
		return $this->db->get($this->table);
	}

	public function add($tutor)
	{
		$this->db->insert($this->table, $tutor);
		return $this->db->affected_rows();
	}

}