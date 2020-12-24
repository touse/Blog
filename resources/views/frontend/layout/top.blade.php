
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">about</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
          </li>
          @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">register</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                                    
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->