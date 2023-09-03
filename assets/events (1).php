<?php
  require "head.html";
?>
<body>

<?php
  require "navbar.html";
?>

  
  <main id="main">

  </main><!-- End #main -->
  <?php
    require "footer.html";
  ?>
  
   
    <style>
        /* Style the event bar container */
        .event-bar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Style the event image */
        .event-image {
            max-width: 100px;
            height: auto;
            border-radius: 50%;
        }

        /* Style event details */
        .event-details {
            margin-top: 10px;
        }
    </style>

    <div class="event-bar">
        <!-- Event Image -->
        <img src="desktop/karate.jpg" alt="Event Image" class="event-image">
        
        <!-- Event Name -->
        <h3>kata tournament</h3>
        
        <!-- Event Time -->
        <p>Date : 15/09/2023<strong> Time: 15 PM</strong></p>
        
        <!-- Event Venue -->
        <p>Venue: <strong>main hall</strong></p>
    </div>


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