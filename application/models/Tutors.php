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

	

	public function get_where($field_name, $field_value)
	{
		$this->db->where($field_name, $field_value);
		return $this->db->get($this->table);
	}

	public function get_login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get($this->table);
	}

	public function get_fields($id, $fields)
	{
		$this->db->select($fields);
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}

	public function add($tutor)
	{
		$this->db->insert($this->table, $tutor);
		return $this->db->insert_id();
	}

	public function update($id, $data)
	{
		$this->db->set($data);
		$this->db->where('id',$id);
		$this->db->update($this->table);
		return $this->db->affected_rows();
	}

}