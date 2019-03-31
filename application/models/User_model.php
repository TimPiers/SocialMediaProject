<?php
	class User_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}

		public function register($enc_password){
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'lastname' => $this->input->post('lastname'),
				'email' => $this->input->post('email'),
				'password' => $enc_password,
				'hobby' => $this->input->post('hobby'),
				'city' => $this->input->post('city'),
				'adress' => $this->input->post('adress'),
			);

			return $this->db->insert('users', $data);
		}

		public function login($email, $enc_password){
			$this->db->where('email', $email);
			$this->db->where('password', $enc_password);

			$result = $this->db->get('users');

			if($result->num_rows() === 1) {
				return $result->row(0)->id;
			}else {
				return false;
			}
		}

		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			}else {
				return false;
			}
		}
	}
?>