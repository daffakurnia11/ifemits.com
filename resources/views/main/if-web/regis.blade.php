@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('content')

@if (session()->has('message'))
  <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
@endif
    
<section id="eventForm">
  <div class="container form">
    <div class="row align-items-center">
      <div class="col-lg-6 form-name d-flex flex-column justify-content-center">
        <h1 class="form-title text-center" data-aos="zoom-in">IF-WEB</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">IFEM WEBINAR</p>
      </div>
      <div class="col-lg-6">
        <form action="/if-web/registrasi" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          @csrf
          <img src="../public/img/icon/four-hexa.svg" class="form-bgicon" alt="">
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" tabindex="1" autofocus>
                @error('name')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="instance" class="form-label">Asal Instansi</label>
                <input type="text" value="{{ old('instance') }}" name="instance" class="form-control @error('instance') is-invalid @enderror" id="instance" tabindex="2">
                @error('instance')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="email" class="form-label">Email Aktif</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" tabindex="3">
                @error('email')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <div class="input-group ">
                  <span class="input-group-text" id="basic-addon1">+62</span>
                  <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" tabindex="4">
                  @error('phone')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="age" class="form-label">Usia</label>
                <input type="number" value="{{ old('age') }}" name="age" class="form-control @error('age') is-invalid @enderror" id="age" min="1"  tabindex="5">
                @error('age')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="mt-3">
                <label for="age" class="form-label d-block">Darimana kamu tahu mengenai event ini?</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Media Sosial IFEM 2022" name="promotion[]"
                    id="choice1" tabindex="6">
                  <label class="form-check-label" for="choice1">
                    Media Sosial IFEM 2022
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Teman" name="promotion[]" id="choice2"
                    tabindex="7">
                  <label class="form-check-label" for="choice2">
                    Teman
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Kenalan" name="promotion[]" id="choice3"
                    tabindex="8">
                  <label class="form-check-label" for="choice3">
                    Kenalan
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Lainnya" name="promotion[]" id="choice4"
                    tabindex="9">
                  <label class="form-check-label" for="choice4">
                    Lainnya
                  </label>
                </div>
                @error('promotion')
                  <p class="text-danger mb-0">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="share" class="form-label">Bukti Share Poster IF-WEB 2022</label>
                <input type="file" name="share[]" class="form-control @error('share') is-invalid @enderror" id="share" tabindex="10" accept=".jpg,.jpeg,.png" multiple>
                <small class="d-block my-2 text-warning">Multiple files format: .png, .jpg, .jpeg max 1MB</small>
                @error('share')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="email" class="form-label">Link Download Poster IF-WEB 2022</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
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