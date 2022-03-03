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
      <h1 class="header-title text-center" data-aos="fade-up">IF-WEB</h1>
      <p class="header-subtitle text-center m-0" data-aos="fade-up" data-aos-delay="500">IFEM WEBINAR</p>
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
              IF-WEB merupakan rangkaian kegiatan pembuka dari IFEM 2022. Pada kegiatan webinar kali ini mengusung tema “<strong>Potensi Mobil Listrik di Indonesia</strong>”, dimana akan menghadirkan pembicara pembicara hebat seperti seseorang yang ahli dalam bidang industri EV dan bidang kompetisi mobil listrik di Indonesia.
            </p>
            <a href="/if-web/registrasi" class="register-button text-center d-block mx-auto" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">Register Now!</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5 col-xl-4 order-1 order-md-2">
          <img src="/img/WEBINAR2.png" class="event-pict" alt="" data-aos="zoom-in" data-aos-delay="750">
        </div>
      </div>
    </div>
  </section>
  <!-- End of About -->

  <!-- Topics -->
  <section id="eventTopic">
    <div class="container topic">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right" data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Topics</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left" data-aos-delay="250">
      </h2>
      <div class="accordion" id="topicAccordion">
        <div class="accordion-item topic-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="500">
          <button  class="text-center topic-name" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">The Truth About Electric Vehicle <i class="fas fa-caret-down" style="transform: rotate(180deg);"></i></button>
          <p id="collapseOne" class="accordion-collapse collapse show topic-desc" data-bs-parent="#topicAccordion">
            Kendaraan listrik merupakan kata yang sering kita dengar, tetapi apakah setiap orang yang pernah mendengar
            kata tersebut benar-benar sudah tau tentang “kendaraan listrik” ? Pada salah satu topik IF-WEB 2022 ini akan
            membuka wawasan kalian tentang apa itu kendaraan listrik, mulai dari mekanisme kendaraan listrik, kelebihan
            kendaraan listrik, dan juga tentang perawatan kendaraan listrik itu sendiri.
          </p>
        </div>
        <div class="accordion-item topic-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="750">
          <button  class="text-center topic-name collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">The Future of Local Electric Vehicle Production <i class="fas fa-caret-down"></i></button>
          <p id="collapseTwo" class="accordion-collapse collapse topic-desc" data-bs-parent="#topicAccordion">
            Peminat kendaraan listrik sangat meningkat saat sekarang ini, diikuti dengan semakin banyaknya inovasi yang diciptakan oleh anak bangsa. Inovasi-inovasi ini merupakan modal awal Indonesia untuk memproduksi kendaraan listrik buatan lokal. Sebenarnya bagaimana potensi Indonesia dalam memproduksi kendaraan listrik lokal? Topik ini akan didiskusikan bersama narasumber yang ahli pada bidangnya, stay tune di IF-WEB 2022 !!
          </p>
        </div>
        <div class="accordion-item topic-content mx-auto" data-aos="fade-down" data-aos-offset="0" data-aos-delay="1000">
          <button  class="text-center topic-name collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Electric Vehicle Potential for Competition <i class="fas fa-caret-down"></i></button>
          <p id="collapseThree" class="accordion-collapse collapse topic-desc" data-bs-parent="#topicAccordion">
            Penggunaan kendaraan listrik sedang naik daun pada saat ini, tetapi bagaimana jika kendaraan listrik juga digunakan untuk kompetisi perlombaan? Yuk simak topik ini hanya di IF-WEB 2022 !!
          </p>
        </div>
      </div>
    </div>
    <img src="/img/icon/blue-ball.svg" class="topic-icon1" alt="">
    <img src="/img/icon/four-hexa.svg" class="topic-icon2" alt="">
  </section>
  <!-- End of Topics -->

  <!-- Speakers -->
  <section id="eventSpeaker">
    <div class="container speaker">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right" data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Speakers</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left" data-aos-delay="250">
      </h2>
      <!-- First Speaker -->
      <div class="speaker-content">
        <h3 class="speaker-topic text-center">
          The Truth About Electric Vehicle
        </h3>
        <div class="row align-items-center">
          <div class="col-md-5 col-sm-6">
            <div class="text-center">
              <div class="photo">
                <img src="/img/webinar-speaker-1.png" class="photo-image" alt="">
                <div class="photo-detail d-flex flex-column justify-content-center">
                  <h4 class="detail-name text-center mb-0">Niko Questera</h4>
                  <p class="detail-desc text-center mb-0">Founder of QUESTMOTORS</p>
                </div>
                <img src="/img/icon/gradient-circle.png" class="photo-circle" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-6">
            <p class="speaker-detail mb-0 mt-4 mt-sm-0">
              Niko Questera adalah seorang insinyur yang memiliki ketertarikan yang sangat besar terhadap kendaraan listrik yang ramah lingkungan. Beliau pernah bekerja untuk Tesla di Amerika Serikat. Namun, saat ini beliau sedang mengembangkan QUESTMOTORS dan kendaraan listrik yang menjadi kebanggaannya.
            </p>
          </div>
        </div>
      </div>
      <!-- End of First Speaker -->
      <!-- Second Speaker -->
      <div class="speaker-content">
        <h3 class="speaker-topic text-center">
          The Future of Local Vehicle Production
        </h3>
        <div class="row align-items-center">
          <div class="col-md-5 col-sm-6 order-1">
            <div class="text-center">
              <div class="photo">
                <img src="/img/webinar-speaker-2.png" class="photo-image" alt="">
                <div class="photo-detail d-flex flex-column justify-content-center">
                  <h4 class="detail-name text-center mb-0">Triharsa Adicahya</h4>
                  <p class="detail-desc text-center mb-0">CEO/Founder SPORA EV</p>
                </div>
                <img src="/img/icon/gradient-circle.png" class="photo-circle" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-6 order-2">
            <p class="speaker-detail mb-0 mt-4 mt-sm-0">
              Triharsa Adicahya atau kerap disapa Pak Adi adalah seorang ahli dalam bidang kendaraan listrik. Sebelumnya, beliau banyak menghabiskan sebagian besar pekerjaan profesionalnya sebagai seorang Engineer dan product designer di industri otomotif. Kini beliau menjabat sebagai Founder/CEO dari startup teknologi yang berfokus pada pengembangan dan pengkonversian electric vehicle di Indonesia.
            </p>
          </div>
        </div>
      </div>
      <!-- End of Second Speaker -->
      <!-- Third Speaker -->
      <div class="speaker-content">
        <h3 class="speaker-topic text-center">
          Electric Vehicle Potential for Competition
        </h3>
        <div class="row align-items-center">
          <div class="col-md-5 col-sm-6">
            <div class="text-center">
              <div class="photo">
                <img src="/img/webinar-speaker-3.png" class="photo-image" alt="">
                <div class="photo-detail d-flex flex-column justify-content-center">
                  <h4 class="detail-name text-center mb-0">Hillarius Satrio</h4>
                  <p class="detail-desc text-center mb-0">Journalist/Editor of AutonetMagz.com</p>
                </div>
                <img src="/img/icon/gradient-circle.png" class="photo-circle" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-6">
            <p class="speaker-detail mb-0 mt-4 mt-sm-0">
              Hillarius Satrio adalah seorang jurnalis sekaligus editor di salah satu media otomotif Indonesia. Namanya sudah tidak asing lagi bagi kalangan pecinta otomotif. Hillarius Satrio sering membagikan informasi mengenai dunia otomotif baik berupa tulisan maupun video review yang beberapa karyanya pernah mendapatkan penghargaan sebagai berita dan review produk terbaik. Selain itu, Hillarius Satrio juga pernah mengikuti “Porsche Sport Driving School : Master Class” 
            </p>
          </div>
        </div>
      </div>
      <!-- End of Third Speaker -->
    </div>
    <img src="/img/icon/gradient-circle.png" class="speaker-icon1" alt="">
    <img src="/img/icon/gradient-circle.png" class="speaker-icon2" alt="">
  </section>
  <!-- End of Speakers -->

  <!-- Timeline -->
  {{-- <section id="eventTimeline">
    <div class="container timeline">
      <h2 class="gradientbox-title">Timeline</h2>
      <div class="timeline-content mx-auto">
        <div class="line"></div>
        <div class="row align-items-center">
          <div class="col-6">
            <div class="text-end timeline-desc">
              Pendaftaran
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                18/01<br>2022
              </span>
            </div>
          </div>
          <div class="my-5"></div>
          <div class="col-6">
            <div class="text-end timeline-desc">
              Pelaksanaan
            </div>
          </div>
          <div class="col-6 position-relative d-flex align-items-center">
            <img src="/img/icon/arrow-left.svg" class="d-block me-2" alt="">
            <div class="text-center timeline-schedule d-flex justify-content-center align-items-center">
              <span>
                12/02<br>2022
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- End of Timeline -->  

@endsection