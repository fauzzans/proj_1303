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
      <li class="breadcrumb-item active">Dinniyah</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="img/galeri/dinniyah.jpg" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3 text-center">Pendidikan Dinniyah Darut Tafsir</h3>
        <div>
          <div class="card h-20" style="border: none; background:none">
            <figure class="figure" style="width: 250px;display: block;margin: 0 auto;">
              <img class="card-img-top rounded-circle" src="img/KEPALA_DINIYAH.jpeg" alt="">
              <div>
                <figcaption class="figure-caption text-center">KEPALA SEKOLAH DINIIYAH</figcaption>
                <!-- <h4 class="card-title" style="text-align:center; ;">DIVISI</h4> -->
                <h4 class="card-title" style="text-align:center;font-size:16px;">Ustadz Madyani</h4>
              </div>
            </figure>
          </div>
        </div>
        <!-- <h3 class="my-3">Project Details</h3>
        <ul>
          <li>Lorem Ipsum</li>
          <li>Dolor Sit Amet</li>
          <li>Consectetur</li>
          <li>Adipiscing Elit</li>
        </ul> -->
      </div>

    </div>
    <!-- /.row -->
    <br>
    <!-- Related Projects Row -->
    <!-- <h3 class="my-4">Fasilitas</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

    </div> -->
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php $this->load->view('wrapper/footer'); ?>


</body>

</html>