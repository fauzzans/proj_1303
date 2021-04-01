<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('wrapper/header'); ?>

<body>

    <!-- Navigation -->
    <?php $this->load->view('wrapper/navbar'); ?>


    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url('index.php') ?>"></a>Home</a>
            </li>
            <li class="breadcrumb-item active">Kontak</li>
        </ol>

        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h2 style="text-align:center; margin-top:20px;">PENGURUS YPP DARUT TAFSIR</h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-80" style="width: 250px;border: none;">
                        <img class="card-img-top rounded-circle" src="img/ava.jpg" alt="">
                        <div>
                            <h4 class="card-title" style="text-align:center; color:#147139;">Nama</h4>
                            <div>
                                <h4 class="card-title" style="text-align:center;">Pimpinan PP Darut Tafsir</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-80" style="width: 250px;border: none;">
                        <img class="card-img-top rounded-circle" src="img/ava.jpg" alt="">
                        <div>
                            <h4 class="card-title" style="text-align:center; color:#147139;">Nama</h4>
                            <div>
                                <h4 class="card-title" style="text-align:center;">Mudir PP Darut Tafsir</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-80" style="width: 250px;border: none;">
                        <img class="card-img-top rounded-circle" src="img/ava.jpg" alt="">
                        <div>
                            <h4 class="card-title" style="text-align:center; color:#147139;">Nama</h4>
                            <div>
                                <h4 class="card-title" style="text-align:center;">Sekretaris </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-80" style="width: 250px;border: none;">
                        <img class="card-img-top rounded-circle" src="img/ava.jpg" alt="">
                        <div>
                            <h4 class="card-title" style="text-align:center; color:#147139;">Nama</h4>
                            <div>
                                <h4 class="card-title" style="text-align:center;">Bendahara</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">
            <!-- Map Column -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- <h3>Send us a Message</h3> -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nama:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nomor Handphone:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Pesan:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Kirim</button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-lg-4">
                    <h3>Hubungi Kami</h3>
                    <class class="col-lg-4 mb-4">
                        <p>
                            Telp : 0813-9973-0940<br> Ustz.Tj : 0852-8243-3821<br> Pak Irta : 0813-8148-3924<br> Ibu Rosi : 0857-1801-7005
                            <br>
                            <i class="fas fa-envelope-open-text"> pondokpesantrendaruttafsir@gmail.com</i><br>
                            <i class="fab fa-facebook fa-1x"> </i><a href="https://web.facebook.com/pesantren.daruttafsir">Pesantren Darut Tafsir</a><br>
                            <i class="fab fa-instagram-square fa-1x"> </i><a href="https://www.instagram.com/pesantrendaruttafsir/">@pesantrendaruttafsir</a>
                        </p>
                        <div>
                            <div class="card h-20" style="border: none;">
                                <figure class="figure" style="width: 250px;display: block;margin: 0 auto;">
                                    <img class="card-img-top rounded-circle" src="img/ava1.jpg" alt="">
                                    <div>
                                        <figcaption class="figure-caption text-center">DIVISI IT</figcaption>
                                        <!-- <h4 class="card-title" style="text-align:center; ;">DIVISI</h4> -->
                                        <h4 class="card-title" style="text-align:center;">Muhammad Fauzi S.T</h4>
                                    </div>
                                </figure>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <br>
    <!-- Footer -->
    <?php $this->load->view('wrapper/footer'); ?>

</body>

</html>