<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('wrapper/header'); ?>


<body>

  <!-- Navigation -->
  <?php $this->load->view('wrapper/navbar'); ?>


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Galeri
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('index.php') ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Galeri</li>
    </ol>

    <div class="row">
      <?php
      $dir_thumbs = './img/galeri/thumbs/';
      $dir_images = './img/galeri/';
      $images = directory_map($dir_thumbs);

      $i = 1;
      foreach ($images as $key => $image) {
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#" class="pop"><img class="card-img-top" src="<?php echo base_url($dir_thumbs) . $image; ?>" alt=""></a>
          </div>
        </div>
        <?php
        if ($i++ % 4 == 0) {
        ?>
          <div class="clear"></div>
      <?php
        }
      }
      ?>
    </div>
    <!-- /.row -->

    <!--modalimage-->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%">
          </div>
        </div>
      </div>
    </div>
    <!--/modalimage-->

    <!-- Pagination -->
    <ul class=" pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php $this->load->view('wrapper/footer'); ?>

</body>

</html>