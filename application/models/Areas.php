<?php
class Areas extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'area';
	}

	public function get_table()
	{
		$this->db->select('id, name as text');
		return $this->db->get($this->table);
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}
}