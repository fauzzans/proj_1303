<header>
    <?php
    if (strtolower($this->uri->segment(1)) == 'logcs') {
        $this->load->view('web/login');
    } ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('img/background/bg_header2.jpg')">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <div class="home-slider-desc" style="margin-left: 40px">
                        <h2 style="color: white">Judul Headline</h2>
                        <p>Ini adalah isi konten headline</p>
                        <div>
                            <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item" style="background-image: url('img/background/ramadan1442.png')">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <div class="home-slider-desc" style="margin-left: 40px">
                        <h2 style="color: white">Judul Headline</h2>
                        <p>Ini adalah isi konten headline</p>
                        <div>
                            <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item" style="background-image: url('img/galeri/galeri8.jpg')">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <div class="home-slider-desc" style="margin-left: 40px">
                        <h2 style="color: white">Judul Headline</h2>
                        <p>Ini adalah isi konten headline</p>
                        <div>
                            <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item" style="background-image: url('img/galeri/harisantri.jpg')">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <div class="home-slider-desc" style="margin-left: 40px">
                        <h2 style="color: white">Judul Headline</h2>
                        <p>Ini adalah isi konten headline</p>
                        <div>
                            <a href="<?php echo site_url('Web/sejarah') ?>" class="btn btn-success">SELENGKAPNYA &nbsp; <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div> -->
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