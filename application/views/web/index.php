<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('wrapper/header'); ?>

<body>
    <?php $this->load->view('wrapper/navbar'); ?>
    <?php $this->load->view('wrapper/carousel'); ?>
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
                        <div class="col-xs-6 col-xs-offset-3" style="float:none;margin:auto;">
                            <a href="<?php echo site_url('Web/kegiatan') ?>" class="btn btn-success btn-lg" style="width:250px;margin:15px;">LEBIH BANYAK</a>
                        </div>
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
                                <img class="card-img-top" src="img/thumb/disinfektan1.jpg" alt="" style="display: flex;">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="<?php echo site_url('web/berita_post_1') ?>">Kecamatan Ciampea Lakukan Penyemprotan Disinfektan di Dua Pondok Pesantren</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="card h-100">
                                <img class="card-img-top" src="img/thumb/stafsus.jpeg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="<?php echo site_url('web_berita_post_2') ?>">SILATURAHMI STAF KHUSUS PRESIDEN RI DENGAN PIMPINAN PP. DARUT TAFSIR CIAMPEA BOGOR.</a>
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
            </div>
        </section>
    </div>


    <!-- Page Content -->
    <div class="container">

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
                    <br>
                    <i class="fas fa-envelope-open-text"> pondokpesantrendaruttafsir@gmail.com</i><br>
                    <i class="fab fa-facebook fa-1x"> </i><a href="https://web.facebook.com/pesantren.daruttafsir">Pesantren Darut Tafsir</a><br>
                    <i class="fab fa-instagram-square fa-1x"> </i><a href="https://www.instagram.com/pesantrendaruttafsir/">@pesantrendaruttafsir</a>
                </p>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->
    <?php $this->load->view('wrapper/footer'); ?>
</body>

</html>