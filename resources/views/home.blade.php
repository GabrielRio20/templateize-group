<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('css/styles.css') }}" type="text/css" rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Templateize</title>
</head>
<body style="background-color: #ffffff; "> 

  
  {{-- @extends('layouts.app') --}}
  @include('part.navbar_main')

    {{-- @section('content') --}}

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators" >
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner m-auto" style="max-height:91vh">
          <div class="carousel-item active">
            <img src="https://i.pinimg.com/originals/d8/45/84/d84584e64ab8d30cbcbcd19269bd98c7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" style="bottom: 35%">
              <h1>Templateize</h1>
              <p>Professional Website Template for Any Project</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://i.pinimg.com/originals/d8/45/84/d84584e64ab8d30cbcbcd19269bd98c7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" style="bottom: 35%">
              <h1>Templateize</h1>
              <p>Professional Website Template for Any Project</p> 
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://computory.com/wp-content/uploads/2020/11/spek-game-red-dead-redemption-2-computory.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" style="bottom: 35%">
              <h1>Templateize</h1>
              <p>Professional Website Template for Any Project</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" style="left: 0%" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" style="right: 0%" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      
      
    <div class="p-5 mb-5 text-light" style="background-image: url('/img/Background.png')">
      <div class="container mt-5 mb-5 ml-0" style="padding-top: 10%; padding-bottom:10%">

        {{-- @yield('container') --}}
        <h3>Professional Websites <br> Template for Any Project</h3><br>

        {{-- @yield('search') <br><br> --}}
        <form class="d-flex" role="search" action="{{ route('search') }}" method="get">@csrf
          <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="templates">

          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form><br><br>

        <form action="{{ route('search') }}" method="get">@csrf
          <input type="text" name="kata" class="form-control" placeholder="Cari..." style="width: 30%; display: inline; margin-top:10px; margin-bottom:10px; float: right;">
      </form>

        {{-- @yield('category') --}}
        
       
      </div>
        
    </div>

    
    <div class="p-5 mb-5 text-dark" style="background-color: #ffffff;">
      <div class="container mt-3 mb-5 ml-0">
        <div class="row">
          <h3 class="text-dark mb-5" id="template">Templates</h3>
          @foreach($shopping as $item)
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="{{ asset('thumb/'.$item->picture) }}" alt="">
            <h5 class="p-name">{{ $item->template_name }}</h5>
            <h4 class="p-price">Rp {{ number_format($item->price, 0, '.', '.') }}</h4>
            
            <a class="btn btn-primary" href="{{ route('details', $item->id) }}">Details</a>
            <hr>

          </div>
          @endforeach
        
        </div>
        <a class="d-flex justify-content-center mt-5" href="{{ route('shopping') }}"><button type="submit" class="btn btn-primary w-25">See More...</button>
        </a>
      </div>
    </div>
          
    @include ("feedback")
    
    <!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #a09ead"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-white">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-white">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: #3314e1"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


    {{-- @include('layout.feedback') --}}
    {{-- @include('shopping_page.shopping') --}}

    {{-- @endsection --}}
    
    {{-- <div class="feedback">
    @yield('feedback')
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

      