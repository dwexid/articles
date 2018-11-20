<?php $this->load->view('header') ?>

    <div class="container">
      <div class="card card-login mx-auto" style="margin-top:100px;border:none;border-radius: 1px">
        <?=validation_errors()?>
        <div class="card-header bg-info text-white"><i class="fa fa-user-circle"> &nbsp;</i> LOGIN</div>
        <div class="card-body">
  
          <?php if($this->session->userdata('error') != ""): ?>
            <div class="alert alert-danger">salah</div>
          <?php $this->session->unset_userdata('error'); endif; ?>
  
          <form action="<?=base_url('index.php/home/login')?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-info btn-block" type="submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?=base_url('home/register')?>">Register an Account</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets')?>/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets')?>/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets')?>/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
