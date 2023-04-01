<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
        <header class="head">
            <div class="logo border-bottom">
                <img class="w-100" src="assets/images/logo.jpg" alt="" />
                 <a class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <div id="navbarNav" class="navcol d-none d-lg-block">
                <ul>
                    <li><a href="/#"><i class="bi bi-house-door fs-5 me-2"></i> Home</a></li>
                    <li><a href="/#about"><i class="bi fs-5 bi-info-square me-2"></i> About</a></li>
                    <!--
                    <li><a href="/published-listings"><i class="bi fs-5 bi-columns-gap me-2"></i> Listings</a></li>
                    -->
                    <li><a href="/free-book"><i class="bi fs-5 bi-book me-2"></i> Free Book</a></li>
                    <li><a href="/#contact"><i class="bifs-5  bi-envelope me-2"></i> Contact</a></li>
                </ul>
            </div>
        </header>
        <div  class="main-content">

            {{ $slot }}

        </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12 footer-info text-center">
            <h3>Follow us on</h3>
            <div class="social-links mt-12">
              <a href="https://twitter.com/bienoropeza" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://facebook.com/bien.oropeza" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/bienoropeza" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://linkedin.com/in/bienoropeza" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright text-center">
        <br>
        &copy; Copyright <strong><span>Bien Oropeza</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <body>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>
