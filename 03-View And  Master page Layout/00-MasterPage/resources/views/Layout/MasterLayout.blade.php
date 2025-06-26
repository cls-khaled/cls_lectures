<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->


  <!-- Call Files From Public Folder -->
  {{-- href="{{URL::asset('css/bootstrap.css')}} --}}


  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}" />
  <!-- font awesome style -->
  {{-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" /> --}}

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>


    @include('Includes.navtop')


    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail-box">
              <h1>
                Repair and <br>
                Maintenance <br>
                Services
              </h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui harum voluptatem adipisci. Quos molestiae saepe dicta nobis pariatur, tempora iusto, ad possimus soluta hic praesentium mollitia consequatur beatae, aspernatur culpa.
              </p>
              <a href="">
                Contact Us
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/slider-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- feature section -->
  <section class="feature_section">
    <div class="container">
      <div class="feature_container">


         @yield('content')


      </div>
    </div>
  </section>

  <!-- end feature section -->





 <!-- footer section -->

@include('Includes.Footer')

 {{-- <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer> --}}
  <!-- footer section -->


  <!-- end info_section -->



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>
