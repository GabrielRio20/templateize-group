<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/d_board.css">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
  <title>Document</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


  <link rel="stylesheet" href="{{asset('css/d_board.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/Templateize.png') }}" alt="" width="100">
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
                      <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                    </li>
                    <li class="nav-item px-4">
                      <a class="nav-link " href="{{ route('templates') }}">{{ __('TEMPLATES') }}</a>
                    </li>
                    <li class="nav-item px-4">
                      <a class="nav-link" active href="{{ route('shopping') }}">{{ __('FREE TEMPLATES') }}</a>
                    </li>
                    <div class="dropdown px-4">
                    
                {{-- @if(Auth::check() && Auth::user()->level == 'admin')
                    <li class="nav-item px-4">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="{{ route('templates') }}">{{ __('TEMPLATES') }}</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" active href="#">{{ __('FREE TEMPLATES') }}</a>
                    </li>
                @endif --}}

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
                                <a class="nav-link" href="{{ route('shopping') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        
                        {{-- admin --}}
                        @if(Auth::check() && Auth::user()->level == 'admin')
                        <li class="nav-item px-4">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link " href="{{ route('templates') }}">{{ __('TEMPLATES') }}</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" active href="#">{{ __('FREE TEMPLATES') }}</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ route('user.index') }}">{{ __('User') }}</a>
                        </li>
                        @endif
                        
                        {{-- customer --}}
                        @if(Auth::check() && Auth::user()->level == 'customer')
                        <li class="nav-item px-4">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link " href="{{ route('templates') }}">{{ __('TEMPLATES') }}</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" active href="{{ route('shopping') }}">{{ __('FREE TEMPLATES') }}</a>
                        </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::check() && Auth::user()->level == 'customer')
                            
                                <a class="dropdown-item" href="{{ route('dBoardCust') }}">
                                    {{ __('Dahboard') }}
                                </a>
                                
                            @endif

                                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form> --}}
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


  <div class="container_dashboard">
    <div class="sidebar">
      {{-- <div class="header">
      </div> --}}
      <div class="sidebar-content">
        <div class="list-item">
          <div id="menu-button">
            <input type="checkbox" id="menu-checkbox">
            <label for="menu-checkbox" id="menu-label">
              <div id="hamburger"></div>
            </label>
          </div>
        </div>
        
          <div class="list-item">
            <a href="#">
              <img src="img/icons/DashIcon.png" alt="" class="icon">
              <span class="description">Dashboard</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/TempIcon.png" alt="" class="icon">
              <span class="description">My Templates</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/FeedIcon.png" alt="" class="icon">
              <span class="description">Feedback</span>
            </a>
          </div>
        </div>
    </div>
    <div class="main-content">
      
    </div>
  </div>



<script src="{{ asset('js/d_board.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>