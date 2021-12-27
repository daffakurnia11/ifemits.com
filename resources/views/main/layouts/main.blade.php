<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#000c30" />
  <link rel="shortcut icon" href="/img/logo-only.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/css/style.css?modify={{ date('Ymd') }}">
  <!-- AOS -->
  <link rel="stylesheet" href="/vendor/aos/dist/aos.css" />

  <title>IFEM 2022 - {{ $title }}</title>
</head>

<body>
  @yield('particles')

  @yield('navbar')

  @yield('content')

  @yield('footer')

  @yield('scrollToTop')
  
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/jquery/dist/jquery.js"></script>
  <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
  <script src="/vendor/aos/dist/aos.js"></script>
  <script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="/js/script.js?modify={{ date('Ymd') }}"></script>
  <script src="/js/particle.js?modify={{ date('Ymd') }}"></script>
  <script>
    AOS.init({
      once: true,
      duration: 1000,
      offset: 100
    });
    AOS.refreshHard();
  </script>
</body>

</html>