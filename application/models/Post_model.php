<?php
	class Post_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}

		public function get_posts($PosterId = 0){
			if($PosterId !== 0){
				$this->db->select('`posts`.`PosterId`, `users`.`Name`, `users`.`Lastname`, `posts`.`Content`, `posts`.`Image`, `posts`.`DatePosted`');
				$this->db->from('posts');
				$this->db->join('users', '`posts`.`PosterId` = `users`.`id`');
				$this->db->where(array('PosterId' => $PosterId));
				$this->db->order_by('DatePosted', 'desc');
				$query = $this->db->get();

				return $query->result_array();
			}
			
			return array();
		}

		public function post($message){
			$data = array(
				'PosterId' => $this->session->userdata('id'),
				'Content' => $message,
				'Image' => null,
				'DatePosted' => date("Y-m-d H:i:s")
			);

			return $this->db->insert('posts', $data);
		}


	}
?>