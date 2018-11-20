<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Journal Articles</title>

    <!-- Bootstrap core CSS-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?=base_url()?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/sb-admin.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/style.css" rel="stylesheet">

  </head>

  <body id="page-top" <?=!$this->session->userdata('username')?"style='background: #f7f7f7'":""?>>

    <nav class="navbar navbar-expand navbar-dark static-top bg-info" style="">

      <a class="navbar-brand mr-1" href="<?=base_url()?>"><i class="fa fa-bookmark"></i> &nbsp;Journal Articles</a>

      <?php if($this->session->userdata('username')!=null) : ?>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#" style="padding-left: 20px">
        <i class="fas fa-bars"></i>
      </button>
      <?php endif; ?>

      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
      </div>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <?php if($this->session->userdata('username')!=null) : ?>

        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=$this->session->userdata('username')?>
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fa fa-cog"></i>&nbsp; Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-list"></i>&nbsp; Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=base_url('home/logout')?>">
              <i class="fa fa-power-off"></i>&nbsp; Logout</a>
          </div>
        </li>

        <?php endif; ?>
      </ul>

    </nav>