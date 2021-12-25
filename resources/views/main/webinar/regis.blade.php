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
        <h1 class="form-title text-center" data-aos="zoom-in">Webinar</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Potensi Mobil Listrik di Indonesia</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          <img src="../public/img/icon/four-hexa.svg" class="form-bgicon" alt="">
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" id="name" tabindex="1" autofocus>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="instance" class="form-label">Asal Instansi</label>
                <input type="text" name="instance" class="form-control" id="instance" tabindex="2">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email Aktif</label>
                <input type="email" name="email" class="form-control" id="email" tabindex="3">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Link Download Poster IF-WEB 2022</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <input type="text" name="phone" class="form-control" id="phone" tabindex="4">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="share" class="form-label">Bukti Share Poster IF-WEB 2022</label>
                <input type="file" name="share" class="form-control" id="share" tabindex="5">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="age" class="form-label">Usia</label>
                <input type="number" name="age" class="form-control" id="age" min="1" value="1" tabindex="6">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="age" class="form-label d-block">Darimana kamu tahu mengenai event ini?</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Media Sosial IFEM 2022" name="promotion"
                    id="choice1" tabindex="7">
                  <label class="form-check-label" for="choice1">
                    Media Sosial IFEM 2022
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Teman" name="promotion" id="choice2"
                    tabindex="8">
                  <label class="form-check-label" for="choice2">
                    Teman
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Kenalan" name="promotion" id="choice3"
                    tabindex="9">
                  <label class="form-check-label" for="choice3">
                    Kenalan
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Lainnya" name="promotion" id="choice4"
                    tabindex="10">
                  <label class="form-check-label" for="choice4">
                    Lainnya
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="text-end">
            <button type="submit" class="form-submit" tabindex="11">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section> 

@endsection