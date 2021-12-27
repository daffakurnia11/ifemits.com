@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Exhibitor</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          <li class="breadcrumb-item"><a href="/admin/exhibitor"><i class="bi bi-easel"></i> Pendaftar Exhibitor</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ $exhibitor->register_code }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Pendaftar {{ $exhibitor->register_code }}</h6>
  <hr>
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <div class="card shadow-none border">
            <div class="card-header">
              <h6 class="mb-0">Informasi Pendaftar</h6>
            </div>
            <div class="card-body">
              <form class="row g-3">
                <div class="col-6">
                  <label class="form-label fw-bold">Nama Perusahaan</label>
                  <p class="mb-0">{{ $exhibitor->name }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Email</label>
                  <p class="mb-0">{{ $exhibitor->email }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Penanggungjawab (1)</label>
                  <p class="mb-0">{{ $exhibitor->person1 }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Penanggungjawab (2)</label>
                  <p class="mb-0">{{ $exhibitor->person2 }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Jenis Barang</label>
                  <p class="mb-0">{{ $exhibitor->vehicle }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">No Telepon</label>
                  <p class="mb-0">{{ $exhibitor->phone }}</p>
                </div>
                <div class="col-12">
                  <label class="form-label fw-bold">Alamat</label>
                  <p class="mb-0">{{ $exhibitor->address }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Bukti Pembayaran</label>
                    <a href="/files/pameran/exhibitor/payment/{{ $exhibitor->payment }}" class="d-block" target="_blank"><i class="bi bi-file-earmark-arrow-down"></i> {{ $exhibitor->payment }}</a>
                </div>
              </form>
            </div>
          </div>
          <form action="/admin/exhibitor/{{ $exhibitor->register_code }}" method="post">
            @csrf
            @method('DELETE')
            <div class="text-end mt-2">
              <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah ingin menghapus data?')">Hapus Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <div class="card shadow-none border">
            <div class="card-header">
              <h6 class="mb-0">Foto Barang</h6>
            </div>
            <div class="card-body">
              <!-- Slider main container -->
              <div class="swiper h-auto">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  @php
                      $images = explode(';', $exhibitor->photo);
                  @endphp
                  <!-- Slides -->
                  @foreach ($images as $image)
                  <div class="swiper-slide mb-5">
                    <a href="/files/pameran/exhibitor/photo/{{ $image }}" target="_blank">
                      <img src="/files/pameran/exhibitor/photo/{{ $image }}" class="w-100" alt="">
                    </a>
                  </div>
                  @endforeach
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end row-->
  
@endsection