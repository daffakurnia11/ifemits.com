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
        <h1 class="form-title text-center" data-aos="zoom-in">Pameran</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Exhibitor</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan/Tim</label>
                <input type="text" name="name" class="form-control" id="name" tabindex="1" autofocus>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email Perusahaan/Tim</label>
                <input type="email" name="email" class="form-control" id="email" tabindex="2">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="person1" class="form-label">Nama Penanggung Jawab (1)</label>
                <input type="text" name="person1" class="form-control" id="person1" tabindex="3">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="person2" class="form-label">Nama Penanggung Jawab (2)</label>
                <input type="text" name="person2" class="form-control" id="person2" tabindex="4">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="vehicle" class="form-label">Jenis Barang (Kendaraan / Komponen Kendaraan)</label>
                <input type="text" name="vehicle" class="form-control" id="vehicle" tabindex="5">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <input type="text" name="phone" class="form-control" id="phone" tabindex="6">
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="address" class="form-label">Alamat Perusahaan/Tim</label>
                <textarea class="form-control" name="address" id="address" rows="3" tabindex="7"></textarea>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="photo" class="form-label">Upload Foto Barang</label>
                <input type="file" name="photo" class="form-control" id="photo" tabindex="8">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="payment" class="form-label">Upload Bukti Bayar</label>
                <input type="file" name="payment" class="form-control" id="payment" tabindex="9">
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