<h1 class="text-white ml-3">Search results:</h1>
<div class="row">
<?php foreach($search as $user): ?>
	<div class="col-12 col-lg-4">
		<div class="card">
			<h5 class="pl-2 pt-1"><?php echo $user['Name']." ".$user['Lastname']." (".$user['City'].")";?><i class="fas fa-user-friends float-right clickable text-primary mr-2 mt-1" onClick="sendRequest(<?php echo $user['id']; ?>)"></i></h5>
		</div>
	</div>
<?php endforeach; ?>
</div>

<script type="text/javascript">
	function sendRequest(id){
		window.location.href = "<?php echo base_url().'users/sendRequest/'?>" + id;
	}
</script>