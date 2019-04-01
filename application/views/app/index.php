<style type="text/css">
  body {
    background-color: #474787; 
  }

  .card {
    box-shadow: 1.5px 1.5px #2c2c54;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
  <a class="navbar-brand" href="#">
    <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
  </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'app/index';?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'app/friends';?>">Friends</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'users/logout';?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
  <div class="form-group">
    <input type="text" class="form-control" id="inputSearch" placeholder="Zoeken..." name="search" style="width:80%; display: inline-block; margin-left: 1.5%">
    <button class="btn btn-lg btn-primary"  style="width:15%; position: relative; top: -2.5px;"><i class="fa fa-search"></i></button>
  </div>
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
