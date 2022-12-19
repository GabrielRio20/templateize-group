<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      #sidebarMenu{
        padding-top: 10px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

      #sidebarMenu{
        height: 100vh;
      }

      #sidebarMenu{
        z-index: 100;
      }

      }
    </style>

    
    <!-- Custom styles for this template -->
    {{-- <link href="dashboard.css" rel="stylesheet"> --}}
    <link href="{{ url('css/dashboard.css') }}" type="text/css" rel='stylesheet'>
  </head>
  <body>

  @if(Auth::check() && Auth::user()->level != 'admin')
    <script>
        var auth = prompt("Enter admin authentication");
        if (auth == "TemplateizeAdmin$12345"){
            txt = "Welcome, Admin!"
        }
        else{
            history.back();
            txt = "You're not allowed to enter this page"
        }
        alert(txt);
    </script>
  @endif

    @include('part.navbar_main')
    
      <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="navbar-nav">
          
        </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('main-dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('user') ? 'active' : '' }}" href="{{ route('user.index') }}">
                    <span data-feather="users"></span>
                    Users
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('shop-create') ? 'active' : '' }}" href="{{ route('shopping.create') }}">
                    <span data-feather="shopping-cart"></span>
                    Add Template
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('AdminTemplates') ? 'active' : '' }}" href="{{ route('admin.templates') }}">
                    <span data-feather="layers"></span>
                    Templates
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin-feedback') ? 'active' : '' }}" href="{{ route('admin.feedback') }}">
                    <span data-feather="bar-chart-2"></span>
                    Feedbacks
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              {{-- <h1 class="h2">Dashboard</h1> --}}
              {{-- <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                  <span data-feather="calendar"></span>
                  This week
                </button>
              </div> --}}
              
            </div>

            @yield('main')

            
          </main>
        </div>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

      <script src="{{ asset('js/dashboard.js') }}"></script>
  </body>
</html>
