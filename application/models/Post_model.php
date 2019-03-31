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
				$query = $this->db->get();

				return $query->result_array();
			}
			
			return array();
		}

	}
?>