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
      <h1 class="header-title text-center" data-aos="fade-up" data-aos-offset="0">IECC</h1>
      <p class="header-subtitle text-center m-0" data-aos="fade-up" data-aos-delay="500">IFEM Exhibition and Closing Ceremony</p>
    </div>
  </header>
  <!-- End of Header -->

  <!-- About -->
  <section id="eventAbout">
    <div class="container about">
      <img src="/img/icon/event-cross.svg" class="about-icon" data-aos="zoom-in" data-aos-delay="500" alt="">
      <p class="about-content" data-aos="zoom-in">
        IFEM Exhibition and Closing Ceremony (IECC) merupakan rangkaian kegiatan penutup dari IFEM 2022 yang mengusung tema Electric Vehicle. Kegiatan ini merupakan wadah untuk anak bangsa memperkenalkan karya dalam bidang Electric Vehicle kepada masyarakat umum, khususnya di wilayah Surabaya. Kegiatan ini juga akan dimeriahkan oleh penampilan mahasiswa ITS dan Guest Star ternama. 
      </p>
    </div>
  </section>
  <!-- End of About -->

  <!-- Bundle -->
  <section id="eventBundle">
    <div class="container bundle">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right" data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Bundles</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left" data-aos-delay="250">
      </h2>
      <div class="row align-items-center bundle-container mx-auto">
        <div class="col-md-7" data-aos="zoom-in" data-aos-delay="250">
          <div class="bundle-card mx-auto">
            <h3 class="bundle-name text-center">Bundle 3</h3>
            <p class="bundle-desc text-center">
              Tiket Talkshow<br>
              Tiket Pameran<br>
              Closing Party
            </p>
          </div>
        </div>
        @if ($ticket < 300)
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="500">
          <a href="/bundling/registrasi" class="bundle-regis text-center mx-auto">Order</a>
          <p class="bundle-notes text-center mt-2">only for the first 300 participants</p>
        </div>
        @else
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="1000">
          <h4 class="bundle-soon text-center mb-5">Bundle 3 closed</h4>
        </div>
        @endif
      </div>
      <div class="row align-items-center bundle-container mx-auto">
        <div class="col-md-7" data-aos="zoom-in" data-aos-delay="750">
          <div class="bundle-card mx-auto">
            <h3 class="bundle-name text-center">Bundle 2</h3>
            <p class="bundle-desc text-center">
              Tiket Talkshow<br>
              Closing Party
            </p>
          </div>
        </div>
        @if ($ticket >= 300)
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="500">
          <a href="/bundling/registrasi" class="bundle-regis text-center mx-auto">Order</a>
        </div>
        @else
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="1000">
          <h4 class="bundle-soon text-center mb-5">Coming Soon</h4>
        </div>
        @endif
      </div>
      <img src="/img/icon/blue-ball.svg" class="bundle-icon1" alt="">
      <img src="/img/icon/four-hexa.svg" class="bundle-icon2" alt="">
    </div>
  </section>
  <!-- End of Bundle -->

  <!-- Date and Venue -->
  <section id="eventSchedule">
    <div class="container schedule py-5">
      <h2 class="schedule-title mx-auto" data-aos="zoom-in">Date & Venue</h2>
      <div class="d-flex justify-content-center align-items-center my-5 mx-2">
        <div>
          <img src="/img/icon/calendar-icon.svg" class="schedule-icon d-block me-3 me-md-5" alt="" data-aos="fade-left" data-aos-delay="250">
        </div>
        <div class="schedule-detail" data-aos="fade-right" data-aos-delay="500">
          <div class="my-3">
            <h3 class="detail-name">Pendaftaran Pengunjung</h3>
            <p class="detail-date">11 April 2022</p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center my-5 mx-2">
        <div>
          <img src="/img/icon/calendar-icon.svg" class="schedule-icon d-block me-3 me-md-5" alt="" data-aos="fade-left" data-aos-delay="750">
          <img src="/img/icon/location-icon.svg" class="schedule-icon d-block me-3 me-md-5" alt="" data-aos="fade-left" data-aos-delay="1000">
        </div>
        <div class="schedule-detail" data-aos="fade-right" data-aos-delay="1000">
          <div class="my-3">
            <h3 class="detail-name">Pelaksanaan</h3>
            <p class="detail-date">29 Mei 2022</p>
          </div>
          <div class="my-3">
            <h3 class="detail-name">Tempat Pelaksanaan</h3>
            <p class="detail-date">COMING SOON</p>
          </div>
        </div>
      </div>
    </div>
    <img src="/img/icon/gradient-circle.png" class="schedule-icon1" alt="">
    <img src="/img/icon/gradient-circle.png" class="schedule-icon2" alt="">
  </section>
  <!-- End of Date and Venue -->

  <!-- Register -->
  <section id="eventRegister">
    <div class="container">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right" data-aos-delay="250">
        <span class="arrow-title-text px-4 text-center" data-aos="zoom-in">Exhibitor and<br class="d-none d-lg-block"> Food &
          Beverages</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left" data-aos-delay="250">
      </h2>
      <div class="register d-flex justify-content-center align-items-center">
        <a href="/iecc/info" class="register-button d-block mt-0 mb-5" data-aos="fade-up" data-aos-delay="500">
          <img src="/img/icon/play-icon.png" class="d-inline-block me-3" alt="">
          Register
        </a>
      </div>
    </div>
  </section>
  <!-- End of Register -->

@endsection