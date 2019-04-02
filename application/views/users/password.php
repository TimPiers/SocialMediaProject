<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card my-5" style="box-shadow: 3px 3px #2c2c54;">
          <div class="card-body">
            <h5 class="card-title text-center">Reset password</h5>
            <?php echo form_open('users/forgotPassword'); ?>
              <div class="form-label-group">
              	<label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
              </div>
              
              <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Reset password</button>
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