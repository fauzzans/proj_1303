<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('wrapper/header'); ?>

<body>

  <!-- Navigation -->
  <?php $this->load->view('wrapper/navbar'); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">PPDB 2021/2022
      <!-- <small>by
        <a href="#">Author Darut Tafsir</a>
      </small> -->
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('index.php') ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Berita</li>
      <li class="breadcrumb-item active">PPDB 2021/2022</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="img/format-brosur-02.jpg" alt="">

        <hr class="news">

        <!-- Date/Time -->
        <p>Posted on January 1, 2017 at 12:00 PM</p>

        <hr class="news">

        <!-- Post Content -->
        <p class="lead">
          Persyaratan-persyaratan yang harus diserahkan, antara lain :</p>
        <ol>
          <li>
            Mengisi formulir yang telah disediakan
          </li>
          <li>Pas foto ukuran 3x4 (8 buah) dan 2x3 (4 buah)</li>
          <li>Fotokopi Ijazah sebanyak 3 rangkap</li>
          <li>Fotokopi buku rapor</li>
          <li>Fotokopi SKHUN</li>
          <li>Fotokopi Kartu Keluarga (KK)</li>
          <li>Fotokopi KTP orang tua</li>
          <li>NISN</li>

          <li>Membuat surat pernyataan kesiapan mematuhi tata tertib dan disiplin pondok (diketahui orang tua atau wali)</li>
          <li>Surat keterangan berkelakuan Baik dari sekolah asal (untuk pendaftar MA/SMA)</li>
        </ol>
        &#42;Berkas yang sudah diserahkan tidak dapat dikembalikan <br>
        &#42;Persyaratan yang belum lengkap dapat disusul
        </p>

        <!-- Comments Form -->
        <!-- <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div> -->

        <!-- Single Comment -->
        <!-- <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div> -->



      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="inpug-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Sitemap</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Sejarah Darut Tafsir</a>
                  </li>
                  <li>
                    <a href="#">Pimpinan Pesantren</a>
                  </li>
                  <li>
                    <a href="#">Visi dan Misi</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Berita</a>
                  </li>
                  <li>
                    <a href="#">Kegiatan</a>
                  </li>
                  <li>
                    <a href="#">Galeri</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <!-- <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div> -->

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php $this->load->view('wrapper/footer'); ?>

</body>

</html>