<div class="container mt-4 mb-3">
  <?php foreach($posts as $post) : ?>
    <div class="card mt-3">
      <div class="card-body">
      	<p class="mb-1 font-weight-bold">
      		<?php echo $post['Name'].' '.$post['Lastname']; ?>
      		<span class="float-right font-weight-light">
      			<?php echo substr($post['DatePosted'], 0, 16);?>
				<?php 
					if($post['PosterId'] === $this->session->userdata('id')){
						echo '<i class="far fa-trash-alt ml-2 text-danger clickable" onclick="deletePost('.$post['Id'].')"></i>';
					}
				?>
      		</span>
      	</p>
      <p class="mt-0 mb-0"><?php echo $post['Content']?></p>
      </div>
    </div>
  <?php endforeach ?>
</div>

<script type="text/javascript">
	function deletePost(id){
		window.location.href = "<?php echo base_url().'posts/delete/'?>" + id;
	}
</script>

