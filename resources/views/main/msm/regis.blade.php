@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('content')
    
<section id="eventForm">
  <div class="container form">
    <div class="row align-items-center">
      <div class="col-lg-6 form-name d-flex flex-column justify-content-center">
        <h1 class="form-title text-center" data-aos="zoom-in">MSM</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Mechanical Science Marathon</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          <img src="../public/img/icon/four-hexa.svg" class="form-bgicon" alt="">
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email Aktif</label>
                <input type="email" name="email" class="form-control" id="email" tabindex="1" autofocus>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="phone" class="form-label">Kontak Aktif</label>
                <input type="text" name="phone" class="form-control" id="phone" tabindex="2">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6 order-2 order-md-1 order-lg-2 order-xxl-1">
              <div class="mb-3">
                <label for="data" class="form-label">Upload Biodata Tim (.pdf)</label>
                <input type="file" name="data" class="form-control" id="data" tabindex="3">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6 order-1 order-md-2 order-lg-1 order-xxl-2">
              <div class="mb-3">
                <label for="email" class="form-label">Link Template Biodata Tim</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6 order-2 order-md-1 order-lg-2 order-xxl-1">
              <div class="mb-3">
                <label for="twibbon" class="form-label">Upload Screenshot Twibbon</label>
                <input type="file" name="twibbon" class="form-control" id="twibbon" tabindex="4">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6 order-1 order-md-2 order-lg-1 order-xxl-2">
              <div class="mb-3">
                <label for="email" class="form-label">Link Twibbon</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6 order-2 order-md-1 order-lg-2 order-xxl-1">
              <div class="mb-3">
                <label for="letter" class="form-label">Upload Surat Pernyataan</label>
                <input type="file" name="letter" class="form-control" id="letter" tabindex="5">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6 order-1 order-md-2 order-lg-1 order-xxl-2">
              <div class="mb-3">
                <label for="email" class="form-label">Link Surat Pernyataan</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="recommendation" class="form-label">Upload Kartu Pelajar atau Surat Rekomendasi Sekolah</label>
            <input type="file" name="recommendation" class="form-control" id="recommendation" tabindex="6">
          </div>
          <div class="mb-3">
            <label for="payment" class="form-label">Upload Bukti Pembayaran</label>
            <input type="file" name="payment" class="form-control" id="payment" tabindex="7">
          </div>
          <div class="text-end">
            <button type="submit" class="form-submit" tabindex="8">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section> 

@endsection