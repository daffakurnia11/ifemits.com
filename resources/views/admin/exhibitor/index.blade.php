@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Exhibitor IECC</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active"><i class="bi bi-shop-window"></i> IECC
          </li>
          <li class="breadcrumb-item active" aria-current="page">Exhibitor</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  @if (session()->has('notif'))
    <div id="notification" data-flashdata="{{ session('notif') }}"></div>
  @endif

  <h6 class="mb-0 text-uppercase">Data Pendaftar Exhibitor IECC</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Register Code</th>
              <th>Nama Perusahaan</th>
              <th>Nama Penanggungjawab (1)</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Jenis Barang</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $data)
            <tr>
              <td class="text-center align-middle">{{ $loop->iteration }}</td>
              <td class="align-middle text-center">{{ $data->register_code }}</td>
              <td class="align-middle text-nowrap">{{ $data->name }}</td>
              <td class="align-middle text-nowrap">{{ $data->person1 }}</td>
              <td class="align-middle text-nowrap">{{ $data->email }}</td>
              <td class="align-middle text-nowrap">{{ $data->phone }}</td>
              <td class="align-middle text-nowrap">{{ $data->vehicle }}</td>
              <td class="align-middle text-wrap">{{ $data->address }}</td>
              <td class="align-middle">
                <a href="/admin/iecc/exhibitor/{{ $data->register_code }}" class="btn btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Detail"><i class="bi bi-eye"></i></a>
                
                <form action="/admin/iecc/exhibitor/{{ $data->register_code }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm text-danger deleteButton" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Hapus" onclick="return confirm('Data akan dihapus, lanjutkan?')"><i class="bi bi-trash"></i></button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Register Code</th>
              <th>Nama Perusahaan</th>
              <th>Nama Penanggungjawab (1)</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Jenis Barang</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  
@endsection