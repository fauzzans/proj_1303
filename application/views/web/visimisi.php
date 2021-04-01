<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('wrapper/header'); ?>


<body>

    <!-- Navigation -->
    <?php $this->load->view('wrapper/navbar'); ?>

    <?php $this->load->view('wrapper/carousel'); ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url('index.php') ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Visi dan Misi</li>
        </ol>
        <div>
            <h2>Visi</h2>
            <p><q>TERWUJUDNYA GENERASI ISLAM YANG BERILMU AMALIYAH, BERWAWASAN LUAS DAN BERAKHLAQUL KARIMAH</q></p>
        </div>
        <div>
            <h2>Misi</h2>
            <ul>
                <li>Menanamkan keimanan, ketaqwaan kepada Allah serta pembinaan akhlak al-karimah.</li>
                <li>Menyelenggarakan pendidikan yang berkualitas dalam pencapaian prestasi akademik dan non akademik
                </li>
                <li>Menyiapkan kader-kader ulama dan pemimpin umat yang mutafaqqih fi ad-diin
                </li>
                <li>Menanamkan jiwa keikhlasan, kesederhanaan, ukhuwah Islamiyah, kemandirian dan kebebasan dalam kehidupan sehari - hari.
                </li>
                <li>Mempersiapkan santri untuk menjadi manusia mandiri dan berkhidmad kepada masyarakat, agama, nusa dan bangsa.
                </li>
            </ul>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php $this->load->view('wrapper/footer'); ?>

</body>

</html>