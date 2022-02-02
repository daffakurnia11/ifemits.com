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
  <header id="merchHeader" class=" d-flex flex-column justify-content-center align-items-center">
    <div class="container overflow-hidden">
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
        <div class="position-relative me-3 my-5 my-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <img src="/img/icon/blue-ball.svg" class="blue-ball" alt="">
          <img src="/img/icon/outlined-ball.svg" class="outlined-ball" alt="">
        </div>
        <div class="header">
          <img src="/img/icon/arrow-right.svg" class="d-block ms-auto mb-3 header-arrow" alt="" data-aos="fade-right" data-aos-delay="750">
          <h1 class="header-title text-end" data-aos="zoom-in">Merchandise<br><span>IFEM 2022</span></h1>
        </div>
      </div>
    </div>
  </header>
  <!-- End of Header -->
  
  <!-- Catalog -->
  <section id="merchCatalog">
    <div class="container">
      <div class="accordion" id="catalog">
        <div class="d-flex flex-wrap justify-content-center mb-4">
          <button class="catalog-button text-center flex-lg-grow-1 mx-2 my-2" type="button" data-bs-toggle="collapse" data-aos="fade-up" data-bs-target="#merchOne" aria-expanded="true" aria-controls="merchOne">
            Gantungan Kunci
          </button>
          <button class="catalog-button text-center flex-lg-grow-1 mx-2 my-2 collapsed" type="button" data-bs-toggle="collapse" data-aos="fade-up" data-aos-delay="250" data-bs-target="#merchTwo" aria-expanded="true" aria-controls="merchTwo">
            Kaos
          </button>
          <button class="catalog-button text-center flex-lg-grow-1 mx-2 my-2 collapsed" type="button" data-bs-toggle="collapse" data-aos="fade-up" data-aos-delay="500" data-bs-target="#merchThree" aria-expanded="true" aria-controls="merchThree">
            Korek Cricket
          </button>
          <button class="catalog-button text-center flex-lg-grow-1 mx-2 my-2 collapsed" type="button" data-bs-toggle="collapse" data-aos="fade-up" data-aos-delay="750" data-bs-target="#merchFour" aria-expanded="true" aria-controls="merchFour">
            Totebag
          </button>
        </div>
        <div data-aos="zoom-in" data-aos-delay="1000">
          <div id="merchOne" class="accordion-collapse collapse show" data-bs-parent="#catalog">
            <div class="catalog-container mx-auto text-center d-flex flex-column justify-content-center">
              <h2 class="catalog-name">Gantungan Kunci</h2>
              <img src="/img/merch/keychain.png" alt="" class="catalog-photo d-block mx-auto my-4">
              <p class="catalog-price">Rp 15.000</p>
            </div>
          </div>
          <div id="merchTwo" class="accordion-collapse collapse" data-bs-parent="#catalog">
            <div class="catalog-container mx-auto text-center d-flex flex-column justify-content-center">
              <h2 class="catalog-name">Kaos</h2>
              <img src="/img/merch/shirt.png" alt="" class="catalog-photo d-block mx-auto my-4">
              <p class="catalog-price">Rp 90.000</p>
            </div>
          </div>
          <div id="merchThree" class="accordion-collapse collapse" data-bs-parent="#catalog">
            <div class="catalog-container mx-auto text-center d-flex flex-column justify-content-center">
              <h2 class="catalog-name">Korek Cricket</h2>
              <img src="/img/merch/cricket.png" alt="" class="catalog-photo d-block mx-auto my-4">
              <p class="catalog-price">Rp 15.000</p>
            </div>
          </div>
          <div id="merchFour" class="accordion-collapse collapse " data-bs-parent="#catalog">
            <div class="catalog-container mx-auto text-center d-flex flex-column justify-content-center">
              <h2 class="catalog-name">Totebag</h2>
              <div class="d-flex justify-content-center">
                <img src="/img/merch/totebag-black.png" alt="" class="catalog-photo d-block my-4">
                <img src="/img/merch/totebag-white.png" alt="" class="catalog-photo d-block my-4">
              </div>
              <p class="catalog-price">Rp 45.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="/img/icon/four-hexa.svg" class="catalog-bg" alt="">
  </section>
  <!-- End of Catalog -->

  <!-- Bundling -->
  <section id="merchBundle">
    <div class="container bundle">
      <h2 class="d-flex align-items-center justify-content-center arrow-title">
        <img src="/img/icon/four-arrow-right.svg" class="arrow-title-left" alt="" data-aos="fade-right"
          data-aos-delay="250">
        <span class="arrow-title-text px-4" data-aos="zoom-in">Bundle</span>
        <img src="/img/icon/four-arrow-left.svg" class="arrow-title-right" alt="" data-aos="fade-left"
          data-aos-delay="250">
      </h2>
      <div class="row mt-5">
        <div class="col-lg-6 px-4 my-4" data-aos="fade-up" data-aos-offset="100">
          <div class="bundle-container text-center d-flex flex-column align-items-center justify-content-center">
            <div class="bundle-picture">
              <img src="/img/merch/bundle1.png" alt="" class="bundle-img mb-3">
            </div>
            <h2 class="bundle-name">Bundle 1</h2>
            <h3 class="bundle-price">Rp 150.000</h3>
            <p class="bundle-desc">kaos + totebag + gelang + stiker</p>
          </div>
        </div>
        <div class="col-lg-6 px-4 my-4" data-aos="fade-up" data-aos-offset="100" data-aos-delay="500">
          <div class="bundle-container text-center d-flex flex-column align-items-center justify-content-center">
            <div class="bundle-picture">
              <img src="/img/merch/bundle2.png" alt="" class="bundle-img mb-3">
            </div>
            <h2 class="bundle-name">Bundle 2</h2>
            <h3 class="bundle-price">Rp 145.000</h3>
            <p class="bundle-desc">kaos + totebag + gantungan kunci + stiker</p>
          </div>
        </div>
        <div class="col-lg-6 px-4 my-4" data-aos="fade-up" data-aos-offset="100">
          <div class="bundle-container text-center d-flex flex-column align-items-center justify-content-center">
            <div class="bundle-picture">
              <img src="/img/merch/bundle3.png" alt="" class="bundle-img mb-3">
            </div>
            <h2 class="bundle-name">Bundle 3</h2>
            <h3 class="bundle-price">Rp 70.000</h3>
            <p class="bundle-desc">totebag + gelang + gantungan kunci + stiker</p>
          </div>
        </div>
        <div class="col-lg-6 px-4 my-4" data-aos="fade-up" data-aos-offset="100" data-aos-delay="500">
          <div class="bundle-container text-center d-flex flex-column align-items-center justify-content-center">
            <div class="bundle-picture">
              <img src="/img/merch/bundle4.png" alt="" class="bundle-img mb-3">
            </div>
            <h2 class="bundle-name">Bundle 4</h2>
            <h3 class="bundle-price">Rp 40.000</h3>
            <p class="bundle-desc">gelang + gantungan kunci + stiker</p>
          </div>
        </div>
      </div>
        <a href="https://intip.in/MerchandiseIFEM2022" target="_blank" class="bundle-button d-block mx-auto">Beli Sekarang!</a>
        <img src="/img/icon/outlined-ball.svg" class="bundle-bg" alt="">
    </div>
  </section>
  <!-- End of Bundling -->

@endsection