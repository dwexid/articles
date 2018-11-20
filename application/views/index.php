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

    <link href="<?=base_url()?>assets/style.css" rel="stylesheet">

  </head>

<body>

  <div class="jumbotron jumbotron-fluid">
    <nav class="navbar navbar-expand navbar-light">
      <a class="navbar-brand text-white" href="#"><i class="fa fa-bookmark"></i> &nbsp;Journal Articles</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn border-info mr-sm-2 text-info" href="<?=base_url('home/login')?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-info ml-sm-2" href="<?=base_url('home/register')?>">Register</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container text-center py-5">
      <h1 class="home-desc text-white display-4">Journal Articles</h1>
      <p class="home-desc text-white lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      <a href="#" class="display-4 text-white"><i class="fa fa-angle-down"></i></a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row my-5 text-center">
      <div class="col" style="border-right: 1px solid #ddd">
        <p class="display-4">Author</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. 
      </p>
      </div>
      <div class="col">
        <p class="display-4">Partner</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. 
      </p>
      </div>
    </div>
    <div class="container my-3 text-white" id="Published">
      <h3 class="text-center text-secondary">Published Journal</h3>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col py-5 bg-warning">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </div>
              <div class="col py-5 bg-danger">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col py-5 bg-info">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </div>
              <div class="col py-5 bg-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col py-5 bg-success">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </div>
              <div class="col py-5 bg-primary">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>




    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?=base_url()?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>assets/sb-admin.js"></script>

</body>
</html> 