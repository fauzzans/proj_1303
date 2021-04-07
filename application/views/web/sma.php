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


    <!-- Portfolio Item Row -->
    <section class="container pt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 style="text-align:center;margin-top:20px;">SMA DARUT TAFSIR</h2>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 portfolio-item" style="width: 200px;">

            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" style="width: 500px;">
              <div class="card h-20" style="border: none; background:none">
                <figure class="figure">
                  <img class="card-img-top rounded-circle" src="img/kepala_sma.jpeg" alt="">
                  <div>
                    <h4 class="card-title" style="font-size:15px;text-align:center; color:#147139;margin-top:10px;">Tadmudin S.Ag</h4>
                    <div>
                      <h4 class="card-title" style="text-align:center;font-size:13px;">Kepala Sekolah SMA Darut Tafsir</h4>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item" style="width: 200px;">

            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="col-md-12">
        <img class="img-fluid" src="img/galeri/sma.jpg" alt="">
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