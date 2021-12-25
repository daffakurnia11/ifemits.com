@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('content')
    
<section id="eventForm">
  <div class="container form">
    <div class="row align-items-center">
      <div class="col-lg-6 form-name d-flex flex-column justify-content-center">
        <h1 class="form-title text-center" data-aos="zoom-in">Pameran</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Exhibitor and Food & Beverages</p>
      </div>
      <div class="col-lg-6">
        <div class="form-container" data-aos="zoom-in" data-aos-delay="500">
          <h2 class="form-head mb-3">Exhibitor</h2>
          <p class="form-desc">Calling out all Exhibitors!!! Bagi kalian yang memiliki karya dalam bidang
            Electric
            Vehicle yang ingin
            ditampilkan di IFEM Exhibition and Closing Ceremony dapat mengisi form pendaftaran di bawah ini. Atau
            dapat menghubungi contact person kami</p>
          <div class="text-start mt-4">
            <a href="/exhibitor" class="form-submit d-block my-4" tabindex="11">Daftar</a>
          </div>
          <h2 class="form-head mb-3 mt-5">Food and Beverages</h2>
          <p class="form-desc">Calling out all food and beverages tenants!!! Bagi kalian yang memiliki bisnis
            kuliner dan ingin mendirikan stand di IFEM Exhibition and Closing Ceremony dapat mengisi form pendaftaran
            dibawah ini atau dapat menghubungi contact person kami.</p>
          <div class="text-start mt-4">
            <a href="/food-and-beverage" class="form-submit d-block my-4" tabindex="11">Daftar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection