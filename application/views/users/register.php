<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
        <div class="card my-5" style="box-shadow: 3px 3px #2c2c54;">
          <div class="card-body">
          <h5 class="card-title text-center">Sign Up</h5>
            <?php echo '<span class="text-danger">'.validation_errors().'</span>'; ?>
            <?php echo form_open('users/register'); ?>
              <div class="form-label-group">
                <label for="inputName">Firstname</label>
                <input type="text" id="inputName" class="form-control" placeholder="Firstname" required name="name">
              </div>

              <div class="form-label-group">
                <label for="inputLastname">Lastname</label>
                <input type="text" id="inputLastname" class="form-control" placeholder="Lastname" required name="lastname">
              </div>

              <div class="form-label-group">
              	<label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required name="email">
              </div>

              <div class="form-label-group">
              	<label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
              </div>

              <div class="form-label-group">
                <label for="inputHobby">Hobby's</label>
                <input type="text" id="inputHobby" class="form-control" placeholder="Hobbys" required name="hobby">
              </div>

              <div class="form-label-group">
                <label for="inputCity">City</label>
                <input type="text" id="inputCity" class="form-control" placeholder="City" required name="city">
              </div>

              <div class="form-label-group">
                <label for="inputAdress">Adress</label>
                <input type="text" id="inputAdress" class="form-control" placeholder="Adress" required name="adress">
              </div>

              <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign up</button>
              <hr>
              <p class="text-center">Already have an account? <a href="<?php echo base_url(); ?>users/login">Sign in</a> instead</p>
              <p class="handsign">With <span class="text-danger"><i class="fas fa-heart"></i></span> from Tim Piers</p>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    if($this->session->userdata('logged_in')){
      redirect('app/index');
    } 
  ?>