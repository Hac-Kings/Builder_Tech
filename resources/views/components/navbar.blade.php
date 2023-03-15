<nav id="navbar" class="navbar navbar-expand-lg fixed-top py-0">
  <div class="container">
    <a class="navbar-brand" href="{{route('homepage')}}"><img class="logo" src="{{asset('./images/logo_BT_white.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="w-100 justify-content-end navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#services">Servizi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#about">Su Di Noi</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Su di noi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link text-white" href="#contacts">Contatti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>