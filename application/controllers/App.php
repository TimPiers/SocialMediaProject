<?php
class App extends CI_Controller {

	public function index()
	{
		$data['title'] = "SocialMedia - App v0.1";

		$this->load->view('templates/header', $data);
		$this->load->view('app/session');
		$this->load->view('app/index', $data);
		$this->load->view('templates/footer');
	}
}
