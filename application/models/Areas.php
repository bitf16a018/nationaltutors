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
		return $this->db->get($this->table);
	}
}