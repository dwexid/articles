<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url('assets')?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets')?>/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets')?>/sb-admin.css" rel="stylesheet">
    <link href="<?=base_url('assets')?>/style.css" rel="stylesheet">

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
