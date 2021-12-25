@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('content')
    
<section id="eventForm">
  <div class="container form my-5">
    <div class="form-container" data-aos="zoom-in">
      <h2 class="form-head mb-3">Syarat & Ketentuan</h2>
      <p class="form-desc m-0">
        Regulasi persyaratan dan tata tertib REGULASI persyaratan dan tata tertib exhibitor IFEM Exhibition and
        Closing Ceremony 2022 sebagai berikut :
      </p>
      <ol>
        <li class="form-list my-2">Memiliki sertifikat vaksin COVID-19 dosis kedua.
        </li>
        <li class="form-list my-2">Mematuhi protokol kesehatan berdasarkan keputusan Kementrian Kesehatan Republik
          Indonesia Nomor HK.01.07 MENKES/382/2020 tentang protokol kesehatan bagi masyarakat di tempat dan fasilitas
          umum dalam rangka pencegahan dan pengendalian coronavirus disease 2019 (Covid-19).
        </li>
        <li class="form-list my-2">Barang yang dipamerkan exhibitor harus sesuai dengan tema IFEM 2022.</li>
        <li class="form-list my-2">Pengisi stand exhibitor dikenakan biaya sebesar Rp 600.000,00- untuk partisipasi
          dalam
          acara Pameran IFEM 2022 yang berlangsung hari pada tanggal 29 Mei 2022. Setiap pengisi akan memperoleh
          fasilitas berupa:
          <ul>
            <li class="form-list my-2">Panggung atau stand (sesuai barang yang dipamerkan exhibitor)
            </li>
            <li class="form-list my-2">Meja 1 buah
            </li>
            <li class="form-list my-2">Kursi 3 buah
            </li>
            <li class="form-list my-2">Listrik</li>
          </ul>
        </li>
        <li class="form-list my-2">Masing-masing stand exhibitor wajib memiliki anggota yang menjaga dan melayani
          pengunjung. Panitia tidak bertanggung jawab atas kehilangan dan/atau kerusakan yang terjadi di area
          pelaksanaan.
        </li>
        <li class="form-list my-2">Jumlah anggota stand exhibitor dibatasi sebanyak 4 orang.
        </li>
        <li class="form-list my-2">Setiap anggota stand exhibitor dilarang menggunakan kata-kata dan perbuatan yang
          mengandung unsur SARA pada saat pameran berlangsung.
        </li>
        <li class="form-list my-2">Pengisi stand exhibitor wajib mengikuti technical meeting pada tanggal 28 Mei 2022
          pukul
          10.00 WIB bertempat di Departemen Teknik Mesin FT-IRS ITS.
        </li>
        <li class="form-list my-2">Layout penempatan stand exhibitor sesuai yang sudah ditentukan panitia.
        </li>
        <li class="form-list my-2">Setiap regulasi harus dipatuhi dan apabila dilanggar sesuai perjanjian yang telah
          disepakati.</li>
      </ol>
      <div class="text-start mt-4">
        <a href="/exhibitor/registrasi" class="form-submit d-block my-4" tabindex="11">Lanjut</a>
      </div>
    </div>
  </div>
</section>

@endsection