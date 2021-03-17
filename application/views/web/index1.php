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
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/logo.png" alt="Logo" width="30" style="position:absolute;margin-top:-10px;"> <span style="margin-left:35px;">Ponpes Darut Tafsir</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo site_url('Web/profile') ?>">Sejarah</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('Web/visimisi') ?>">Visi Misi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">News<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">Berita</a></li>
                            <li><a class="dropdown-item" href="#">Kegiatan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sekolah<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a class="dropdown-item" href="#">Dinniyah</a></li>
                            <li><a class="dropdown-item" href="#">MTs</a></li>
                            <li><a class="dropdown-item" href="#">MA</a></li>
                            <li><a class="dropdown-item" href="#">SMA</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="#">Galeri</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
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
                                <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i>
                                    &nbsp;<?php if ($ceks == '') {
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

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang</h2>
                    <h2>Pondok Pesantren Darut Tafsir</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12 portfolio-item">
                    <a href="http://www.pondokpesantrendaruttafsir.com" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/logo.png" class="img-thumbnail" alt=""><br><br>
                        <span class="btn btn-success btn-block">www.pondokpesantrendaruttafsir.com</span>
                    </a>
                </div> -->
                <div class="col-lg-12 text-center">
                    <h2>VISI</h2>
                    <p>TERWUJUDNYA GENERASI ISLAM YANG BERILMU AMALIYAH, BERWAWASAN LUAS DAN BERAKHLAQUL KARIMAH</p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>MISI</h2>
                    <p>Menanamkan keimanan, ketaqwaan kepada Allah serta pembinaan akhlak al-karimah.</p>
                    <p>Menyelenggarakan pendidikan yang berkualitas dalam pencapaian prestasi akademik dan non akademik.</p>
                    <p>Menyiapkan kader-kader ulama dan pemimpin umat yang mutafaqqih fi ad-diin</p>
                    <p>Menanamkan jiwa keikhlasan, kesederhanaan, ukhuwah Islamiyah, kemandirian dan kebebasan dalam kehidupan sehari - hari.</p>
                    <p>Mempersiapkan santri untuk menjadi manusia mandiri dan berkhidmad kepada masyarakat, agama, nusa dan bangsa.</p>
                </div>
            </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>Pondok Pesantren Darut Tafsir menyediakan PPDB secara <i>online</i> diharapkan proses PPDB dapat berjalan cepat
                        dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB Online Pondok Pesantren Darut Tafsir. </p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#page-top" class="btn btn-md btn-outline">
                        <i class="fa fa-pencil-square-o "></i> PPDB Online
                    </a> &nbsp;&nbsp;
                    <a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Prosedur PPDB Online
                    </a>&nbsp;&nbsp;
                    <a href="logcs" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i> <?php if ($ceks == '') {
                                                            echo "Login";
                                                        } else {
                                                            echo "Panel";
                                                        } ?> Calon Siswa
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

    <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Prosedur PPDB Online</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <img class="img-responsive" src="img/alur_ppdb_online_new.jpg" alt="">
                    </div>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan Prosedur PPDB Online</h4>
                                <hr class="star-primary">
                                <ol style="font-size:18px;text-align:justify">
                                    <li>Calon Siswa mendaftarkan diri atau melakukan <b><a href="pendaftaran">Pendaftaran PPDB <i>online</i></a></b> melalui website <b><a href="">PPDB Pondok Pesantren Darut Tafsir</a></b>.</li>
                                    <li>Setelah Calon Siswa berhasil melakukan pendaftaran, Calon siswa wajib melakukan <b>Print Out Pendaftaran & Mempersiapkan Kelengkapan Berkas PPDB Pondok Pesantren Darut Tafsir</b>.</li>
                                    <li>Calon siswa datang ke Pondok Pesantren Darut Tafsir untuk <b>VERIFIKASI</b>, membawa <b>Bukti pendaftaran & Kelengkapan Berkas PPDB Pondok Pesantren Darut Tafsir</b>. </li>
                                    <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li>
                                    <li>Setelah selesai Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI</b>.</li>
                                    <li>Calon Siswa wajib mengambil <b>NOMOR TEST & Pengecekan Ruang Ujian</b>.</li>
                                    <li>Jika Calon Siswa sudah mengambil <b>NOMOR TEST & Pengecekan Ruang Ujian</b> selanjutnya Calon Siswa wajib melakukan <b>TEST tertulis POTENSI AKADEMIK</b>.</li>
                                    <li>PENGUMUMAN HASIL PPDB Online bisa dilihat di Web PPDB Pondok Pesantren Darut Tafsir. Untuk <b>No. Pendaftaran</b> sesuaikan dengan <b>Formulir No. Pendaftaran</b> & <b>Passwordnya</b> yaitu <b>NISN</b> Calon Siswa tersebut.</li>
                                    <li>Jika Calon Siswa dinyatakan <b>LULUS</b> maka Calon Siswa Wajib <b>Registrasi/Daftar Ulang</b> di <b>Pondok Pesantren Darut Tafsir</b>.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
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
                        Copyright &copy; <a href="http://www.sman1belitang.sch.id" target="_blank">Pondok Pesantren Darut Tafsir</a> <?php echo date('Y'); ?> | IT Development
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