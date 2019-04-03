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

		public function getFriends($id){
			$this->db->select('*');
			$this->db->from('friends');
			$this->db->where("Accepted = 1 AND (RequesterId = $id OR AccepterId = $id)");
			$query = $this->db->get();

			return $query->result_array();
		}

		public function searchFriend($search){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where("CONCAT(Name, ' ', Lastname) LIKE '%$search%' OR hobby LIKE '%$search%'");
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getFriendRequests($id){
			$this->db->select('*');
			$this->db->from('friends');
			$this->db->where("Accepted = 0 AND AccepterId = $id");
			$query = $this->db->get();

			return $query->result_array();
		}


		public function sendRequest($id, $RequesterId){
			// User data array
			$data = array(
				'RequesterId' => $RequesterId,
				'AccepterId' => $id,
				'Accepted' => 0
			);

			return $this->db->insert('friends', $data);
		}

		public function acceptFriend($requester, $accepter){
			$this->db->set('Accepted', 1);
			$this->db->where("RequesterId = $requester AND AccepterId = $accepter");
			$this->db->update('friends'); 
		}

		public function removeFriend($requester, $accepter){
			$this->db->where("RequesterId = $requester AND AccepterId = $accepter");
			$this->db->delete('friends');
		}

		public function getUser($id){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('Id' => $id));
			$query = $this->db->get();

			return $query->result_array();
		}

		public function resetPassword($email){
			$msg = "<h1>SocialMedia</h1>\nPassword reset email for: ".$email."\nIf you want to reset your password <a href=\"".base_url()."users/resetPassword?hash=".base64_encode($email)."\">click here</a>";
			//$msg = wordwrap($msg, 70);
			die($msg);
			//mail($email, "SocialMedia - Password reset", $msg);
		}

		public function confirmResetPassword($email, $password){
			$this->db->set('Password', $password);
			$this->db->where('Email', $email);
			$this->db->update('users'); 
			redirect('users/login');
		}

		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			}else {
				return false;
			}
		}

		public function getMessages($id, $friendId){
			$this->db->select('*');
			$this->db->from('message');
			$this->db->where("(Sender = $id AND Reciever = $friendId) OR (Sender = $friendId AND Reciever = $id)");
			$this->db->order_by('Date', 'desc');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function sendMessage($id, $friendId, $message){
			$data = array(
				'Sender' => $id,
				'Reciever' => $friendId,
				'Message' => $message,
				'Date' => date("Y-m-d H:i:s")
			);

			return $this->db->insert('message', $data);
		}
	}
?>