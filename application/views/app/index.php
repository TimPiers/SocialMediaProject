<style type="text/css">
  body {
    background-color: #474787; 
  }

  .card {
    box-shadow: 1.5px 1.5px #2c2c54;
  }
</style>

<div class="container mt-3">
<?php echo form_open('app/searchFriend'); ?>
  <div class="form-group">
    <input type=ext" class="form-control" id="inputSearch" placeholder="Zoeken..." name="search" style="width:80%; display: inline-block; margin-left: 1.5%" required> 
    <button class="btn btn-lg btn-primary"  style="width:15%; position: relative; top: -2.5px;"><i class="fa fa-search"></i></button>
  </div>
<?php echo form_close(); ?>
</div>

<div class="container">
<?php echo form_open('posts/post'); ?>
  <div class="card">
    <div class="card-body">
    <h6>Plaats een bericht</h6>
    <div class="row">
      <div class="col-12 col-lg-11">
        <div class="form-group">
          <textarea class="form-control" id="inputPost" rows="4" name="message" style="resize: none; "></textarea>
        </div>
      </div>
      <div class="col-12 col-lg-1">
        <button type="submit" class="btn btn-primary float-right">Plaats</button>
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
</div>
