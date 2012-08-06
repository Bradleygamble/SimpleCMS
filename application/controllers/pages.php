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

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

			if ($this->form_validation->run() == FALSE)
			{
				$this->parser->parse('header', $this->data);
				$this->parser->parse('register/index', $this->data);
				$this->parser->parse('footer', $this->data);
			} else {
				$this->load->model('register_model', 'register');

				$this->register->add_user($_POST);

				$this->parser->parse('header', $this->data);
				$this->parser->parse('register/success', $this->data);
				$this->parser->parse('footer', $this->data);
			}

	}

	public function register_account() {

	}
}

?>