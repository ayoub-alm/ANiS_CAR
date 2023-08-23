<!DOCTYPE html>
<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>ANIS AUTO</title>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/bootstrap.min.js') }}">
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">

  <!-- Range Slider -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.css') }}">
  <!-- Range Slider  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}">
  <!-- Nivo Lightbox -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}" >
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/animate.css') }}">

  <link
  rel="stylesheet"
  href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
  <!-- Owl carousel -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
  <!-- Rav Slider -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/settings.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/layers.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/navigation.css') }}">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body >

<!-- Header Area wrapper Starts -->
<header id="header-wrap">
  <!-- Start Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-8 col-xs-12">
          <!-- Start Contact Info -->
          <ul class="links clearfix">
            <li><i class="lni-phone-handset"></i>1-800-555-1234</li>
            <li><i class="lni-envelope"></i> info@example.com</li>
            <li><a href="#"><i class="lni-map-marker"></i> York Blvd, Los Angeles, US</a></li>
          </ul>
          <!-- End Contact Info -->
        </div>
        <div class="col-lg-5 col-md-4 col-xs-12">
          <div class="roof-social float-right">
            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
            <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
          </div>
          <div class="header-top-right float-right">
            <a href="{{route('login')}}" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
            <a href="{{route('register')}}" class="header-top-button"><i class="lni-pencil"></i> Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Top Bar -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white"  data-toggle="sticky-onscroll" style="border-radius: 
  50px;">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="lin-menu"></span>
        </button>
        <a class="navbar-brand mx-auto p-1 bloder" href="{{ route('index')}}" style=" color:#559fee">
          ANIS AUTO
          {{-- <img src="assets/img/logo.png" alt=""> --}}
        </a>
      </div>

      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav mr-auto w-100 justify-content-center">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="{{route('index')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Home <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.html">Home V1</a>
              <a class="dropdown-item" href="index-2.html">Home V2</a>
              <a class="dropdown-item" href="index-3.html">Home V3</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('cars')}}">
              Nos Voitures
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{ route('about_us')}}">
              Qui somme nous
            </a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Property <i class="fa fa-angle-down"></i>
            </a>
             <div class="dropdown-menu">
              <a class="dropdown-item" href="property.html">Default- Variation</a>
              <a class="dropdown-item" href="single-property.html">Single Property</a>
              <a class="dropdown-item" href="full-gallery.html">Full Width Gallery</a>
            </div>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gallery <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="portfolio-2.html">2 Columns Gallery</a>
              <a class="dropdown-item" href="portfolio-3.html">3 Columns Gallery</a>
              <a class="dropdown-item" href="portfolio-4.html">4 Columns Gallery</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="about.html">About Us</a>
              <a class="dropdown-item" href="agents.html">Agents</a>
              <a class="dropdown-item" href="rent.html">For Rent</a>
              <a class="dropdown-item" href="sale.html">For Sale</a>
              <a class="dropdown-item" href="pricing.html">Pricing Tables</a>
              <a class="dropdown-item" href="dashboard.html">Dashboard</a>
              <a class="dropdown-item" href="submit-property.html">Submission Form</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="testimonials.html">Testimonials</a>
              <a class="dropdown-item" href="typography.html">Typography</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.blog.index')}}">
              Nos Articles
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('contactus')}}">
              Contacte
            </a>
          </li>
        </ul>
        <div class="search-add float-right">
          <form method="post">
            <div class="form-group">
                <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                <button type="submit" class="search-btn"><span class="lni-search"></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu">
      <li>
        <a href="{{route('index')}}">
        Home
        </a>
        <ul class="dropdown">
          <li>
            <a href="index.html">
              Home V1
            </a>
          </li>  
          <li>
            <a href="index-2.html">
              Home V2
            </a>
          </li>   
          <li>
            <a href="index-3.html">
              Home V3
            </a>
          </li> 
        </ul>
      </li>
      <li>
        <a class="active" href="{{route('cars')}}">
        Nos Voiture
        </a>
      </li>

      <li>
        <a class="active" href="{{route('about_us')}}">
        Qui somme nous
        </a>
      </li>
      {{-- <li>
        <a href="#">Property</a>
         <ul class="dropdown">
          <li><a href="property.html">Default- Variation</a></li>
          <li><a href="single-property.html">Single Property</a></li>
          <li><a href="full-gallery.html">Full Width Gallery</a></li>
        </ul>
      </li>
      <li> --}}
        <a href="#">
          Gallery
        </a>
        <ul class="dropdown">
          <li><a href="portfolio-2.html">2 Columns Gallery</a></li>
          <li><a href="portfolio-3.html">3 Columns Gallery</a></li>
          <li><a href="portfolio-4.html">4 Columns Gallery</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Pages</a>
        <ul class="dropdown">
          <li><a href="about.html">About Us</a></li>
          <li><a href="agents.html">Agents</a></li>
          <li><a href="rent.html">For Rent</a></li>
          <li><a href="sale.html">For Sale</a></li>
          <li><a href="pricing.html">Pricing Tables</a></li>
          <li><a href="dashboard.html">Dashboard</a></li>
          <li><a href="submit-property.html">Submission Form</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
          <li><a href="typography.html">Typography</a></li>
        </ul>
      </li>
      <li>
        <a class="active" href="{{route('user.blog.index')}}">
        Nos Articles
        </a>
      </li>
      <li>
        <a class="active" href="{{route('contactus')}}">
          Contacte
        </a>
      </li>
    </ul>
    <!-- Mobile Menu End -->
  </nav>
  <!-- Navbar End -->
