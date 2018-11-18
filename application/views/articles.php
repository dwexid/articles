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
                <table class="table table-bordered table-hover table-striped table-md">
                  <thead>
                    <tr class="text-center text-secondary">
                      <th>NO</th>
                      <th>AUTHOR</th>
                      <th>JUDUL</th>
                      <th>KEYWORD</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>

                  <?php $i=1; foreach($articles as $res): ?>
                  <tbody>
                    <tr>
                      <td class="text-center"><?=$i++?></td>
                      <td><?=$res->nama_penulis?></td>
                      <td><?=$res->judul?></td>
                      <td><?=$res->keyword?></td>
                      <td>
                        <a href="#" class="btn btn-success btn-sm btn-block" style="padding:2px 10px">Detail</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>

                </table>
              </div>
            </div>
          </div>       

        </div>
        <!-- /.container-fluid -->

<?php 
      $this->load->view('footer');
?>