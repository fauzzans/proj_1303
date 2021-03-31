<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online | Pondok Pesantren Darut Tafsir</title>
    <base href="<?php echo base_url(); ?>" />

    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

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

    <!-- Header -->
    <header>
        <?php
        if (strtolower($this->uri->segment(1)) == 'logcs') {
            $this->load->view('web/login');
        } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.png" style="margin-top:-15%;margin-bottom:-10px; display:none" width="100">
                    <div class="intro-text"><br>
                        <span class="name shad" style="font-size:35px; display:none">PPDB ONLINE <br> Pondok Pesantren Darut Tafsir</span>
                        <br>
                        <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
                            <span class="skills">
                                <a href="" class="btn btn-danger btn-lg" style="display:none"><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download Panduan PPDB Online</a>
                            </span>
                            <br> <br>
                            <hr class="star-light" style="display:none">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online Pondok Pesantren Darut Tafsir</h3> -->
                            <span>
                                <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online</a>
                                <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if ($ceks == '') {
                                                                                                                                                                        echo "Login";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo "Panel";
                                                                                                                                                                    } ?> Calon Siswa</a>
                                <br>
                            </span>
                        <?php } else { ?>
                            <span class="skills">
                            </span>
                            <br> <br>
                            <hr class="star-light">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online Pondok Pesantren Darut Tafsir</h3> -->
                            <span>
                                <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
                                <br>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <!-- About Section -->
    <section class="portfolio" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sejarah Pondok Pesantren Darut Tafsir</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="text-align:justify">
                    <p>Setelah menyelesaikan pelajaran disekolah dan pesantren diberbagai tempat, di Jawa Barat, Jawa Tengah dan Jawa Timur bersamaan dengan berakhirnya revolusi fisik, tibalah waktunya untuk mengisi kemerdekaan.
                        Maka pada tahun 1952, saya mendirikan pesantren yang dilengkapi dengan sekolah Ibtidaiyah, bertempat di Sindangpala Semplak Bogor. </p>
                    <p>Kekurangan-kekurangan setelah kemerdekaan sangat terasa. Pesantren yang telah ada tidak memenuhi kebutuhan suatu bangsa yang sedang membangun.
                        Keadaan ini menimbulkan berbagai upaya dari tokoh-tokoh Pesantren. Lahirnya Perguruan-perguruan Tinggi adalah natijah dari pada usaha ini. Banyak pesantren yang masih belum melihat kenyataan.
                        Mereka masih mengikuti cara lama. Usaha modernisasi sekalipun lambat, tapi masih berjalan terus. Kesulitan-kesulitanya datang dari pesantren itu sendiri. Kalau dilihat dari sejarahnya, logis.
                        Sebab pada umumnya pesantren-pesantren di Jawa Barat hanya mengutamakan pelajaran-pelajaran Ilmu Fiqih saja, tapi jarang yang sampai mempelajari ilmu perbandinganya.</p>
                    <p> Ilmu-ilmu yang penting seperti: Sejarah Umum, sejarah Islam, tidaklah masuk dalam pelajaran pesantren, padahal ilmu itu sangat dianjurkan oleh Alqur’an.
                        Sedang kan pelajaran Tafsir Alqur’an kebanyakan hanya terbatas kepada ayat ahkam saja. Itupun masih sangat sederhana. Sedangkan ayat yang mengenai ilmu Pengetahuan Umum tidak disentuhnya. Kesemuanya itu mengakibatkan:<br>
                    <ol class="profile">
                        <li>Sempit dalam berfikir</li>
                        <li>Menganggap Pengetahuan Umum itu bertentangan dengan Alqur’an</li>
                        <li>Perbedaan dalam Fiqih, sering menjadikanya pertentangan</li>
                    </ol>
                    <p>Maka jika timbul kelompok-kelompok ummat, atau terdapat jurang yang dalam antar Ulama dan Intelektual adalah logis sekali. Keadaan ini wajib dirubah.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="success" id="contact">
        <!-- <div class="container"> -->
        <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
            <div class="col-lg-4 text-center">
                <br><br>
                <h2>Kontak Kami</h2>
                <hr class="star-light">
                <h4>
                    Pondok Pesantren Darut Tafsir
                    Kampung Pabuaran Kaum, RT.3/RW.2, Cibanteng, Kec. Ciampea, Bogor, Jawa Barat 16620<br><br>
                </h4>
                <span style="color:#222;"><b><i class="fa fa-phone-square"></i> 0813-9973-0940</b> </span>
                &nbsp;
                <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i> ponpestrendaruttafsir@gmail.com</span>
                <br>
                <a href="http://www.pondokpesantrendaruttafsir.com/" target="_blank">
                    <h4 class="btn btn-success">Pondok Pesantren Darut Tafsir </h4>
                </a>
            </div>
            <div class="col-lg-8 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.83552867712!2d106.7153432!3d-6.5583857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d420476751b013e!2sPondok%20Pesantren%20Darut%20Tafsir!5e0!3m2!1sid!2sid!4v1615609259908!5m2!1sid!2sid" width="100%" height="465" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="http://www.pondokpesantrendaruttafsir" target="_blank">Pondok Pesantren Darut Tafsir</a> <?php echo date('Y'); ?> | IT Development
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


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

</body>

</html>