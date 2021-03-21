<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    <base href="<?php echo base_url(); ?>" />


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
        <h1 class="mt-4 mb-3">Visi dan Misi
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url('index.php') ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Visi dan Misi</li>
        </ol>
        <div>
            <h2>Visi</h2>
            <p><q>Most of Start Bootstrap's unstyled templates can be directly integrated into the Modern Business template. You can view all of our unstyled templates on our website at
                    <a href="https://startbootstrap.com/template-categories/unstyled">https://startbootstrap.com/template-categories/unstyled</a>.</q></p>
        </div>
        <div>
            <h2>Misi</h2>
            <ul>
                <li>bertaqwa</li>
                <li>bertaqwa</li>
                <li>bertaqwa</li>
            </ul>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>