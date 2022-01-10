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
      <h1 class="header-title text-center" data-aos="fade-up">WORKSHOP</h1>
      <p class="header-subtitle text-center m-0" data-aos="fade-up" data-aos-delay="500">Prepare the Next Generation of
        Engineers for A More Advanced Indonesia
      </p>
    </div>
  </header>
  <!-- End of Header -->

  <!-- About -->
  <section id="eventAbout">
    <div class="container about">
      <img src="/img/icon/event-cross.svg" class="about-icon" data-aos="zoom-in" data-aos-delay="500" alt="">
      <p class="about-content" data-aos="zoom-in">
        Workshop merupakan pelatihan desain berbasis Auto-Cad, yang akan diikuti oleh semifinalis Mechanical Science
        Marathon. Pada workshop tahun ini, IFEM mendapat kesempatan untuk bekerjasama dengan salah satu lembaga
        pelatihan terpercaya yaitu MECHTECH untuk menjadi mentor pada workshop ini dengan mengusung tema “Prepare the
        Next Generation of Engineers for A More Advanced Indonesia”. Workshop ini pastinya akan menambah wawasan dan
        ilmu para peserta, dan mempersiapkan para engineers muda untuk berkarya untuk bangsa.
      </p>
    </div>
  </section>
  <!-- End of About -->

  <!-- Speakers -->
  <section id="eventSpeaker">
    <div class="container speaker">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right"
          data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Partner</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left"
          data-aos-delay="250">
      </h2>
      <div class="speaker-content">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="text-center">
              <img src="/img/speaker-placeholder.png" class="speaker-photo" alt="" data-aos="zoom-in"
                data-aos-delay="1000">
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="text-center speaker-detail" data-aos="fade-down" data-aos-delay="500">Stay Tune!</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Speakers -->

@endsection