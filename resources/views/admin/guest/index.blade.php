@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Bundling Ticket</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><i class="bi bi-ticket-perforated"></i> Bundling Ticket
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  @if (session()->has('notif'))
    <div id="notification" data-flashdata="{{ session('notif') }}"></div>
  @endif

  <h6 class="mb-0 text-uppercase">Pengaturan Form Registrasi</h6>
  <hr>
  <div class="card col-lg-6">
    <form action="/admin/setting/ticket" method="post">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="mb-3">
          <label class="form-label">Tanggal Buka</label>
          <input class="result form-control" type="text" value="{{ $setting->form_open }}" name="form_open" id="datetimeOpen" placeholder="Atur jadwal pembukaan registrasi">
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Tutup</label>
          <input class="result form-control" type="text" value="{{ $setting->form_closed }}" name="form_closed" id="datetimeClosed" placeholder="Atur jadwal penutupan registrasi">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary d-block ms-auto">Atur!</button>
      </div>
    </form>
  </div>

  <h6 class="mb-0 text-uppercase">Data Pembelian Tiket</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Register Code</th>
              <th>Nama Pengunjung</th>
              <th>Email</th>
              <th>No Telepon</th>
              <th>Jumlah Tiket</th>
              <th>Bukti Pembayaran</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $data)
            <tr>
              <td class="text-center align-middle">{{ $loop->iteration }}</td>
              <td class="align-middle text-center">{{ $data->register_code }}</td>
              <td class="align-middle text-nowrap">{{ $data->name }}</td>
              <td class="align-middle text-nowrap">{{ $data->email }}</td>
              <td class="align-middle text-nowrap">{{ $data->phone }}</td>
              <td class="align-middle text-nowrap text-center">{{ $data->ticket }}</td>
              <td class="align-middle text-wrap">
                <a href="/files/pameran/guest/payment/{{ $data->payment }}" target="_blank">
                  <i class="bi bi-file-earmark-arrow-down"></i> {{ $data->payment }}
                </a>
              </td>
              <td class="align-middle text-center">
                
                <form action="/admin/ticket/{{ $data->register_code }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm text-danger deleteButton" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Hapus" onclick="return confirm('Data akan dihapus, lanjutkan?')"><i class="bi bi-trash"></i> Hapus</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Register Code</th>
              <th>Nama Pengunjung</th>
              <th>Email</th>
              <th>No Telepon</th>
              <th>Jumlah Tiket</th>
              <th>Bukti Pembayaran</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  
@endsection