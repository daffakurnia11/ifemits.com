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
      <h1 class="header-title text-center" data-aos="fade-up">EFFECT</h1>
      <p class="header-subtitle text-center m-0" data-aos="fade-up" data-aos-delay="500">Electric Formula Competition
      </p>
    </div>
  </header>
  <!-- End of Header -->

  <!-- About -->
  <section id="eventAbout">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 col-lg-7 col-xl-6 order-2 order-md-1">
          <div class="about">
            <img src="/img/icon/event-cross.png" class="about-icon" data-aos="zoom-in" data-aos-delay="500" alt="">
            <p class="about-content" data-aos="zoom-in">
              Electric Formula Competition (EFFECT) merupakan kompetisi yang didasarkan pada desain formula elektrik untuk
              seluruh mahasiswa S1/D4 di Indonesia dengan maksimal lima anggota dan satu dosen di universitas yang sama dalam
              satu tim. Pada tahun ini EFFECT mengusung tema “Developing Indonesian Youth Contribution for the Future
              Development of Eco-Friendly Vehicles through Innovative and Applicable Electric Formula Car Designs”, dengan
              memiliki dua tahap kompetisi, yaitu tahap pengajuan proposal dan tahap final atau presentasi.
            </p>
            <a href="/if-web/registrasi" class="guidebook-button text-center d-block mx-auto" data-aos="fade-up"
              data-aos-delay="500" data-aos-offset="0">Guidebook</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5 col-xl-4 order-1 order-md-2">
          <img src="/img/EFFECT2.png" class="event-pict" alt="" data-aos="zoom-in" data-aos-delay="750">
        </div>
      </div>
    </div>
  </section>
  <!-- End of About -->

  <!-- Theme -->
  <section id="eventTheme">
    <div class="container theme">
      <h2 class="theme-title" data-aos="fade-up">
        <img src="/img/icon/blue-ball.svg" class="d-inline-block theme-title-ball" alt="">
        Tema
      </h2>
      <div class="theme-container" data-aos="zoom-in">
        <p class="theme-text text-center">Developing Indonesian Youth Contribution for the Future Development of
          Eco-Friendly Vehicles through
          Innovative and Applicable Electric Formula Car Designs</p>
      </div>
    </div>
  </section>
  <!-- End of Theme -->

  <!-- Price -->
  <section id="eventPrize">
    <div class="container prize">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right"
          data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Juara</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left"
          data-aos-delay="250">
      </h2>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="500">
        <h3 class="text-center prize-name">Juara 1</h3>
        <p class="text-center prize-desc m-0">Rp 9.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="750">
        <h3 class="text-center prize-name">Juara 2</h3>
        <p class="text-center prize-desc m-0">Rp 6.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="750">
        <h3 class="text-center prize-name">Juara 3</h3>
        <p class="text-center prize-desc m-0">Rp 3.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="1000">
        <h3 class="text-center prize-name">Juara Kategori 1</h3>
        <p class="text-center prize-desc m-0">Rp 1.000.000</p>
      </div>
      <div class="prize-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="1250">
        <h3 class="text-center prize-name">Juara Kategori 2</h3>
        <p class="text-center prize-desc m-0">Rp 1.000.000</p>
      </div>
      <a href="/effect/registrasi" class="register-button text-center d-block mx-auto" data-aos="fade-up"
        data-aos-delay="500" data-aos-offset="0">Register Now!</a>
    </div>
  </section>
  <!-- End of Price -->

@endsection