</header>
<!-- Header Area wrapper End -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

        <!-- Footer Section Start -->
        <footer id="footer" class="footer-area section-padding" style=" position: static;
        left: 0;
        bottom: 0;
        width: 100%;">
          <div class="container">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                  <h3 class="footer-titel">About <span>Us</span></h3>
                  <ul class="footer-link">
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Graphic Design</a></li>           
                    <li><a href="#">Documentation</a></li>           
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                  <h3 class="footer-titel">Usefull<span> Links</span></h3>
                  <ul class="footer-link">
                    <li><a href="#">Bayonne, New York</a></li>
                    <li><a href="#">Greenville, Chicago</a></li>
                    <li><a href="#">The Heights, New Jersey</a></li>
                    <li><a href="#">Bayonne, Washington DC</a></li>
                    <li><a href="#">Greenville, San Francisco</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                  <h3 class="footer-titel">Contact <span>Info</span></h3>
                  <ul class="address">
                    <li>
                      <a href="#"><i class="lni-map-marker"></i> York Blvd, Los Angeles, US<br> View, CA 94041USA</a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-phone-handset"></i> (518) 2014-040 43</a>
                    </li>
                    <li>
                      <a href="#"><i class="lni-envelope"></i> hello@example.com</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                  <h3 class="footer-titel">Subscribe <span>on Our News</span></h3>
                  <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                    <div class="form-group is-empty">
                      <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
                      <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-envelope"></i></button>
                      <div class="clearfix"></div>
                    </div>
                  </form>
                  <div class="social-icon">
                    <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                    <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                    <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                    <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
                  </div>
                </div>
              </div>
            </div>  
          </div>     
        </footer> 
        <!-- Footer Section End -->

        
    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p> Created by Ayoub Lemrachchaq</p>
          </div>
        </div>
      </div>
    </section> 

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>
      


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('./assets/js/jquery-min.js')}}"></script>
    <script src="{{ asset('./assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>



    <script>
      $('.owl-carousel').owlCarousel({
            items: 1,           // Number of items per slide
            autoplay: true,     // Autoplay the slider
            loop: true,         // Enable infinite loop
            autoplayTimeout: 3000, // Autoplay interval in milliseconds
            autoplayHoverPause: true ,// Pause autoplay when hovering over the slider
        
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
