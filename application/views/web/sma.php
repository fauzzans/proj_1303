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
        <a href="<?php echo site_url('index.php') ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">SMA</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="img/galeri/sma.jpg" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">SMA Darut Tafsir</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      </div>
    </div>
    <!-- /.row -->
    <div class="my-4">
      <h3 class="my-3">Kegiatan Santri</h3>
      <ul>
        <li>03.30 - Shalat tahajud dilanjutkan shalat subuh berjamaah dan pembacaan awrad</li>
        <li>05.00 - Pengajian umum oleh pimpinan pesantren atau tahfidzh Al-Quran</li>
        <li>06.15 - Mandi pagi, sarapan, dan pemberian kosa kata bahasa arab/inggris serta muhadasah dan piket kamar/kelas/sekitar pondok</li>
        <li>07.30 - Belajar formal</li>
        <li>12.15 - Shalat Dzuhur berjamaah dilanjutkan makan siang</li>
        <li>13.00 - Belajar dinniyah (pengajian kitab) di kelas</li>
        <li>16.00 - Shalat ashar berjamaah dilanjutkan piket, makan sore, dan mandi</li>
        <li>17.30 - Tartilan Al-Quran dan persiapan shalat magrib berjamaah</li>
        <li>18.00 - Shalat magrib berjamaah dilanjutkan pembacaan awrad dan tahfidzh Al-Quran/Pengajian soragan</li>
        <li>19.30 - Shalat isya berjamaah</li>
        <li>20.00 - Belajar malam</li>
        <li>22.00 - Tidur</li>
      </ul>
    </div>
    <!-- Related Projects Row -->
    <h3 class="my-4">Ekstrakurikuler</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/silat.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/marching.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/pramuka.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#" class="pop">
          <img class="img-fluid" src="img/ekskul/marching1.jpg" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->
    <!--modalimage-->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%;">
          </div>
        </div>
      </div>
    </div>
    <!--/modalimage-->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php $this->load->view('wrapper/footer'); ?>

</body>

</html>