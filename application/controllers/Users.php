<?php
class Users extends CI_Controller {

	public function register() {
		$data['title'] = "SocialMedia - Sign up";

		$this->form_validation->set_rules('name', 'Name', 'required|strip_tags');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required|strip_tags');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists|strip_tags');
		$this->form_validation->set_rules('password', 'Password', 'required|strip_tags');
		$this->form_validation->set_rules('hobby', 'Hobby', 'required|strip_tags');
		$this->form_validation->set_rules('city', 'City', 'required|strip_tags');
		$this->form_validation->set_rules('adress', 'Adress', 'required|strip_tags');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		}else {
			$enc_password = hash('sha256', $this->input->post('password'));
			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_registered', 'Succesfully registered yourself.');

			redirect('users/login');
		}
	}

	public function login() {
		$data['title'] = "SocialMedia - Sign in";

		$this->form_validation->set_rules('email', 'Email', 'required|strip_tags');
		$this->form_validation->set_rules('password', 'Password', 'required|strip_tags');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		}else {
			$email = $this->input->post('email');
			$enc_password = hash('sha256', $this->input->post('password'));

			$user_id = $this->user_model->login($email, $enc_password);

			if($user_id){
				$user_data = array(
					'id' => $user_id,
					'email' => $email,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				redirect('app/index');
			}else {
				$this->session->set_flashdata('login_failed', 'Invalid login');
				redirect('users/login');
			}

			
		}
	}

	public function forgotPassword(){
		$data['title'] = "SocialMedia - Forgot password";
		$this->form_validation->set_rules('email', 'Email', 'required|strip_tags');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('users/password', $data);
			$this->load->view('templates/footer');
		}else {
			$email = $this->input->post('email');

			$this->user_model->resetPassword($email);

			redirect('users/login');
		}
	}

	public function resetPassword(){
		
		$data['title'] = "SocialMedia - Reset password";
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('users/reset', $data);
			$this->load->view('templates/footer');
		}else {
			$this->user_model->confirmResetPassword(base64_decode($this->input->post('hash')), hash('sha256', $this->input->post('password')));

			redirect('users/login');
		}
	}

	public function sendRequest($requestId){
		$this->user_model->sendRequest($requestId, $this->session->userdata('id'));
		redirect('app/index');
	}

	public function acceptFriend($requestId){
		$this->user_model->acceptFriend($requestId, $this->session->userdata('id'));
		redirect('app/friends');
	}

	public function removeFriend($requestId){
		$this->user_model->removeFriend($requestId, $this->session->userdata('id'));
		redirect('app/friends');
	}

	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		redirect('users/login');
	}

	public function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists', 'That email adress has already been taken.');	
		if($this->user_model->check_email_exists($email)){
			return true;
		}else{
			return false;
		}
		
	}

}
