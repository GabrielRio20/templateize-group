<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <link href="{{ url('css/styles.css') }}" type="text/css" rel='stylesheet'>
    <link href="{{ url('css/responDetail.css') }}" type="text/css" rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Carousel --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />

    

    <title>Templateize</title>
</head>
<body style="background-color: #E9EBF8; "> 

  
  {{-- @extends('layouts.app') --}}
  @include('part.navbar_main')

    {{-- @section('content') --}}

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators" >
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner m-auto" style="max-height:91vh" id="move">
          <div class="carousel-item active" data-target="#move">
            <img src="{{ asset('img/carousel/Halaman1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-target="#move">
            <img src="{{ asset('img/carousel/Halaman2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-target="#move">
            <img src="{{ asset('img/carousel/Halaman3.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        
        <button class="carousel-control-prev" style="left: 0%" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" style="right: 0%" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="p-5 mb-5 text-light" style="background-image: url('/img/Background.png')">
      <div class="container mt-5 mb-5 ml-0" style="padding-top: 10%; padding-bottom:10%">
        <div class="row">
          <div class="col-md-7 order-md-first" data-aos="fade-up" data-aos-duration="1500">
            {{-- @yield('container') --}}
            <h1>Professional Websites Template <br> for Any Project</h1><br>
            <p>Discover a lot of easy to customize themes, templates & CMS products, <br> made by world-class developers.</p>

            {{-- @yield('search') <br><br> --}}
            <form class="d-flex" role="search" action="{{ route('search') }}" method="get">@csrf
              <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="templates" style="height: 50px" id="search_bar">
              
              <button class="btn btn-dark" type="submit" style="height: 50px; width: 14%; min-width:70px"><label for="search_bar">Search</label></button>
              
            </form><br><br>
          </div>
          <div class="col-md-5 d-flex justify-content-center" data-aos="fade-up">
            <img style="height: 320px" src="{{asset('img/Group-69.png')}}">
          </div>
        </div>


        {{-- @yield('category') --}}
        
       
      </div>
        
    </div>

    
    <div class="p-5 mb-5 text-dark" style="background-color: #E9EBF8;">
      <div class="container mt-3 mb-5 ml-0">
        <div class="row">
          <h3 class="text-dark mb-5" id="template" data-aos="fade-up" data-aos-duration="1000">Templates</h3>

          @foreach($shopping as $item)
          <div class="product text-center col-lg-3 col-md-4 col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <img class="img-fluid mb-3" src="{{ asset('thumb/'.$item->picture) }}" alt="">
            <h5 class="p-name">{{ $item->template_name }}</h5>
            <h4 class="p-price">Rp {{ number_format($item->price, 0, '.', '.') }}</h4>
            
            <a class="btn btn-primary" href="{{ route('details', $item->id) }}">Details</a>
            <hr>
          </div>
          @endforeach
        
        </div>
        <a class="d-flex justify-content-center mt-5" href="{{ route('shopping') }}" data-aos="fade-up" data-aos-duration="1000"><button type="submit" class="btn btn-primary w-10">See More...</button>
        </a>
      </div>
    </div>

    <div class="feedback" style="background-image: url('/img/Background.png'); padding-top: 10%;">
      @include ("feedback") 
    </div>

    <section>
    <div class="p-5 m-5 text-dark" style="background-color: #E9EBF8;text-align: center; text-color:#3096fd">
      <div class="container mt-3 ml-3">
        <div class="row">
          <h2 class="text-dark" id="template" data-aos="fade-up" data-aos-duration="1000">          
          "Provides template services through an online website. The expected benefits are that it can become a website that 
          provides templates that are useful for promoting personal works according to the wishes of the user"
          </h2>
        </div>
      </div>
    </div>
    </section>
          
    @include ("footer.footer")
    {{-- @include('layout.feedback') --}}
    {{-- @include('shopping_page.shopping') --}}

    {{-- @endsection --}}
    
    {{-- <div class="feedback">
    @yield('feedback')
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>

    {{-- Carousel --}}
    <!-- Calling jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Calling Slick Library -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
</body>
</html>

      