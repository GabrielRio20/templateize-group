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
<body style="background-color: #ffffff"> 

  
  {{-- @extends('layouts.app') --}}
  @include('part.navbar_main')

    {{-- @section('content') --}}

      <div id="carouselExampleCaptions" class="carousel slide" style="height:20%" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner m-auto" style="height:90vh">
          <div class="carousel-item active">
            <img src="https://i.pinimg.com/originals/d8/45/84/d84584e64ab8d30cbcbcd19269bd98c7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" style="bottom: 35%">
              <h1>Templateize</h1>
              <p>Professional Website Template for Any Project</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://w0.peakpx.com/wallpaper/1022/653/HD-wallpaper-flower-colourful-evening-full-green-graphy-sunset-white-yellow.jpg" class="d-block w-100" alt="...">
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

      
      
      <div class="p-5 mb-5 text-light" style="background-color: #3180da;">
      <div class="container mt-5 mb-5 ml-0">

        {{-- @yield('container') --}}
        <h3>Professional Websites <br> Template for Any Project</h3><br>

        {{-- @yield('search') <br><br> --}}
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form><br><br>

        {{-- @yield('category') --}}
        <h3 id="template">Templates</h3>
        <div class="row">

          {{-- <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="https://bootstrapmade.com/content/templatefiles/Arsha/Arsha-bootstrap-website-template-md.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="color: black">Template 1</h5>
                <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/templates/company/main" class="btn btn-primary">See details</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="https://bootstrapmade.com/content/templatefiles/Impact/Impact-bootstrap-website-template-md.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="color: black">Template 2</h5>
                <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/templates/company/main" class="btn btn-primary">See details</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="https://bootstrapmade.com/content/templatefiles/Yummy/Yummy-bootstrap-website-template-md.png" class="card-img-top" alt="..." href="/templates/company/main">
              <div class="card-body">
                <h5 class="card-title" style="color: black">Template 3</h5>
                <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">See details</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="https://www.flexgigzz.com/wp-content/uploads/2021/04/bexer-bootstrap-business-template.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="color: black">Template 4</h5>
                <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">See details</a>
              </div>
            </div>
          </div> --}}
        
          @foreach($shopping as $item)
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="{{ asset('thumb/'.$item->picture) }}" alt="">
            <h5 class="p-name">{{ $item->template_name }}</h5>
            <h4 class="p-price">{{ "Rp".number_format($item->price, 0, '.', '.') }}</h4>
            
            <a class="btn btn-primary" href="{{ route('details', $item->id) }}">Details</a>
            <hr>

        </div>
        @endforeach
        
        </div>
        
      </div>
    </div>

    {{-- @include('layout.feedback') --}}
    {{-- @include('shopping_page.shopping') --}}

    {{-- @endsection --}}
    
    {{-- <div class="feedback">
    @yield('feedback')
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

      