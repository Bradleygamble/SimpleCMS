<?php

class Pages extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('universal_model');

		$this->data = $this->universal_model->website();

	}

	public function index() {

		redirect('/pages/home');

	}

	public function home() {

		$this->parser->parse('header', $this->data);
		$this->parser->parse('home/index', $this->data);
		$this->parser->parse('footer', $this->data);

	}

	public function register() {

		$this->parser->parse('header', $this->data);
		$this->parser->parse('register/index', $this->data);
		$this->parser->parse('footer', $this->data);

	}
}

?>