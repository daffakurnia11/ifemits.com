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
<header id="aboutHeader">
  <div class="container header">
    <div class="row align-items-center">
      <div class="col-lg-7 order-2 order-lg-1">
        <div class="position-relative">
          <img src="/img/about/mesin-building.png" class="header-image d-block mx-auto" alt="" data-aos="zoom-in" data-aos-delay="500">
          <img src="/img/about/about-car.png" class="header-car" alt="" data-aos="zoom-in">
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <h1 class="header-title mx-auto mx-lg-0 my-4">
          <span class="d-block text-center" data-aos="zoom-in" data-aos-delay="250">Meet</span>
          <span class="d-block text-center" data-aos="zoom-in" data-aos-delay="500">Our</span>
          <span class="d-block text-center" data-aos="zoom-in" data-aos-delay="750">Crew</span>
        </h1>
      </div>
    </div>
    <img src="/img/icon/play-icon.png" class="header-play" alt="" data-aos="zoom-in" data-aos-delay="500">
    <img src="/img/icon/play-icon.png" class="header-play" alt="" data-aos="zoom-in" data-aos-delay="750">
    <img src="/img/icon/play-icon.png" class="header-play" alt="" data-aos="zoom-in" data-aos-delay="1000">
  </div>
</header>
<!-- End of Header -->

<!-- BPI -->
<section id="bpiTeam">
  <div class="container team">
    <h2 class="d-flex align-items-center justify-content-center arrow-title">
      <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right" data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">BPI</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left" data-aos-delay="250">
    </h2>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="team-container my-3 mx-auto" data-aos="zoom-in">
          <img src="/img/about/triangle-team.png" class="team-bg" alt="">
          <img src="/img/about/bpi/presiden.png" class="team-photo" alt="">
          <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
            <h4 class="team-name">Diaz Ardi Firmansyah</h4>
            <p class="team-position">Presiden</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="team-container my-3 mx-auto" data-aos="zoom-in">
          <img src="/img/about/triangle-team.png" class="team-bg" alt="">
          <img src="/img/about/bpi/sekretaris.png" class="team-photo" alt="">
          <div class="team-desc-group">
            <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
              <h4 class="team-name">Vissa Ramanitya</h4>
              <p class="team-position">Sekretaris I</p>
            </div>
            <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
              <h4 class="team-name">Nadira Salsabila</h4>
              <p class="team-position">Sekretaris II</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="team-container my-3 mx-auto" data-aos="zoom-in">
          <img src="/img/about/triangle-team.png" class="team-bg" alt="">
          <img src="/img/about/bpi/wakil.png" class="team-photo" alt="">
          <div class="team-desc-group">
            <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
              <h4 class="team-name">Faiz Taruna</h4>
              <p class="team-position">Wakil Internal</p>
            </div>
            <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
              <h4 class="team-name">Rafi Fadhlurohman</h4>
              <p class="team-position">Wakil Eksternal</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="team-container my-3 mx-auto" data-aos="zoom-in">
          <img src="/img/about/triangle-team.png" class="team-bg" alt="">
          <img src="/img/about/bpi/bendahara.png" class="team-photo" alt="">
          <div class="team-desc-group">
            <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
              <h4 class="team-name">Dessideria Diandri</h4>
              <p class="team-position">Bendahara I</p>
            </div>
            <div class="team-desc text-center" data-aos="fade-down" data-aos-delay="250" data-aos-offset="0">
              <h4 class="team-name">Nalendra Mahardika</h4>
              <p class="team-position">Bendahara II</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of BPI -->

