<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/img/logo-only.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/vendor/bootstrap/dist/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="/css/admin/style.css" rel="stylesheet" />
  <link href="/css/admin/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>IFEM 2022 | Admin Login</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

    @if (session()->has('message'))
      <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
    @endif

    <!--start content-->
    <main class="authentication-content">
      <div class="container-fluid">
        <div class="authentication-card">
          <div class="card shadow rounded-0 col-lg-6 col-md-8 col-sm-10 overflow-hidden">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center">Admin Sign In</h5>
              <p class="card-text text-center mb-3">IFEM ITS 2022</p>
              <form action="" method="POST" class="form-body">
                @csrf
                <div class="row g-3">
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                          class="bi bi-envelope-fill"></i></div>
                      <input type="text" name="username" class="form-control radius-30 ps-5" id="username"
                        placeholder="Username">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                          class="bi bi-lock-fill"></i></div>
                      <input type="password" name="password" class="form-control radius-30 ps-5" id="password"
                        placeholder="Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="/vendor/jquery/dist/jquery.js"></script>
  <script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="/js/script.js?modify={{ date('Ymd') }}"></script>


</body>

</html>