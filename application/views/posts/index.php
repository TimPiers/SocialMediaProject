<div class="container mt-4 mb-3">
  <?php foreach($posts as $post) : ?>
    <div class="card mt-3">
      <div class="card-body">
      <p class="mb-1 font-weight-bold"><?php echo $post['Name'].' '.$post['Lastname']; ?><span class="float-right font-weight-light"><?php echo substr($post['DatePosted'], 0, 16);?></span></p>
      <p class="mt-0 mb-0"><?php echo $post['Content']?></p>
      </div>
    </div>
  <?php endforeach ?>
</div>