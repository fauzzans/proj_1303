<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('wrapper/header'); ?>


<body id="page-top" class="index">

    <!-- Navigation -->
    <?php $this->load->view('wrapper/navbar'); ?>


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
    <?php $this->load->view('wrapper/footer'); ?>


</body>

</html>