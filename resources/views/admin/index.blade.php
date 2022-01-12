@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Hello, {{ auth()->user()->name }}</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li> --}}
          <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-house-door"></i> Dashboard</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Overview</h6>
  <hr>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-6">
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Short Links</p>
              <h4 class="mb-0 text-primary">{{ $links }}</h4>
            </div>
            <div class="ms-auto fs-2 text-primary">
              <i class="bi bi-link-45deg"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($link_inc > 0)
              <span class="text-success">+{{ $link_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $link_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Visitor</p>
              <h4 class="mb-0 text-danger">{{ $visitors }}</h4>
            </div>
            <div class="ms-auto fs-2 text-danger">
              <i class="bi bi-person-plus-fill"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($visitor_inc > 0)
              <span class="text-success">+{{ $visitor_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $visitor_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">IF-WEB</p>
              <h4 class="mb-0 text-success">{{ $webinars }}</h4>
            </div>
            <div class="ms-auto fs-2 text-success">
              <i class="bi bi-easel"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($webinar_inc > 0)
              <span class="text-success">+{{ $webinar_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $webinar_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">MSM</p>
              <h4 class="mb-0 text-warning">{{ $competitions }}</h4>
            </div>
            <div class="ms-auto fs-2 text-warning">
              <i class="bi bi-journal-text"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($competition_inc > 0)
              <span class="text-success">+{{ $competition_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $competition_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Exhibitor IECC</p>
              <h4 class="mb-0 text-secondary">{{ $exhibitors }}</h4>
            </div>
            <div class="ms-auto fs-2 text-secondary">
              <i class="bi bi-cast"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($exhibitor_inc > 0)
              <span class="text-success">+{{ $exhibitor_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $exhibitor_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Food & Beverage IECC</p>
              <h4 class="mb-0 text-info">{{ $sellers }}</h4>
            </div>
            <div class="ms-auto fs-2 text-info">
              <i class="bi bi-shop"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($seller_inc > 0)
              <span class="text-success">+{{ $seller_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $seller_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
  </div><!--end row-->

  <div class="row row-cols-1 row-cols-md-3">
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
                <p class="mb-0 text-secondary">Total Pembelian Tiket</p>
                <h4 class="my-1">{{ $guests }}</h4>
                @if ($guest_inc > 0)
                  <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> +{{ $guest_inc }} dari kemarin</p>
                @else
                  <p class="mb-0 font-13 text-warning">{{ $guest_inc }}</p>
                @endif
            </div>
            <div class="widget-icon-large bg-gradient-purple text-white ms-auto">
              <i class="bi bi-person-fill"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
                <p class="mb-0 text-secondary">Bundle 3</p>
                <h4 class="my-1">{{ $ticket_3 }}</h4>
                @if ($ticket_3_inc > 0)
                  <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> +{{ $ticket_3_inc }} pemesan dari kemarin</p>
                @else
                  <p class="mb-0 font-13 text-warning">{{ $ticket_3_inc }}</p>
                @endif
            </div>
            <div class="widget-icon-large bg-gradient-success text-white ms-auto">
              <i class="bi bi-ticket-detailed"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
                <p class="mb-0 text-secondary">Bundle 2</p>
                <h4 class="my-1">{{ $ticket_2 }}</h4>
                @if ($ticket_2_inc > 0)
                  <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> +{{ $ticket_2_inc }} pemesan dari kemarin</p>
                @else
                  <p class="mb-0 font-13 text-warning">{{ $ticket_2_inc }}</p>
                @endif
            </div>
            <div class="widget-icon-large bg-gradient-info text-white ms-auto">
              <i class="bi bi-ticket-perforated"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end row-->

  <h6 class="mb-0 text-uppercase">Web Visitor</h6>
  <hr/>
  <div class="row">
    {{-- Visitor Chart --}}
    <div class="col-12 col-xl-8">
      <div class="card">
        <div class="card-body">
          <div id="visitorChart"></div>
        </div>
      </div>
    </div>
    {{-- Visitor Counter --}}
    <div class="col-12 col-xl-4 d-flex">
      <div class="card radius-10 w-100 overflow-hidden">
        <div class="card-body">
          <p>Visitor Counter</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                 <div>Desember 2021</div>
                 <div class="ms-auto" id="DecCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Januari 2022</div>
                <div class="ms-auto" id="JanCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Februari 2022</div>
                <div class="ms-auto" id="FebCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Maret 2022</div>
                <div class="ms-auto" id="MarCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>April 2022</div>
                <div class="ms-auto" id="AprCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Mei 2022</div>
                <div class="ms-auto" id="MayCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Juni 2022</div>
                <div class="ms-auto" id="JunCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Juli 2022</div>
                <div class="ms-auto" id="JulCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Agustus 2022</div>
                <div class="ms-auto" id="AugCounter"></div>
             </div>
           </li>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>September 2022</div>
                <div class="ms-auto" id="SepCounter"></div>
             </div>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>Oktober 2022</div>
                <div class="ms-auto" id="OctCounter"></div>
             </div>
           <li class="list-group-item">
             <div class="d-flex align-items-center gap-2">
                <div>November 2022</div>
                <div class="ms-auto" id="NovCounter"></div>
             </div>
           </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  
@endsection