<?php
class TutorPrefferedSubjects extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'tutor_preffered_subjects';
	}

	public function get_table()
	{
		return $this->db->get($this->table);
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}
}