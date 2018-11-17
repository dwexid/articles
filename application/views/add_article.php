  <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tambah Artikel</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3 border-light">
            <div class="card-header bg-info" style="color:#f6f6f6">
             <i class="fas fa-chart-area"></i> Tambah Artikel
            </div>
            <div class="card-body">
              <div class="col-md-10 offset-md-1">
              <form class="form-horizontal" method="post" action="artikel/add" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="penulis" class="control-label">Nama Penulis</label>
                  <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Nama Penulis">
                </div>
                <div class="form-group">
                  <label for="judul" class="control-label">Judul Artikel</label>
                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Artikel">
                </div>
                <div class="form-group">
                  <label for="abstrak" class="control-label">Abstrak</label>
                  <textarea name="abstrak" class="form-control" id="abstrak" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="keyword" class="control-label">Keyword</label>
                  <input type="text" name="keyword" class="form-control" id="keyword" placeholder="Keyword">
                </div>
                <div class="form-group">
                  <label for="referensi" class="control-label">Referensi</label>
                  <textarea name="referensi" class="form-control" id="referensi" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="file_artikel">File Artikel</label>
                  <input type="file" name="file_artikel" id="file_artikel" class="form-control-file">
                </div>
                <div class="form-group">
                  <label for="rekomendasi" class="control-label">Rekomendasi Jurnal/Partner</label>
                  <select class="form-control" name="rekomendasi">
                    <option value="">-</option>
                    <option value="">JOIN (Jurnal Online Informatika)</option>
                  </select>
                </div>
                <div class="col-md-4 row">
                  <button type="submit" class="btn btn-info btn-block">Tambahkan</button>
                </div>
              </form>
              </div>
            </div>
          </div>       

        </div>
        <!-- /.container-fluid -->
