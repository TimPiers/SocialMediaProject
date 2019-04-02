<style type="text/css">
	.user-info > p, .user-info > hr {
		margin: 0;
	}
</style>

<div class="row mt-3">
	<div class="col-12 col-lg-4 mb-3">
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
	<div class="col-12 col-lg-8">
		<div class="row">
			<div class="col-12 mb-3">
				<div class="card">
					<div class="card-body">
					<div class="float-right text-danger"><i class="fas fa-user-times clickable" style="font-size: 1.75em;"></i></div>
					<div style="display: inline-block;">
						<img class="mr-2" src="https://www.deviersprong.nl/wp-content/uploads/2017/11/img-person-placeholder.jpg" style="width: 75px; height: 75px; display: block;">
					</div>
					<div style="display: inline-block;">
						<h6>Username</h6>
						<h6>Plaats</h6>
						<h6>Hobby's</h6>
					</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>