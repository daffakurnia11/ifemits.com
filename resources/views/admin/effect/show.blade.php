@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">EFFECT</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          <li class="breadcrumb-item"><a href="/admin/effect"><i class="bi bi-journal-text"></i> EFFECT</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ $effect->register_code }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Pendaftar {{ $effect->register_code }}</h6>
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
              <div class="row g-3">
                <div class="col-6">
                  <label class="form-label fw-bold">Nama Tim</label>
                  <p class="mb-0">{{ $effect->team }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Perguruan Tinggi</label>
                  <p class="mb-0">{{ $effect->collage }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Email</label>
                  <p class="mb-0">{{ $effect->email }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">No Telepon</label>
                  <p class="mb-0">{{ $effect->phone }}</p>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Bukti Pembayaran</label>
                  <a href="/files/effect/payment/{{ $effect->payment }}" class="d-block" target="_blank"><i class="bi bi-file-earmark-arrow-down"></i> {{ $effect->payment }}</a>
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Proposal</label>
                  <a href="/files/effect/proposal/{{ $effect->proposal }}" class="d-block" target="_blank"><i class="bi bi-file-earmark-arrow-down"></i> {{ $effect->proposal }}</a>
                </div>
              </div>
            </div>
          </div>
          <form action="/admin/effect/{{ $effect->register_code }}" method="post">
            @csrf
            @method('DELETE')
            <div class="text-end mt-2">
              <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah ingin menghapus data?')">Hapus Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!--end row-->

  <h6 class="mb-0 text-uppercase">Anggota {{ $effect->register_code }} : {{ $effect->team }}</h6>
  <hr>
  <div class="row">
    @foreach ($members as $member)
    <div class="col-12 col-lg-4">
      <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body">
            <div class="profile-avatar text-center">
              <img src="/files/effect/photo/{{ $member->photo }}" class="shadow" height="200" alt="">
            </div>
            <div class="text-center mt-4">
              <h4 class="mb-1">{{ $member->name }}</h4>
              <p class="mb-0 text-secondary">Anggota {{ $loop->iteration }} {{ $effect->team }}</p>
              <div class="mt-4"></div>
              <h6 class="mb-1">Scan KTM</h6>
              <p class="mb-0 text-secondary">
                <a href="/files/effect/ktm/{{ $member->identity }}" class="d-block" target="_blank"><i class="bi bi-file-earmark-arrow-down"></i> {{ $member->identity }}</a>
              </p>
            </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
@endsection