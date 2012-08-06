<?php

	class Register_model extends CI_Model {

		public function __construct() {

			parent::__construct();

		}

		public function add_user($data) {

			$this->db->insert('users', array('username' => $data['username'], 'email' => $data['email'], 'password' => $data['password']));

		}

	}

?>