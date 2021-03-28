<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ponpes Darut Tafsir</title>
  <base href="<?php echo base_url(); ?>" />

  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('index.php') ?>"><img src="img/logo_PPDT.png" alt="Logo" width="30" style="position:absolute;margin-top:12px"> <span style="margin-left:35px; font-size:35px; font-weight:700">Ponpes Darut Tafsir</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="<?php echo site_url('Web/sejarah') ?>">Sejarah Darut Tafsir</a>
              <a class="dropdown-item" href="<?php echo site_url('Web/pimpinan') ?>">Pendiri Pesantren</a>
              <a class="dropdown-item" href="<?php echo site_url('Web/visimisi') ?>">Visi dan Misi</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Berita
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="<?php echo site_url('Web/berita') ?>">Berita</a>
              <a class="dropdown-item" href="<?php echo site_url('Web/kegiatan') ?>">Kegiatan</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Web/galeri') ?>">Galeri</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sekolah
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="<?php echo site_url('Web/dinniyah') ?>">Dinniyah</a>
              <a class="dropdown-item" href="<?php echo site_url('Web/mts') ?>">Mts</a>
              <a class="dropdown-item" href="<?php echo site_url('Web/ma') ?>">MA</a>
              <a class="dropdown-item" href="<?php echo site_url('Web/sma') ?>">SMA</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Web/informasi') ?>">Informasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('index.php') ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Madrasah Tsanawiyah</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="img/galeri/mts.jpg" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Madrasah Tsanawiyah Darut Tafsir</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      </div>
    </div>
    <!-- /.row -->
    <div class="my-4">
      <h3 class="my-3">Kegiatan Santri</h3>
      <ul>
        <li>03.30 - Shalat tahajud dilanjutkan shalat subuh berjamaah dan pembacaan awrad</li>
        <li>05.00 - Pengajian umum oleh pimpinan pesantren atau tahfidzh Al-Quran</li>
        <li>06.15 - Mandi pagi, sarapan, dan pemberian kosa kata bahasa arab/inggris serta muhadasah dan piket kamar/kelas/sekitar pondok</li>
        <li>07.30 - Belajar formal</li>
        <li>12.15 - Shalat Dzuhur berjamaah dilanjutkan makan siang</li>
        <li>13.00 - Belajar dinniyah (pengajian kitab) di kelas</li>
        <li>16.00 - Shalat ashar berjamaah dilanjutkan piket, makan sore, dan mandi</li>
        <li>17.30 - Tartilan Al-Quran dan persiapan shalat magrib berjamaah</li>
        <li>18.00 - Shalat magrib berjamaah dilanjutkan pembacaan awrad dan tahfidzh Al-Quran/Pengajian soragan</li>
        <li>19.30 - Shalat isya berjamaah</li>
        <li>20.00 - Belajar malam</li>
        <li>22.00 - Tidur</li>
      </ul>
    </div>
    <!-- Related Projects Row -->
    <h3 class="my-4">Ekstrakurikuler</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/silat.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/marching.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/pramuka.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/marching1.jpg" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->
    <!--modalimage-->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%;">
          </div>
        </div>
      </div>
    </div>
    <!--/modalimage-->
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; pondokpesantrendaruttafsir 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="assets/js/jqBootstrapValidation.js"></script>
  <script src="assets/js/contact_me.js"></script>

  <!-- Theme JavaScript -->
  <script src="assets/js/freelancer.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(function() {
      $('.pop').on('click', function(e) {
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');
        e.preventDefault();
      });
    });
  </script>

</body>

</html>