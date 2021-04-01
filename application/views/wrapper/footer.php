 <!-- Footer -->
 <footer class="py-5 bg-dark">
     <div class="container">
         <p class="m-0 text-center text-white">Copyright &copy; pondokpesantrendaruttafsir 2021</p>
     </div>
     <!-- /.container -->
 </footer>

 <!-- Bootstrap core JavaScript -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- jQuery -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

 <!-- Contact Form JavaScript -->
 <script src="assets/js/jqBootstrapValidation.js"></script>
 <script src="assets/js/contact_me.js"></script>

 <!-- Theme JavaScript -->
 <script src="assets/js/freelancer.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script>
     (function($) {
         "use strict";

         // manual carousel controls
         $('.next').click(function() {
             $('.carousel').carousel('next');
             return false;
         });
         $('.prev').click(function() {
             $('.carousel').carousel('prev');
             return false;
         });

     })(jQuery);
 </script>
 <script>
     $(function() {
         $('.pop').on('click', function(e) {
             $('.imagepreview').attr('src', $(this).find('img').attr('src'));
             $('#imagemodal').modal('show');
             e.preventDefault();
         });
     });
 </script>