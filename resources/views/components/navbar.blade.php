<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('trip.create')}}">inserisci evento</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('company.create')}}">inserisci compagnia</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="{{route('trip.index')}}">Tutti Eventi</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('company.index')}}">Tutte le compagnie</a>
        </li> 
        @guest
            
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" aria-current="page" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">login</a>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        @endguest
        
        @auth          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('auth.dashboard')}}">Benvenuto {{Auth::user()->name}}</a></li>
            <li class="dropdown-item">
              <a class="nav-link active" aria-current="page" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">logout</a>
              <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
    
    
                @csrf
    
              </form>
            </li>
          </ul>
        </li>
        @endauth
        
        </ul>
    </div>
  </div>
</nav>