<!-- All Crews -->
<section id="aboutCrews">
  <div class="container crews">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="true" data-bs-interval="6000">
      <div class="carousel-inner">

        <!-- Acara -->
        <div class="carousel-item active">
          <div class="team">
            <!-- BPH -->
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Acara</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_acara.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">I Gede Made Budari</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_acara.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Rafif Razaan Ananto</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of BPH -->
            <!-- Webinar -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Webinar</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_webinar.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Ananda Ezra Marpaung</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_webinar.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Ridho Akbar Renaldi</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_webinar.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Muhammad Rafli</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_webinar.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Farhan Ramadhan E.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Webinar -->
          </div>
        </div>

        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Acara</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <!-- Rancang Bangun -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Rancang Bangun</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_rancang.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Farrel Widianto</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_rancang.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Salwa Nisrina Aulia</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_rancang.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Duto Iman Ibrahim</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_rancang.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Muhammad Fauzan A.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Rancang Bangun -->
            <!-- Case Competition -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Case Competition</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_casecomp.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Sultan Achmad H.</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert_casecomp.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Bella Callista</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_casecomp.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Muhammad Adim I.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_casecomp.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Hilmi Alfaruqy</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Case Competition -->
          </div>
        </div>

        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Acara</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <!-- Pameran -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Pameran</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-12 order-sm-1 order-lg-2">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Daffa Arkana</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-1">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Ambrossia K.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-3">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Razaq Satria A.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Apringga Bima P. S.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert4_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Innastya Hafshah</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert5_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Nugroho Wisnumurti</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert6_pameran.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Muhammad Hanif</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Pameran -->
          </div>
        </div>
        <!-- End of Acara -->

        <!-- IT -->
        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">IT</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_it.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Bellar Mino Jonathan C.</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_it.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">I. G. A. Putu Kresna B.</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of IT -->

        <!-- Kestari -->
        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Kestari</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_kestari.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Salma Aulia Sabillah</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_kestari.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Talia Kamil</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_kestari.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">M. Yusuf</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_kestari.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Wardah Nur Amirah</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Kestari -->

        <!-- kamzin -->
        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">kamzin</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_kamzin.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Adi Wicaksana</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_kamzin.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Adji Tri Irianto</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_kamzin.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Talita Azalia</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_kamzin.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Bayu Irfansyah P.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of kamzin -->

        <!-- Konsumsi -->
        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Konsumsi</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_konsumsi.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Isnata Prasyarni C.</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_konsumsi.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Luthfi Zulva Hanifah</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Konsumsi -->

        <!-- PR -->
        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">pr</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_pr.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Sastya Adzani S.</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_pr.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Naufal Nur Hakam</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_pr.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Agnes Cahyaning R.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_pr.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Irham Nadhil Firdausi.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_pr.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Aldiva Syawallad A.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of PR -->

        <!-- Kreatif -->
        <div class="carousel-item">
          <div class="team">
            <!-- BPH -->
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Kreatif</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_kreatif.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Erlangga Satria P.</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_kreatif.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Kafka Kordova L.</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of BPH -->
            <!-- Content Creator -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Content Creator </h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_contentcreator.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Rachmad Agung W.</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_contentcreator.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Shofiyah Nabilla S.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_contentcreator.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Benedikto Bona S.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_contentcreator.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Moch. Fadhel Firnanda</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Content Creator -->
          </div>
        </div>

        <div class="carousel-item">
          <div class="team">
            <!-- Design -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Design</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-12 order-sm-1 order-lg-2">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_design.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Andhika Prasetya R.</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-1">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_design.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Harvin Muliono</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-3">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_design.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Yusuf Oktavian Hadi</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_design.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Evany Divitri Lestari</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert4_design.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Yoana Devita Natasha</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Design -->
          </div>
        </div>
        <!-- End of Kreatif -->

        <!-- Logistik -->
        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Logistik</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_logistik.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Fajar Freeheart Yanto</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_logistik.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Rama Anggoro W.</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_logistik.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">M. Rizqi Murtadho</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_logistik.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Almas Farhan Roziqin</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Logistik -->

        <!-- Funding -->
        <div class="carousel-item">
          <div class="team">
            <!-- BPH -->
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Funding</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kabid_funding.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Raihan Mustofa</h4>
                    <p class="team-position">Ketua Bidang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/wakabid_funding.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Naufal Atha Dzaky</h4>
                    <p class="team-position">Wakil Ketua Bidang</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of BPH -->
            <!-- Fundraising -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Fundraising</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_fundraising.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Amin Nurdin</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_fundraising.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Shinta Ayu</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_fundraising.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Adam Kevin</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert3_fundraising.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Khofifatul Mafaza</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Fundraising -->
          </div>
        </div>

        <div class="carousel-item">
          <div class="team">
            <h2 class="d-flex align-items-center justify-content-center arrow-title">
              <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="">
              <span class="arrow-title-text px-4">Funding</span>
              <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="">
            </h2>
            <!-- Sponsorship -->
            <h3 class="text-center team-division mx-auto mt-5 mb-3">Sponsorship</h3>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-12 order-sm-1 order-lg-2">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/kadiv_sponsor.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Gerald Nicholaus</h4>
                    <p class="team-position">Ketua Divisi</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-1">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert1_sponsor.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Edgar Ramadhan P.</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-3">
                <div class="team-container my-3 mx-auto">
                  <img src="/img/about/triangle-team.png" class="team-bg" alt="">
                  <img src="/img/about/crews/expert2_sponsor.png" class="team-photo" alt="">
                  <div class="team-desc text-center">
                    <h4 class="team-name">Josia Hamonangan</h4>
                    <p class="team-position">Staff Ahli</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Sponsorship -->
          </div>
        </div>
        <!-- End of Funding -->

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <img src="/img/icon/slider-left.svg" alt="">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <img src="/img/icon/slider-right.svg" alt="">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- End of All Crews -->

<!-- Filosofi Logo -->
<section id="aboutLogo">
  <div class="container logo">
    <h2 class="logo-title">
      <img src="/img/icon/gradient-circle-subtitle.svg" class="logo-title-image" alt="" data-aos="zoom-in" data-aos-delay="500">
      <span class="logo-title-text" data-aos="fade-right">Filosofi Logo</span>
    </h2>
    <div class="row align-items-center my-5">
      <div class="col-md-6">
        <div class="logo-circle d-flex justify-content-center align-items-center mx-auto" data-aos-offset="0" data-aos="zoom-in">
          <img src="/img/logo-only.png" class="logo-picture" alt="">
        </div>
      </div>
      <div class="col-md-6 px-4">
        <div class="logo-container mx-auto my-3" data-aos-offset="0" data-aos="fade-right" data-aos-delay="500">
          <h4 class="logo-meaning text-center" id="logoMeaning">Adaptif</h4>
          <p class="logo-desc text-center" id="logoDesc">Mudah menyesuaikan (diri) dengan keadaan</p>
          <img src="/img/icon/play-icon.png" class="logo-play" alt="">
          <button type="button" class="logo-next">Next</button>
        </div>
      </div>
    </div>
  </div>
  <img src="/img/icon/four-hexa.svg" class="logo-hexa" alt="">
  <img src="/img/icon/about-logo1.svg" class="logo-bg1" alt="">
  <img src="/img/icon/about-logo2.svg" class="logo-bg2" alt="">
</section>
<!-- End of Filosofi Logo -->

@endsection