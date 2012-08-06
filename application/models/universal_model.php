<?php

	class Universal_model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function website() {

			$data['website_name'] = 'SimpleCMS';
			$data['website_title'] = '| ' . ucfirst($this->uri->segment(2));

			$data['website_copyright'] = "&copy; 2012 | " . $data['website_name'];

			return $data;		

		}

	}

?>