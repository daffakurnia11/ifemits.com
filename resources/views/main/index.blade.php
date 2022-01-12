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
  <header id="landingHeader" class="">
    <div class="container header d-flex flex-column justify-content-center align-items-center">
      <div class="text-center">
        <img src="/img/icon/landing-header.svg" class="header-icon my-4" data-aos="zoom-in" data-aos-delay="750" alt="">
      </div>
      <h1 class="header-title text-center" data-aos="fade-up">IFEM</h1>
      <p class="header-subtitle text-center m-0" data-aos="fade-up" data-aos-delay="500">Indonesia Future Vehicle Marathon</p>
      <img src="/img/icon/landing-header2.svg" class="header-icon2" alt="">
    </div>
  </header>
  <!-- End of Header -->

  <!-- About -->
  <section id="landingAbout" class="d-flex justify-content-center align-items-center position-relative">
    <div class="container about">
      <div class="about-container" data-aos="zoom-in">
        <p class="about-content text-center">
          IFEM atau bisa dikenal dengan Indonesian Future Vehicle Marathon merupakan
          kegiatan yang
          diselenggarakan oleh Departemen Teknik Mesin FT-IRS ITS dibawah Himpunan Mahasiswa Mesin. Kegiatan IFEM pada
          tahun 2022 ini mengangkat tema terkait “Electric Vehicle for Our Bright Future” dengan serangkaian kegiatan
          yang
          bervariasi dari bulan Februari hingga bulan Mei 2022.
        </p>
      </div>
      <div class="about-shadow"></div>
      <img src="/img/icon/four-arrow.svg" class="about-icon1" data-aos="fade-left" data-aos-delay="500" data-aos-offset="0" alt="">
      <img src="/img/icon/four-hexa.svg" class="about-icon2" alt="">
    </div>
    <img src="/img/icon/landing-about3.svg" class="about-icon3" alt="">
  </section>
  <!-- End of About -->

  <!-- Teaser -->
  <section id="landingTeaser">
    <div class="container teaser">
      <h2 class="teaser-content d-flex" data-aos="fade-right">
        <img src="/img/icon/landing-teaser-title.svg" class="teaser-gradient me-4" alt="">
        <span class="teaser-title">Teaser</span>
      </h2>
      <div class="teaser-video mx-auto my-5 ratio ratio-16x9" data-aos="zoom-in" data-aos-delay="500">
        <iframe src="https://www.youtube.com/embed/ESr6e_EztLI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <img src="/img/icon/landing-teaser.png" class="teaser-wave-left" alt="">
    <img src="/img/icon/landing-teaser.png" class="teaser-wave-right" alt="">
  </section>
  <!-- End of Teaser -->

  <!-- Event -->
  <section id="landingEvent">
    <div class="container event">
      <h2 class="event-title mx-auto" data-aos="zoom-in">Events</h2>
      <div class="row">
        <div class="col-lg-4 col-6 my-3" data-aos="fade-up" data-aos-delay="250">
          <a href="/effect" class="event-list d-flex justify-content-center align-items-center mx-auto">
            <img src="/img/icon/landing-event-triangle.svg" class="list-triangle mx-auto" alt="">
            <h3 class="list-title">Rancang Bangun</h3>
          </a>
        </div>
        <div class="col-lg-4 col-6 my-3" data-aos="fade-up" data-aos-delay="500">
          <a href="/msm" class="event-list d-flex justify-content-center align-items-center mx-auto">
            <img src="/img/icon/landing-event-triangle.svg" class="list-triangle mx-auto" alt="">
            <h3 class="list-title">Case Competition</h3>
          </a>
        </div>
        <div class="col-lg-4 col-6 my-3" data-aos="fade-up" data-aos-delay="750">
          <a href="/if-web" class="event-list d-flex justify-content-center align-items-center mx-auto">
            <img src="/img/icon/landing-event-triangle.svg" class="list-triangle mx-auto" alt="">
            <h3 class="list-title">Webinar</h3>
          </a>
        </div>
        <div class="col-lg-4 col-6 my-3" data-aos="fade-up" data-aos-delay="1000" data-aos-offset="0">
          <a href="/if-talk" class="event-list d-flex justify-content-center align-items-center mx-auto">
            <img src="/img/icon/landing-event-triangle.svg" class="list-triangle mx-auto" alt="">
            <h3 class="list-title">Talkshow</h3>
          </a>
        </div>
        <div class="col-lg-4 col-6 my-3" data-aos="fade-up" data-aos-delay="1250" data-aos-offset="0">
          <a href="/workshop" class="event-list d-flex justify-content-center align-items-center mx-auto">
            <img src="/img/icon/landing-event-triangle.svg" class="list-triangle mx-auto" alt="">
            <h3 class="list-title">Workshop</h3>
          </a>
        </div>
        <div class="col-lg-4 col-6 my-3" data-aos="fade-up" data-aos-delay="1500" data-aos-offset="0">
          <a href="/iecc" class="event-list d-flex justify-content-center align-items-center mx-auto">
            <img src="/img/icon/landing-event-triangle.svg" class="list-triangle mx-auto" alt="">
            <h3 class="list-title">Pameran</h3>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Event -->
  
@endsection