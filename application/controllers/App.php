<?php
class App extends CI_Controller {

	public function index()
	{
		$data['title'] = "SocialMedia - App v0.1";
		$data['posts'] = $this->post_model->get_posts($this->session->userdata('id'));

		$this->load->view('templates/header', $data);
		$this->load->view('app/session');
		$this->load->view('templates/app_navbar');
		$this->load->view('app/index');
		$this->load->view('posts/index');
		$this->load->view('templates/footer');
	}

	public function friends(){
		$data['title'] = "SocialMedia - App v0.1";

		$this->load->view('templates/header', $data);
		$this->load->view('app/session');
		$this->load->view('templates/app_navbar');
		$this->load->view('app/friends');
		$this->load->view('templates/footer');
	}

	public function searchFriend(){
		$data['title'] = "SocialMedia - App v0.1";
		$this->form_validation->set_rules('search', 'Search', 'required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('app/session');
			$this->load->view('templates/app_navbar');
			$this->load->view('app/index');
			$this->load->view('posts/index');
			$this->load->view('templates/footer');
		}else {
			$data['search'] = $this->user_model->searchFriend($this->input->post('search'));
			$this->load->view('templates/header', $data);
			$this->load->view('app/session');
			$this->load->view('templates/app_navbar');
			$this->load->view('app/search', $data);
			$this->load->view('templates/footer');
		}
	}

	public function messages($id){
		$user = $this->user_model->getUser($id)[0];
		$data['title'] = "SocialMedia - Direct Message (".$user['Name']." ".$user['Lastname'].")";
		$data['user'] = $user;
		$data['messages'] = $this->user_model->getMessages($this->session->userdata('id'), $id);
		$this->load->view('templates/header', $data);
		$this->load->view('app/session');
		$this->load->view('templates/app_navbar');
		$this->load->view('app/message', $data);
		$this->load->view('templates/footer');
	}

	public function sendMessage(){
		$this->form_validation->set_rules('message', 'Message', 'required');
		if($this->form_validation->run() === FALSE){
			redirect('app/messages/'.$this->input->post('hash'));
		}else {
			$this->user_model->sendMessage($this->session->userdata('id'), $this->input->post('hash'), $this->input->post('message'));

			redirect('app/messages/'.$this->input->post('hash'));
		}
	}

}
