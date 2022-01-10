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
        <h1 class="form-title text-center" data-aos="zoom-in">IECC</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Food & Beverage</p>
      </div>
      <div class="col-lg-6">
        <form action="/iecc/food-and-beverage/registrasi" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          @csrf
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Brand</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" tabindex="1" autofocus>
                @error('name')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="owner" class="form-label">Nama Pemilik</label>
                <input type="text" value="{{ old('owner') }}" name="owner" class="form-control @error('owner') is-invalid @enderror" id="owner" tabindex="2">
                @error('owner')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">+62</span>
                  <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" tabindex="3">
                  @error('phone')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" tabindex="4">
                @error('email')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="product" class="form-label">Jenis Produk</label>
                <select class="form-select @error('product') is-invalid @enderror" name="product" id="product" aria-label="Default select example"
                  tabindex="5">
                  <option selected disabled>--PILIH SATU--</option>
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
                @error('product')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="amount" class="form-label">Jumlah Produk</label>
                <input type="number" value="{{ old('amount') }}" name="amount" class="form-control @error('amount') is-invalid @enderror" id="amount" min="1" value="1" tabindex="6">
                @error('amount')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="menu" class="form-label">Upload Foto Daftar Menu</label>
                <input type="file" name="menu[]" class="form-control @error('menu') is-invalid @enderror" id="menu" tabindex="7" accept=".pdf,.jpg,.jpeg,.png" multiple>
                <small class="d-block my-2 text-warning">Multiple files format: .pdf, .jpg, .jpeg, .png max 1MB</small>
                @error('menu')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="photo" class="form-label">Upload Foto Produk</label>
                <input type="file" name="photo[]" class="form-control @error('photo') is-invalid @enderror" id="photo" tabindex="8" accept=".pdf,.jpg,.jpeg,.png" multiple>
                <small class="d-block my-2 text-warning">Multiple files format: .pdf, .jpg, .jpeg, .png max 1MB</small>
                @error('photo')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="payment" class="form-label">Upload Bukti Pembayaran</label>
                <input type="file" name="payment" class="form-control @error('payment') is-invalid @enderror" id="payment" tabindex="9" accept=".jpg,.jpeg,.png">
                <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                @error('payment')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="text-end">
            <button type="submit" class="form-submit" tabindex="10">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection