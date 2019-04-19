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

	

	public function get_login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get($this->table);
	}

	public function add($tutor)
	{
		$this->db->insert($this->table, $tutor);
		return $this->db->insert_id();
	}

}