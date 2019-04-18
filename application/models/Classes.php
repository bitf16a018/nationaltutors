<?php
class Classes extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'class';
	}

	public function get_table()
	{
		return $this->db->get($this->table);
	}
}