<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg py-0">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/img/logo-name.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-lg fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item mx-auto mx-lg-4 my-2 text-center {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link px-0" href="/">Home</a>
        </li>
        <li class="nav-item mx-auto dropdown {{ (Request::is('webinar') or Request::is('msm')) ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle text-center mx-auto" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item my-2" href="/webinar">Webinar</a></li>
            <li><a class="dropdown-item my-2" href="/msm">MSM</a></li>
            <li><a class="dropdown-item my-2" href="/pameran">Pameran</a></li>
          </ul>
        </li>
        {{-- <li class="nav-item mx-auto mx-lg-4 my-2 text-center">
          <a class="nav-link px-0" href="webinar.html">Events</a>
        </li> --}}
        <li class="nav-item mx-auto mx-lg-4 my-2 text-center">
          <a class="nav-link px-0" href="/coming-soon">Merch</a>
        </li>
        <li class="nav-item mx-auto mx-lg-4 my-2 text-center">
          <a class="nav-link px-0" href="/coming-soon">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End of Navigation bar -->