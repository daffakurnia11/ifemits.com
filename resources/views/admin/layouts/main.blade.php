<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/img/logo-only.png" type="image/x-icon">
  <!-- Plugins -->
  <link rel="stylesheet" href="/vendor/notifications/css/lobibox.min.css" />
  <link rel="stylesheet" href="/vendor/metismenu/css/metisMenu.min.css"/>
  {{-- Date Time Picker --}}
	<link rel="stylesheet" href="/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  {{-- Data Tables --}}
  <link href="/vendor/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/vendor/bootstrap/dist/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="/css/admin/style.css" rel="stylesheet" />
  <link href="/css/admin/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  {{-- Swiper js --}}
  <link rel="stylesheet" href="/vendor/swiper/swiper-bundle.min.css">

  <!--Theme Styles-->
  <link href="/css/admin/dark-theme.css" rel="stylesheet" />
  <link href="/css/admin/light-theme.css" rel="stylesheet" />
  <link href="/css/admin/semi-dark.css" rel="stylesheet" />
  <link href="/css/admin/header-colors.css" rel="stylesheet" />

  <title>{{ $title }} - IFEM Admin</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

    @include('admin.layouts.topbar')

    @include('admin.layouts.sidebar')

    <!--start content-->
    <main class="page-content">

      @yield('container')

    </main>
    <!--end page main-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    @include('admin.layouts.switcher')

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="/vendor/jquery/dist/jquery.js"></script>
  <script src="/vendor/metismenu/js/metisMenu.min.js"></script>
  <script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  {{-- Data Tables --}}
  <script src="/vendor/datatable/js/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="/js/table-datatable.js?modify={{ date('Ymd') }}"></script>
  {{-- Datepicker --}}
	<script src="/vendor/bootstrap-material-datetimepicker/js/moment.min.js"></script>
	<script src="/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
  {{-- Notification js --}}
	<script src="/vendor/notifications/js/lobibox.min.js"></script>
	<script src="/vendor/notifications/js/notifications.min.js"></script>
  {{-- Swiper js --}}
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/js/swiper.js?modify={{ date('Ymd') }}"></script>
  {{-- Apex js --}}
  <script src="/vendor/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--app-->
  <script src="/js/script.js?modify={{ date("Ymd")}}"></script>
  <script src="/js/app.js?modify={{ date('Ymd') }}"></script>

</body>

</html>