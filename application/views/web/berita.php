<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('wrapper/header'); ?>

<body>
  <?php $this->load->view('wrapper/navbar'); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('index.php') ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Berita</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="img/format-brosur-01.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">PPDB 2021/2022</h2>
            <p class="card-text">Penerimaan santri baru tahun ajaran 2021/202</p>
            <a href="<?php echo site_url('Web/berita_post') ?>" class="btn btn-primary">Selengkapnya &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on April 5, 2021 by
            <a href="#">pondokpesantrendaruttafsir</a>
          </div>
        </div>

        <div class="card mb-4">
          <img class="card-img-top" src="img/disinfektan1.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Kecamatan Ciampea Lakukan Penyemprotan Disinfektan di Dua Pondok Pesantren</h2>
            <p class="card-text">
            <p><strong>DIKUTIP DARI</strong> <strong>headlinebogor.com</strong> – Pemerintah Kecamatan Ciampea, Kabupaten Bogor kembali melakukan penyemprotan disinfektan di 4 titik pondok pesantren dan Mesjid Raya, dua wilayah Desa Bojong Rangkas dan Cibanteng yang dipimpin langsung Camat Ciampea serta dampingi Kepala Desa di dua lokasi, Desa Bojong Rangkas dan Cibanteng, Kecamatan Ciampea, kabupaten Bogor. (1/4).</p>
            </p>
            <a href="<?php echo site_url('Web/berita_post_1') ?>" class="btn btn-primary">Selengkapnya &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on April 5, 2021 by
            <a href="#">pondokpesantrendaruttafsir</a>
          </div>
        </div>

        <div class="card mb-4">
          <img class="card-img-top" src="img/stafsus.jpeg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Silaturahmi Staf Khusus Presiden RI Dengan Pimpinan PP. Darut Tafsir Ciampea Bogor.</h2>
            <p class="card-text">
            <p><strong>POLRES BOGOR – </strong>Silaturahmi Staf Khusus Presiden RI Dengan Pimpinan PP. Darut Tafsir Ciampea Bogor Dan Distribusi Bantuan Untuk Pencegahan Penyebaran Covid 19 Di Lingkungan Pesantren.</p>
            </p>
            <a href="<?php echo site_url('Web/berita_post_2') ?>" class="btn btn-primary">Selengkapnya &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on April 5, 2021 by
            <a href="#">pondokpesantrendaruttafsir</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
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