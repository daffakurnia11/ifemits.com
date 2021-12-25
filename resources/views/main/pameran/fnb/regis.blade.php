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
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Food & Beverage</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="POST" class="form-container my-5" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          <h2 class="form-head mb-4">Registrasi</h2>
          <div class="row">
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Brand</label>
                <input type="text" name="name" class="form-control" id="name" tabindex="1" autofocus>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="owner" class="form-label">Nama Pemilik</label>
                <input type="text" name="owner" class="form-control" id="owner" tabindex="2">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <input type="text" name="phone" class="form-control" id="phone" tabindex="3">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" tabindex="4">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="product" class="form-label">Jenis Produk</label>
                <select class="form-select" name="product" id="product" aria-label="Default select example"
                  tabindex="5">
                  <option selected disabled>--PILIH SATU--</option>
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="amount" class="form-label">Jumlah Produk</label>
                <input type="number" name="amount" class="form-control" id="amount" min="1" value="1" tabindex="6">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="menu" class="form-label">Upload Foto Daftar Menu</label>
                <input type="file" name="menu" class="form-control" id="menu" tabindex="7">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="photo" class="form-label">Upload Foto Produk</label>
                <input type="file" name="photo" class="form-control" id="photo" tabindex="8">
              </div>
            </div>
            <div class="col-lg-12 col-xxl-6 col-md-6">
              <div class="mb-3">
                <label for="payment" class="form-label">Upload Bukti Pembayaran</label>
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