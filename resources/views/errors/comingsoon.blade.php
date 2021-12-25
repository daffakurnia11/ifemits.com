@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('content')
    
<section id="emptyState" class="d-flex justify-content-center flex-column">
  <img src="/img/icon/four-hexa.svg" class="state-icon1" alt="">
  <img src="/img/icon/landing-teaser.png" class="state-icon2" alt="">
  <img src="/img/logo-name.png" class="state-logo" alt="">
  <div class="container state">
    <h1 class="state-title text-md-start text-center" data-aos="fade-up">Coming Soon</h1>
  </div>
</section>

@endsection