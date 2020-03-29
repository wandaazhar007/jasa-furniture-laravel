<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Media Interior Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ url('/assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ url('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/fab.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/bottom-bar.css') }}">
    
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <!-- <div class="container"> -->
      <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 18px;"><img src="{{ url('images/logo.png') }}" alt="" style="width: 10%; margin-right: 10px;">Media Design Interior</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="portfolio.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ url('/furniture') }}">Furniture</a>
                <a class="dropdown-item" href="{{ url('/interior-design') }}">Interior Design</a>
              </div>
          </li>
          <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="{{ url('/portfolio') }}" class="nav-link">Portfolio</a></li>
          <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item cta" id="cta"><a href="https://api.whatsapp.com/send?phone=6281318927898&amp;text=Assalamualaikum" class="nav-link"><span>Hubungi Kami <i class="fab fa-whatsapp"></i></span></a></li>
        </ul>
      </div>
    <!-- </div> -->
  </nav> 
    <!-- END nav -->
    
        @yield('contents')

        
       
    <footer class="ftco-footer ftco-bg-dark ftco-section footer-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">MEDIA INTERIOR DESIGN</h2>
              <p>Kami melayani jasa reparasi furniture dan perlengkapan rumah ataupun kantor. Sampai saat ini pegawai kami lebih dari 12 Tahun berkarya dibidang furniture dan sejenisnya. Jangan segan-segan untuk berkonsultasi kepada kami jika kamu mempunyai konsep design sendiri</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">Product</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Jl. Merpati Dalam 4, Kel. Serua Indah Kec. Ciputat Kota Tangerang Selatan Banten 15414</a></li>
                <li><a href="#" class="py-2 d-block">0812-8835-9113</a></li>
                <li><a href="#" class="py-2 d-block">mdinterior@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | wandaazhar</p>
          </div>
        </div>
      </div>
    </footer>

    <nav class="nav">
          <a href="#" class="nav_link">
            <i class="fa fa-industry nav_icon"></i>
            <span class="nav_text">Product</span>
          </a>
          <a href="#" class="nav_link">
            <i class="fa fa-cogs nav_icon"></i>
            <span class="nav_text">Services</span>
          </a>
          <a href="#" class="nav_link nav_link_active">
            <i class="fa fa-home nav_icon"></i>
            <span class="nav_text">Home</span>
          </a>
          <a href="#" class="nav_link">
            <i class="fa fa-laptop nav_icon"></i>
            <span class="nav_text">Portfolio</span>
          </a>
          <a href="#"data-toggle="modal" data-target="#buat_furniture_btn" class="nav_link">
            <i class="fa fa-info-circle nav_icon"></i>
            <span class="nav_text">About</span>
          </a>
        </nav>
        

    <!-- Fab -->
    <div class="fab-container">
      <div class="fab2 fab-icon-holder">
        <i class="fab fa-whatsapp"></i>
      </div>
      
      <ul class="fab-options">
        <li>
  <!--				<span class="fab-label">Whatsapp</span>-->
          <div class="fab-icon-holder2">
            <a href="https://api.whatsapp.com/send?phone=6281288359113&amp;text=Assalamualaikum" class="btn btn-success tombol-wa"><i class="fab fa-whatsapp"></i></a>
          </div>
        </li>
        <li>
  <!--				<span class="fab-label">Telepon</span>-->
          <div class="fab-icon-holder2">
            <a href="tel:081288359113" onclick="ga('send', 'event', 'Klik Kontak', 'Klik Telepon','Tel 081288359113');"><i class="fa fa-phone"></i></a>
          </div>
        </li>
      </ul>
    </div>
    <!-- /Fab -->
       
    <div class="modal fade" id="buat_furniture_btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="">
            <h6 style="color: #32a3b1; font-weight: 500; text-align: center; margin-top: 20px;">MEDIA DESIGN INTERIOR</h6>
          </div>
          <div class="">
            <p style="padding: 10px 10px; text-align: center; ">
            Kami melayani jasa reparasi furniture dan perlengkapan rumah ataupun kantor. Sampai saat ini pegawai kami lebih dari 12 Tahun berkarya dibidang furniture dan sejenisnya. Jangan segan-segan untuk berkonsultasi kepada kami jika kamu mempunyai konsep design sendiri
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


  <script src="{{ url('/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('/assets/js/popper.min.js') }}"></script>
  <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('/assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('/assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('/assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('/assets/js/aos.js') }}"></script>
  <script src="{{ url('/assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('/assets/js/bootstrap-datepicker.js') }}"></script>
  <!-- <script src="/assets/js/jquery.timepicker.min.js"></script> -->
  <script src="{{ url('/assets/js/particles.min.js') }}"></script>
  <script src="{{ url('/assets/js/particle.js') }}"></script>
  <script src="{{ url('/assets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('/assets/js/google-map.js') }}"></script>
  <script src="{{ url('/assets/js/main.js') }}"></script>
  <script src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('/assets/js/owl.carousel.js') }}"></script>

  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  </script>
    
  </body>
</html>