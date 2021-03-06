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
        <li class="nav-item mx-auto dropdown {{ (Request::is('if-web**') or Request::is('msm**') or Request::is('iecc**') or Request::is('effect**') or Request::is('if-talk**') or Request::is('workshop**')) ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle text-center mx-auto" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item my-2" href="/if-web">IF-WEB</a></li>
            <li><a class="dropdown-item my-2" href="/msm">MSM</a></li>
            <li><a class="dropdown-item my-2" href="/iecc">IECC</a></li>
            <li><a class="dropdown-item my-2" href="/effect">EFFECT</a></li>
            <li><a class="dropdown-item my-2" href="/if-talk">IF-Talk</a></li>
            <li><a class="dropdown-item my-2" href="/workshop">Workshop</a></li>
          </ul>
        </li>
        <li class="nav-item mx-auto mx-lg-4 my-2 text-center">
          <a class="nav-link px-0" href="/merchandise">Merch</a>
        </li>
        <li class="nav-item mx-auto mx-lg-4 my-2 text-center {{ Request::is('about') ? 'active' : '' }}">
          <a class="nav-link px-0" href="/about">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End of Navigation bar -->