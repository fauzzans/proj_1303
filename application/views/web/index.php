<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ponpes Darut Tafsir</title>
    <base href="<?php echo base_url(); ?>" />

    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css"> -->

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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('index.php') ?>">Home</a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Web/Kegiatan') ?>">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Web/Berita') ?>">Berita</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Web/informasi') ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/background/bg_header2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="home-slider-desc" style="margin-left: 40px">
                            <h2 style="color: white">Judul Headline</h2>
                            <p>Ini adalah isi konten headline</p>
                            <div>
                                <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/background/1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="home-slider-desc" style="margin-left: 40px">
                            <h2 style="color: white">Judul Headline</h2>
                            <p>Ini adalah isi konten headline</p>
                            <div>
                                <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/background/2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="home-slider-desc" style="margin-left: 40px">
                            <h2 style="color: white">Judul Headline</h2>
                            <p>Ini adalah isi konten headline</p>
                            <div>
                                <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                            </div>
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
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3" style="float:none;margin:auto;">
                <span><a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:15px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online</a>
                    <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:15px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;Login Calon Siswa</a><br>
                </span>
            </div>
        </div>
        <br>
        <section>
            <div class="container shadow-lg p-3 mb-5 bg-white rounded">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-4 col-md-4">
                            <div class="text-center">
                                <img src="img/logo_PPDT.png" class="img-fluid lazyloaded" alt="" style="width: 300px">
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8" style="margin-top: 50px">
                            <div class="explore-content">
                                <h2>Yayasan Pondok Pesantren Darut Tafsir</h2>
                                <p class="sejarah">Setelah menyelesaikan pelajaran disekolah dan pesantren diberbagai tempat, di Jawa Barat, Jawa Tengah dan Jawa Timur bersamaan dengan berakhirnya revolusi fisik, tibalah waktunya untuk mengisi kemerdekaan. Maka pada tahun 1952, saya mendirikan pesantren yang dilengkapi dengan sekolah Ibtidaiyah, bertempat di Sindangpala Semplak Bogor. Kekurangan-kekurangan setelah kemerdekaan sangat terasa. Pesantren yang telah ada tidak memenuhi kebutuhan suatu bangsa yang sedang membangun. Keadaan ini menimbulkan berbagai upaya dari tokoh-tokoh Pesantren...</p>
                                <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <br>
        <section id="prosedur">
            <div class="container shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row" style="margin-top: 20px;">
                    <div class=" col-lg-12 text-center">
                        <h2>Prosedur PPDB Online</h2>
                        <hr>
                        <img class="img-fluid" src="img/alur_ppdb_online.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3" style="margin-top:-10px;">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan Prosedur PPDB Online</h4>
                                <ol style="font-size:18px;text-align:justify;padding-right: 10px;">
                                    <li>Calon Siswa mendaftarkan diri atau melakukan <b><a href="pendaftaran">Pendaftaran PPDB <i>online</i></a></b> melalui website <b><a href="">PPDB Pondok Pesantren Darut Tafsir</a></b>.</li>
                                    <li>Setelah Calon Siswa berhasil melakukan pendaftaran, Calon siswa wajib melakukan <b>Print Out Pendaftaran & Mempersiapkan Kelengkapan Berkas PPDB Pondok Pesantren Darut Tafsir</b>.</li>
                                    <li>Calon siswa datang ke Pondok Pesantren Darut Tafsir untuk <b>VERIFIKASI</b>, membawa <b>Bukti pendaftaran & Kelengkapan Berkas PPDB Pondok Pesantren Darut Tafsir</b>. </li>
                                    <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li>
                                    <li>Setelah selesai Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI</b>.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kegiatan -->
        <section class="container pt-3">
            <div class="container shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="text-align:center;margin-top:20px;">Kegiatan Terbaru</h2>
                        <hr>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/format-brosur-01.jpg" alt="Penerimaan Santri Baru 2021/2022">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="<?php echo site_url('web/berita_post') ?>">Penerimaan Santri Baru 2021/2022</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri13.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Peringatan Tahun Baru Islam 1442H</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri12.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Kegiatan Muhadharah Santri Putri</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/format-brosur-01.jpg" alt="Penerimaan Santri Baru 2021/2022">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="<?php echo site_url('web/berita_post') ?>">Penerimaan Santri Baru 2021/2022</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri13.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Peringatan Tahun Baru Islam 1442H</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri12.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Kegiatan Muhadharah Santri Putri</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-xs-offset-3" style="float:none;margin:auto;">
                            <a href="<?php echo site_url('Web/kegiatan') ?>" class="btn btn-success btn-lg" style="width:250px;margin:15px;">LEBIH BANYAK</a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Berita -->

        <section class="container pt-3">
            <div class="container shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="text-align:center;margin-top:20px;">Berita Terbaru</h2>
                        <hr>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/format-brosur-01.jpg" alt="Penerimaan Santri Baru 2021/2022">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="<?php echo site_url('web/berita_post') ?>">Penerimaan Santri Baru 2021/2022</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri13.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Peringatan Tahun Baru Islam 1442H</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri12.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Kegiatan Muhadharah Santri Putri</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri12.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Kegiatan Muhadharah Santri Putri</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/format-brosur-01.jpg" alt="Penerimaan Santri Baru 2021/2022">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="<?php echo site_url('web/berita_post') ?>">Penerimaan Santri Baru 2021/2022</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri13.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Peringatan Tahun Baru Islam 1442H</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri12.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Kegiatan Muhadharah Santri Putri</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/galeri/galeri12.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Kegiatan Muhadharah Santri Putri</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-xs-offset-3" style="float:none;margin:auto;">
                            <a href="<?php echo site_url('Web/berita') ?>" class="btn btn-success btn-lg" style="width:250px;margin:15px;">LEBIH BANYAK</a>
                        </div>
                    </div>
                </div>
        </section>
    </div>


    <!-- Page Content -->
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
        </h1>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe style="width: 100%; height: 400px; border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.83552867712!2d106.7153432!3d-6.5583857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d420476751b013e!2sPondok%20Pesantren%20Darut%20Tafsir!5e0!3m2!1sid!2sid!4v1615609259908!5m2!1sid!2sid"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Hubungi Kami</h3>
                <p>
                    Pondok Pesantren Darut Tafsir
                    Kampung Pabuaran Kaum, RT.3/RW.2, Cibanteng, Kec. Ciampea, Bogor, Jawa Barat 16620
                </p>
                <p>
                    Telp : 0813-9973-0940<br> Ustz.Tj : 0852-8243-3821<br> Pak Irta : 0813-8148-3924<br> Ibu Rosi : 0857-1801-7005

                </p>
                <p>
                    Email :
                    <a href="mailto:name@example.com">pondokpesantrendaruttafsir@gmail.com
                    </a>
                </p>
            </div>
        </div>
    </div>
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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        (function($) {
            "use strict";

            // manual carousel controls
            $('.next').click(function() {
                $('.carousel').carousel('next');
                return false;
            });
            $('.prev').click(function() {
                $('.carousel').carousel('prev');
                return false;
            });

        })(jQuery);
    </script>
</body>

</html>