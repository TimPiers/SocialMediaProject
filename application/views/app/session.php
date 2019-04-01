<?php 
	
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	} 

?>