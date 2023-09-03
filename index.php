<?php
  require "head.html";
?>
<body>
<?php
  require "navbar.html";
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
  <div class="carousel-container">
    <div class="container">
      <h2 class="animate__animated animate__fadeInDown"><span>Chalimbana University ICT Association</span></h2>
      <p class="animate__animated animate__fadeInUp">An ICTAZ Student Chapter</p>
      <p class="animate__animated animate__fadeInUp">Unlocking the Digital Future with Innovation and Excellence. Join us on a journey where technology meets creativity, and dreams turn into digital reality.</p>
      <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Discover More</a>
    </div>
  </div>
</div>

<!-- Slide 2 -->
<div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
  <div class="carousel-container">
    <div class="container">
      <h2 class="animate__animated animate__fadeInDown">Ignite Your Passion</h2>
      <p class="animate__animated animate__fadeInUp">At Chalimbana ICT Association, we believe that your passion can drive innovation. Join us in a world where technology meets creativity, and together, we'll ignite the spark of innovation within you.</p>
      <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore Possibilities</a>
    </div>
  </div>
</div>


<!-- Slide 3 -->
<div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
  <div class="carousel-container">
    <div class="container">
      <h2 class="animate__animated animate__fadeInDown">Unleash Your Potential</h2>
      <p class="animate__animated animate__fadeInUp">Join us in the quest for knowledge and innovation. Here, we believe in empowering every individual to unleash their full potential and make a difference in the digital world.</p>
      <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start Your Journey</a>
    </div>
  </div>
</div>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <?php 
      require "market.html";
    ?>

    <!-- ======= Sponsors Section ======= -->
<section id="clients" class="clients section-bg">
  <h1 class="text-center">Affiliation & Patternership</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-2 col-md-4 col-6 text-center">
        <img src="assets/img/chauLogo.png" class="img-fluid mx-auto d-block" alt="CHAU Logo" width="40px">
      </div>

      <div class="col-lg-2 col-md-4 col-6 text-center">
        <img src="assets/img/ictaz_new_logo.png" class="img-fluid mx-auto d-block" alt="ICTAZ Logo" width="50px">
      </div>
    </div>
  </div>
</section><!-- End Sponsors Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->
  </main>
  <!-- End #main -->
  <?php
    require "footer.html";
  ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>