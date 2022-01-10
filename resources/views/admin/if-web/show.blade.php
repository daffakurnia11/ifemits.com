@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">IF-WEB</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          <li class="breadcrumb-item"><a href="/admin/if-web"><i class="bi bi-easel"></i> IF-WEB</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ $webinar->register_code }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Pendaftar {{ $webinar->register_code }}</h6>
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
                  <label class="form-label fw-bold">Nama Lengkap</label>
                  <p class="mb-0">{{ $webinar->name }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Instansi</label>
                  <p class="mb-0">{{ $webinar->instance }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Email</label>
                  <p class="mb-0">{{ $webinar->email }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">No Telepon</label>
                  <p class="mb-0">{{ $webinar->phone }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Umur</label>
                  <p class="mb-0">{{ $webinar->age }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Media Promosi</label>
                  <p class="mb-0">{{ $webinar->promotion }}</p>
                </div>
              </form>
            </div>
          </div>
          <form action="/admin/webinar/{{ $webinar->register_code }}" method="post">
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
              <h6 class="mb-0">Bukti Share Poster</h6>
            </div>
            <div class="card-body">
              <!-- Slider main container -->
              <div class="swiper h-auto">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  @php
                      $images = explode(';', $webinar->share);
                  @endphp
                  <!-- Slides -->
                  @foreach ($images as $image)
                  <div class="swiper-slide mb-5 text-center">
                    <a href="/files/webinar/share/{{ $image }}" target="_blank">
                      <img src="/files/webinar/share/{{ $image }}" class="w-75" alt="">
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