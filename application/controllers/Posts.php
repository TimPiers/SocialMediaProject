<?php
class Posts extends CI_Controller {

	public function index()
	{
		$data['title'] = "SocialMedia - Posts";

		$data['posts'] = $this->post_model->get_posts(1);

		$this->load->view('templates/header', $data);
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}
}
