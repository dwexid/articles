<?php $this->load->view('header') ?>

    <div class="container">
      <?=validation_errors()?>
      <div class="card card-register mx-auto mt-5" style="border: none;border-radius: 3px">
        <div class="card-header bg-info text-white"><i class="fa fa-user-circle"> &nbsp;</i> REGISTER</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="firstName" type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="lastName" type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="username" type="text" id="username" class="form-control" placeholder="Username" required="required">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="re-password" type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <select class="form-control" name="role">
                    <option value="">- Daftar sebagai -</option>
                    <option value="pengelola">Partner / Pengelola</option>
                    <option value="penulis">Author / Penulis</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-block">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?=base_url('home/login')?>">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>assets/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
