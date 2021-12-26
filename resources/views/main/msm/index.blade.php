@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('footer')
  @include('main.layouts.footer')    
@endsection

@section('scrollToTop')
  <button type="button" id="scrollToTop" data-aos="fade-up" data-aos-offset="0">
    <img src="/img/icon/scroll-top-button.svg" alt="">
  </button>
@endsection

@section('content')
    
  <!-- Header -->
  <header id="eventHeader">
    <div class="container header d-flex flex-column justify-content-center align-items-center">
      <h1 class="header-title text-center" data-aos="fade-up">MSM</h1>
      <p class="header-subtitle text-center m-0" data-aos="fade-up" data-aos-delay="500">Mechanical Science Marathon</p>
    </div>
  </header>
  <!-- End of Header -->

  <!-- About -->
  <section id="eventAbout">
    <div class="container about">
      <img src="/img/icon/event-cross.svg" class="about-icon" data-aos="zoom-in" data-aos-delay="500" alt="">
      <p class="about-content" data-aos="zoom-in">
        Mechanical Science Marathon atau MSM merupakan salah satu kompetisi dalam IFEM 2022 yang didasarkan pada
        kompetisi bidang Fisika Mekanik untuk seluruh siswa sekolah menengah atas di Indonesia. Dalam Mechanical Science
        Marathon Peserta berada dalam satu tim dan tim tersebut beranggotakan tiga orang di sekolah yang sama.
        Mechanical Science Marathon memiliki tiga fase yaitu penyisihan pertama, semifinal, dan final. Pada tahap
        eliminasi pertama tim akan menyelesaikan tes yang berisi materi matematika, fisika, kimia dan mekanika dasar.
        Kemudian, pada babak semifinal berbentuk seperti rally case dan tim akan menyelesaikan semua kasus di industri
        mekanik dengan waktu yang terbatas. Dan terakhir pada tahap akhir berbentuk kuis atau “cerdas cermat” dalam
        bahasa Indonesia.
      </p>
    </div>
  </section>
  <!-- End of About -->

  <!-- Timeline -->
  {{-- <section id="eventTimeline">
    <div class="container timeline">
      <h2 class="gradientbox-title">Timeline</h2>
      <div class="timeline-content mx-auto">
        <div class="line"></div>
        <div class="row align-items-center">
          <div class="col-6">
            <div class="text-end timeline-desc">
              Pendaftaran Dibuka
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                26/12<br>2021
              </span>
            </div>
          </div>
          <div class="my-5"></div>
          <div class="col-6">
            <div class="text-end timeline-desc">
              Pendaftaran
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                20/02<br>2022
              </span>
            </div>
          </div>
          <div class="my-5"></div>
          <div class="col-6">
            <div class="text-end timeline-desc">
              Babak Penyisihan<Br>
              Sesi 1 : 09.00-10.40<Br>
              Sesi 2 : 13.00-14.00
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                26/02<br>2022
              </span>
            </div>
          </div>
          <div class="my-5"></div>
          <div class="col-6">
            <div class="text-end timeline-desc">
              Babak Semifinal<br>
              Tempat: Ruang D201 dan E303-304 S1 Departemen Teknik Mesin FT-IRS ITS
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                19/03<br>2022
              </span>
            </div>
          </div>
          <div class="my-5"></div>
          <div class="col-6">
            <div class="text-end timeline-desc">
              Babak Final<Br>
              Tempat: Ruang D201 dan E303-304 S1 Departemen Teknik Mesin FT-IRS ITS
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                20/03<br>2022
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- End of Timeline -->

  <!-- Price -->
  <section id="eventPrize">
    <div class="container prize">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right" data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Juara</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left" data-aos-delay="250">
      </h2>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="500">
        <h3 class="text-center prize-name">Juara 1</h3>
        <p class="text-center prize-desc m-0">Rp 5.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="750">
        <h3 class="text-center prize-name">Juara 2</h3>
        <p class="text-center prize-desc m-0">Rp 3.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="1000">
        <h3 class="text-center prize-name">Harapan 1</h3>
        <p class="text-center prize-desc m-0">Rp 1.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="1250">
        <h3 class="text-center prize-name">Harapan 2</h3>
        <p class="text-center prize-desc m-0">Rp 1.000.000</p>
      </div>
    </div>
  </section>
  <!-- End of Price -->

  <!-- Information -->
  <section id="eventInfo">
    <div class="container info">
      <a href="/msm/registrasi" class="register-button text-center d-block mx-auto" data-aos="fade-up"  data-aos-offset="0">Register Now!</a>
      <div class="info-container mx-auto">
        <div class="info-content" data-aos="zoom-in" data-aos-offset="0" data-aos-delay="500">
          <h2 class="info-title text-center mb-3">TEKNIS PENYISIHAN</h2>
          <ol class="info-desc">
            <li>Pengerjaan online di website yang telah disediakan IFEM 2022</li>
            <li>Terdapat dua sesi (masing-masing sesi 100 menit)</li>
            <li>Jumlah soal tiap sesi adalah sebanyak 100 soal (30 Matematika, 30 Fisika, 30 Kimia, 10 Teknik Mesin
              Dasar)</li>
            <li>Soal pada Sesi 1 dan Sesi 2 berbeda</li>
            <li>Penilaian: Benar +4, Salah -1, Kosong 0</li>
            <li>Jika ada peserta dengan nilai yang sama, akan diambil peserta dengan jumlah soal terjawab lebih banyak
            </li>
            <li>Bobot soal:
              <ul>
                <li>Easy (setara UN)</li>
                <li>Medium (setara OSK)</li>
                <li>Hard (setara OSP)</li>
              </ul>
            </li>
            <li>Soft file soal akan diberikan ke ketua kelompok H+1 pelaksanaan Penyisihan</li>
            <li>Sejumlah 10 tim dengan nilai tertinggi akan masuk ke babak Semifinal di Departemen Teknik Mesin FT-IRS
              ITS Surabaya</li>
          </ol>
        </div>
      </div>
      <img src="/img/icon/four-hexa.svg" class="info-icon1" alt="">
      <img src="/img/icon/gradient-circle.png" class="info-icon2" alt="">
    </div>
  </section>
  <!-- End of Information -->

@endsection