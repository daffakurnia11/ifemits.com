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
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Exhibitor</p>
      </div>
      <div class="col-lg-6">
        <form action="/iecc/exhibitor/registrasi" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          @csrf
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="name" class="form-label">Nama Perusahaan/Tim</label>
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
                <label for="email" class="form-label">Email Perusahaan/Tim</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" tabindex="2">
                @error('email')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="person1" class="form-label">Nama Penanggung Jawab (1)</label>
                <input type="text" value="{{ old('person1') }}" name="person1" class="form-control @error('person1') is-invalid @enderror" id="person1" tabindex="3">
                @error('person1')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="person2" class="form-label">Nama Penanggung Jawab (2)</label>
                <input type="text" value="{{ old('person2') }}" name="person2" class="form-control @error('person2') is-invalid @enderror" id="person2" tabindex="4">
                @error('person2')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="vehicle" class="form-label">Jenis Barang (Kendaraan / Komponen Kendaraan)</label>
                <input type="text" value="{{ old('vehicle') }}" name="vehicle" class="form-control @error('vehicle') is-invalid @enderror" id="vehicle" tabindex="5">
                @error('vehicle')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">+62</span>
                  <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" tabindex="6">
                  @error('phone')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mt-3">
                <label for="address" class="form-label">Alamat Perusahaan/Tim</label>
                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3" tabindex="7">{{ old('address') }}</textarea>
                @error('address')
                <div class="invalid-feedback mt-2">
                  <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mt-3">
                <label for="photo" class="form-label">Upload Foto Barang</label>
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
              <div class="mt-3">
                <label for="payment" class="form-label">Upload Bukti Bayar</label>
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
          <div class="text-end mt-3">
            <button type="submit" class="form-submit" tabindex="10">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection