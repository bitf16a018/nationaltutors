<?php
class Administrators extends CI_Model {
        private $table;
        public function __construct()
        {
                $this->load->database();
                $this->table  = 'administrator';
        }

        public function get_login($email, $password)
        {
                $this->db->where('email', $email);
                $this->db->where('password', $password);
                return $this->db->get($this->table);
        }
}