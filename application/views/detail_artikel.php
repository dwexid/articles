<?php
      $this->load->view('header');
      $this->load->view('navbar');
?>

  <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Artikel</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3 border-light">
            <div class="card-header bg-info" style="color:#f6f6f6">
             <i class="fas fa-chart-area"></i> Artikel
            </div>
            <div class="card-body">
              <div class="col-sm-12">
                <table class="table table table-hover">
                  <tr>
                    <th>Judul </th> <td>: <?=$artikel->judul?></td>
                  </tr>
                  <tr>
                    <th>Abstrak </th> <td>: <?=$artikel->abstrak?></td>
                  </tr>
                  <tr>
                    <th>Penulis </th> <td>: <?=$artikel->nama_penulis?></td>
                  </tr>
                  <tr>
                    <th>Keyword </th> <td>: <?=$artikel->keyword?></td>
                  </tr>
                  <tr>
                    <th>Referensi </th> <td>: <?=$artikel->referensi?></td>
                  </tr>
                  <tr>
                    <th>File </th> <td>: </td>
                  </tr>
                </table>
                <iframe src="https://docs.google.com/viewer?url=<?=base_url($artikel->file_path)?>&embedded=true" style="width:100%; height:500px;" frameborder="0"></iframe>
              </div>
            </div>
          </div>       

        </div>
        <!-- /.container-fluid -->

<?php 
      $this->load->view('footer');
?>