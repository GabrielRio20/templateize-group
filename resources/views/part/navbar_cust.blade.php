
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

  <div class="list-item ml-0 mb-3 pos-fixed">
    <div id="menu-button">
      <input type="checkbox" id="menu-checkbox">
      <label for="menu-checkbox" id="menu-label">
        <div id = "hamburger"></div>
    </div>
  </div>

  <div class="container">
    
      {{-- <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('img/Templateize.png') }}" alt="" width="100">
      </a> --}}
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
                  
                  <li class="nav-item dropdown px-4">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                      ACCOUNT 
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
                    </ul>
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
                          <a class="nav-link" active href="{{ route('shopping') }}">{{ __('FREE TEMPLATES') }}</a>
                      </li>

                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          @if(Auth::check() && Auth::user()->level == 'admin')
                          
                              <a class="dropdown-item" href="{{ route('dBoardCust') }}">
                                  {{ __('Dahboard') }}
                              </a>

                              {{-- <a class="dropdown-item" href="{{ route('user.index') }}">
                                  {{ __('User') }}
                              </a> --}}
                              
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
                      @endif
                    </ul>
                  </li>
                  
              @endguest
          </ul>
      </div>
  </div>
</nav>