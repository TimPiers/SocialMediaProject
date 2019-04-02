<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card my-5" style="box-shadow: 3px 3px #2c2c54;">
          <div class="card-body">
            <h5 class="card-title text-center">Change password</h5>
            <?php echo form_open('users/resetPassword'); ?>
              <div class="form-label-group">
              	<label for="inputEmail">Password</label>
                <input type="password" id="inputEmail" class="form-control" placeholder="Password" name="password" required autofocus>
              </div>

              <input hidden type="text" value="<?php echo $_GET['hash'];?>" name="hash">
              
              <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Confirm</button>
              <hr>
              <p class="handsign">With <span class="text-danger"><i class="fas fa-heart"></i></span> from Tim Piers</p>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>