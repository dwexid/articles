<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/sb-admin.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/style.css" rel="stylesheet">

  </head>

  <body class="" style="background: #f1f1f1">

    <nav class="navbar navbar-expand navbar-dark static-top bg-info" style="">

      <a class="navbar-brand mr-1" href="index.html">[ A R T I C L E ]</a>

      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
      </div>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

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
                    <option value="penulis">Penulis</option>
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
