<style type="text/css">
	.user-info > p, .user-info > hr {
		margin: 0;
	}

	.request p {
		margin: 0;
	}

	.requests hr {
		border-top: 1px solid #888;
		margin: 0;
	}

	.request {
		border-bottom: 1px solid #888;
		padding: 5px 0;
	}

	.request i {
		position: relative;
		top: 5px;
	}
</style>

<div class="row mt-3">
	<div class="col-12 col-lg-4 mb-3">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body user-info">
					<?php 
						$user = $this->user_model->getUser($this->session->userdata('id'))[0]; 
						echo '<h6>'.$user['Name'].' '.$user['Lastname'].'</h6>';
						echo '<hr>';
						echo '<p>Email: '.$user['Email'].'</p>';
						echo '<p>Adress: '.$user['Adress'].', '.$user['City'].'</p>';
						echo '<p>Hobby\'s: '.$user['Hobby'].'</p>';
					?>
				</div>
			</div>
		</div>
		<div class="col-12 mt-3">
			<div class="card">
				<div class="card-body">
					<h6>Incomming requests</h6>
					<div class="requests">
					
					<?php 
					$requests = $this->user_model->getFriendRequests($this->session->userdata('id'));
					if(empty($requests)){
						echo '<p>None</p>';
					}else{
						foreach ($requests as $request) {
							$requester = $this->user_model->getUser($request['RequesterId'])[0];
							echo '<hr>';
							echo '<div class="request">';
							echo '<i class="far fa-times-circle float-right clickable text-danger" onClick="removeFriend('.$requester['id'].')"></i>';
							echo '<i class="far fa-check-circle float-right mr-2 clickable text-success" onClick="acceptFriend('.$requester['id'].')"></i>';
							echo '<p>'.$requester['Name'].' '.$requester['Lastname'].' ('.$requester['City'].')</p>';
							echo '</div>';
						}
					}
					?>
					<!--
					
					-->
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	<div class="col-12 col-lg-8">
		<div class="row">
		<?php 
			$friends = $this->user_model->getFriends($this->session->userdata('id'));
			foreach ($friends as $friend) : 
				$friend_id = ($this->session->userdata('id') == $friend['AccepterId'] ? $friend['RequesterId'] : $friend['AccepterId']);
				$friendObj = $this->user_model->getUser($friend_id)[0];
			?>
			<div class="col-12 mb-3">
				<div class="card">
					<div class="card-body">
					<div class="float-right text-danger ml-3"><i class="fas fa-user-times clickable" style="font-size: 1.75em;" onClick="removeFriend(<?php echo $friend_id; ?>)"></i></div>
					<div class="float-right text-primary"><i class="fas fa-inbox clickable" style="font-size: 1.75em;" onClick="inbox(<?php echo $friend_id; ?>)"></i></div>
					<div style="display: inline-block;">
						<img class="mr-2" src="https://www.deviersprong.nl/wp-content/uploads/2017/11/img-person-placeholder.jpg" style="width: 75px; height: 75px; display: block;">
					</div>
					<div style="display: inline-block;">
						<h6><?php echo $friendObj['Name'].' '.$friendObj['Lastname']; ?></h6>
						<h6><?php echo $friendObj['City']; ?></h6>
						<h6><?php echo $friendObj['Hobby']; ?></h6>
					</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	function inbox(id){
		window.location.href = "<?php echo base_url().'app/messages/'?>" + id;
	}

	function acceptFriend(id){
		window.location.href = "<?php echo base_url().'users/acceptFriend/'?>" + id;
	}

	function removeFriend(id){
		window.location.href = "<?php echo base_url().'users/removeFriend/'?>" + id;
	}
</script>
