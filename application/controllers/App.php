<?php
class App extends CI_Controller {

	public function index()
	{
		$data['title'] = "SocialMedia - App v0.1";
		$data['posts'] = $this->post_model->get_posts($this->session->userdata('id'));

		$this->load->view('templates/header', $data);
		$this->load->view('app/session');
		$this->load->view('templates/app_navbar', $data);
		$this->load->view('app/index', $data);
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function friends(){
		$data['title'] = "SocialMedia - App v0.1";

		$this->load->view('templates/header', $data);
		$this->load->view('app/session');
		$this->load->view('templates/app_navbar', $data);
		$this->load->view('app/friends', $data);
		$this->load->view('templates/footer');
	}
}
