<?php
class TutorPrefferedClasses extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'tutor_preffered_classes';
	}

	public function get_table()
	{
		return $this->db->get($this->table);
	}


	public function insert($id,$records)
	{
		foreach ($records as $key => $value) {
			$data = array(
				'class_id' => $value,
				'tutor_id' => $id
			);

			$this->db->insert($this->table, $data);
		}
	}

	public function get_where($field_name, $field_value)
	{
		$this->db->where($field_name, $field_value);
		return $this->db->get($this->table);
	}
}