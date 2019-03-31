<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card my-5" style="box-shadow: 1px 2px #dbdbdb;">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <?php echo form_open('users/login'); ?>
              <div class="form-label-group">
              	<label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
              </div>

              <div class="form-label-group">
              	<label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
              </div>

              <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Login</button>
              <hr>
              <p class="text-center">Dont have an account? <a href="<?php echo base_url(); ?>users/register">Sign up</a> instead</p>
              <p class="handsign">With <span class="text-danger"><i class="fas fa-heart"></i></span> from Tim Piers</p>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>