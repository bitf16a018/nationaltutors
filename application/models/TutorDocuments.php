<?php
class TutorDocuments extends CI_Model {
	private $table;
	public function __construct()
	{
		$this->load->database();
		$this->table  = 'tutor_documents';
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

	public function insert($id,$records)
	{
		foreach ($records as $key => $value) {
			$data = array(
				'document_name' => $value,
				'tutor_id' => $id
			);

			$this->db->insert($this->table, $data);
		}
		return $this->db->affected_rows();
	}
}