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

                    <a class="nav-link" href="logcs">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>