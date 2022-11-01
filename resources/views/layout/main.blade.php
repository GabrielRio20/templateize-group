<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('css/styles.css') }}" type="text/css" rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body style="background-color: #ffffff"> 

  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('#') }}">
          <img src="{{ asset('img/Templateize.png') }}" alt="" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item px-4">
                      <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item px-4">
                      <a class="nav-link " href="/category">CATEGORY</a>
                    </li>
                    <li class="nav-item px-4">
                      <a class="nav-link" active href="g_virus">FREE TEMPLATE</a>
                    </li>
                    <div class="dropdown px-4">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                      </a>
                    
                      <ul class="dropdown-menu">
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                      </ul>
                    </div>
                    
                @endguest
            </ul>
        </div>
    </div>
  </nav>

    {{-- <nav class="navbar navbar-expand-lg navbar sticky-top absolute font-bold text-light" style="background-color: #ffffff">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Templateize.png') }}" alt="" width="100px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-4">
                  <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item px-4">
                  <a class="nav-link " href="/category">CATEGORY</a>
                </li>
                <li class="nav-item px-4">
                  <a class="nav-link" active href="g_virus">FREE TEMPLATE</a>
                </li>
                <li class="nav-item px-4">
                  
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Account
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/login">Login</a></li>
                      <li><a class="dropdown-item" href="/register">Register</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </nav> --}}

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
              <p>Proffesional Website Template for Any Project</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://w0.peakpx.com/wallpaper/1022/653/HD-wallpaper-flower-colourful-evening-full-green-graphy-sunset-white-yellow.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" style="bottom: 35%">
              <h1>Templateize</h1>
              <p>Proffesional Website Template for Any Project</p> 
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://computory.com/wp-content/uploads/2020/11/spek-game-red-dead-redemption-2-computory.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption" style="bottom: 35%">
              <h1>Templateize</h1>
              <p>Proffesional Website Template for Any Project</p>
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
        @yield('container')
        @yield('search') <br><br>
        @yield('category')
      </div>
    </div>

    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>