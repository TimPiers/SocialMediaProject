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

	public function post(){
		$this->form_validation->set_rules('message', 'Message', 'required');

		if($this->form_validation->run() === FALSE){
			redirect('app/index');
		}else {
			$this->post_model->post($this->input->post('message'));
			redirect('app/index');
		}
	}

	public function delete($id){
		$this->post_model->deletePost($id);
		redirect('app/index');
	}
}
