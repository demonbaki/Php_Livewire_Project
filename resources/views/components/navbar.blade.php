<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('welcome')}}">AppLAV</a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @guest   
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('form')}}">Domandaci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('login')}}">Login</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('articles.index')}}">Articoli</a>
          </li>
         
          <li class="nav-item">
            <p class="nav-link text-white">Benvenuto {{Auth::user()->name}}</p>
          </li>
          
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          </li>
          <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
            @csrf
          </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
