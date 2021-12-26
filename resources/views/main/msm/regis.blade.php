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
        <h1 class="form-title text-center" data-aos="zoom-in">MSM</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Mechanical Science Marathon</p>
      </div>
      <div class="col-lg-6">
        <form action="/msm/registrasi" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          @csrf
          <img src="../public/img/icon/four-hexa.svg" class="form-bgicon" alt="">
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="email" class="form-label">Email Aktif</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" tabindex="1" autofocus>
                @error('email')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="phone" class="form-label">Kontak Aktif</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">+62</span>
                  <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" tabindex="2">
                  @error('phone')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6 order-2 order-md-1 order-lg-2 order-xxl-1">
              <div class="mt-3">
                <label for="data" class="form-label">Upload Biodata Tim (.pdf)</label>
                <input type="file" name="data[]" class="form-control @error('data') is-invalid @enderror" id="data" tabindex="3" accept=".pdf" multiple>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6 order-1 order-md-2 order-lg-1 order-xxl-2">
              <div class="mt-3">
                <label for="email" class="form-label">Link Template Biodata Tim</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
            <div class="col-12 order-3">
              <small class="d-block my-2 text-warning">Multiple files format: .pdf max 1MB</small>
              @error('data')
              <p class="text-danger mb-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6 order-2 order-md-1 order-lg-2 order-xxl-1">
              <div class="mt-3">
                <label for="twibbon" class="form-label">Upload Screenshot Twibbon</label>
                <input type="file" name="twibbon[]" class="form-control @error('twibbon') is-invalid @enderror" id="twibbon" tabindex="4" accept=".png,.jpg,.jpeg" multiple>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6 order-1 order-md-2 order-lg-1 order-xxl-2">
              <div class="mt-3">
                <label for="email" class="form-label">Link Twibbon</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
            <div class="col-12 order-3">
              <small class="d-block my-2 text-warning">Multiple files format: .png, .jpg, .jpeg max 1MB</small>
              @error('twibbon')
              <p class="text-danger mb-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6 order-2 order-md-1 order-lg-2 order-xxl-1">
              <div class="mt-3">
                <label for="letter" class="form-label">Upload Surat Pernyataan</label>
                <input type="file" name="letter[]" class="form-control @error('letter') is-invalid @enderror" id="letter" tabindex="5" accept=".pdf" multiple>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6 order-1 order-md-2 order-lg-1 order-xxl-2">
              <div class="mt-3">
                <label for="email" class="form-label">Link Surat Pernyataan</label>
                <a href="" class="form-link d-block py-2">intip.in.blablablabla.com</a>
              </div>
            </div>
            <div class="col-12 order-3">
              <small class="d-block my-2 text-warning">Multiple files format: .pdf max 1MB</small>
              @error('letter')
              <p class="text-danger mb-0">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="mt-3">
            <label for="recommendation" class="form-label">Upload Kartu Pelajar atau Surat Rekomendasi Sekolah</label>
            <input type="file" name="recommendation[]" class="form-control @error('recommendation') is-invalid @enderror" id="recommendation" tabindex="6" accept=".pdf,.jpg,.jpeg,.png" multiple>
            <small class="d-block my-2 text-warning">Multiple files format: .pdf, .jpg, .jpeg, .png max 1MB</small>
            @error('recommendation')
            <div class="invalid-feedback mt-3">
              <p class="mb-0">{{ $message }}</p>
            </div>
            @enderror
          </div>
          <div class="mt-3">
            <label for="payment" class="form-label">Upload Bukti Pembayaran</label>
            <input type="file" name="payment" class="form-control @error('payment') is-invalid @enderror" id="payment" tabindex="7" accept=".jpg,.jpeg,.png,.pdf">
            <small class="d-block my-2 text-warning">Format: .pdf, .jpg, .jpeg, .png max 1MB</small>
            @error('payment')
            <div class="invalid-feedback mt-3">
              <p class="mb-0">{{ $message }}</p>
            </div>
            @enderror
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