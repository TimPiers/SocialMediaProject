<style type="text/css">
	.message {
		width: 100%;
		min-height: 100px;
		background-color: #343a40;
		position: fixed;
		bottom: 0;
	}

	.content {
		margin-bottom: 200px;
	}

</style>
<div class="content">
	<div class="row mt-2">
		<div class="col-12 col-lg-4 mt-2">
			<div class="card">
				<div class="card-body">
					<?php
						echo "<h3>".$user['Name']." ".$user['Lastname']."</h3>";
					?>
				</div>
			</div>
		</div>
	<?php 

	foreach($messages as $value => $message) : 
		if($value == 0){
			echo '<div class="col-12 col-lg-8 mt-2">';
		}else{
			echo '<div class="col-12 col-lg-8 offset-lg-4 mt-2">';
		}
		?>
			<div class="card">
				<div class="card-body">
				<?php $message_user = $this->user_model->getUser($message['Sender'])[0]; ?>
					<p><span class="font-weight-bold"><?php echo $message_user['Name']." ".$message_user['Lastname'];;?>: </span><?php echo $message['Message'];?></p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>

<div class="message">
<?php echo form_open('app/sendMessage'); ?>
	<div class="container mt-3">
	<input type="text" hidden name="hash" value="<?php echo $user['id']; ?>">
		<div class="form-group">
          <textarea class="form-control" id="inputPost" rows="4" name="message" style="resize: none; " required></textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right mb-3"">Verstuur</button>
	</div>
<?php echo form_close(); ?>
</div>

<script type="text/javascript">
	setInterval(function(){ 
		if(!$('#inputPost').val()){
			window.location.href = "<?php echo base_url().'app/messages/'.$user['id']; ?>";
		}
  }, 5000);
</script>