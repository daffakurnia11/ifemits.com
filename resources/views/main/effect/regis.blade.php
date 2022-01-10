@extends('main.layouts.main')

@section('particles')
  <div id="particles-js"></div>
@endsection

@section('navbar')
  @include('main.layouts.navbar')
@endsection

@section('content')

@if (session()->has('message'))
  <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
@endif
    
<section id="eventForm">
  <div class="container form">
    <div class="row align-items-center">
      <div class="col-lg-6 form-name d-flex flex-column justify-content-center">
        <h1 class="form-title text-center" data-aos="zoom-in">EFFECT</h1>
        <p class="form-subtitle text-center mx-auto" data-aos="zoom-in" data-aos-delay="250">Electric Formula Competition</p>
      </div>
      <div class="col-lg-6">
        <form action="/effect/registrasi" method="POST" class="form-container my-5 position-relative" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="500">
          @csrf
          <img src="../public/img/icon/four-hexa.svg" class="form-bgicon" alt="">
          <h2 class="form-head mb-4">Registrasi</h2>

          {{-- First Form --}}
          <div id="firstForm" class="position-relative" style="display: block;">
            <h3 class="form-subhead">Data Anggota 1 (Ketua)</h3>
            <div class="row">
              <div class="col-12">
                <div class="mt-1">
                  <label for="member1" class="form-label">Nama Anggota 1</label>
                  <input type="text" value="{{ old('member1') }}" name="member1" class="form-control @error('member1') is-invalid @enderror" id="member1" tabindex="1" autofocus>
                  @error('member1')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" tabindex="2">
                  @error('email')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="phone" class="form-label">No. Handphone</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">+62</span>
                    <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" tabindex="3">
                    @error('phone')
                    <div class="invalid-feedback mt-2">
                      <p class="mb-0">{{ $message }}</p>
                    </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="photo1" class="form-label">Upload Foto Formal (4x6)</label>
                  <input type="file" name="photo1" class="form-control @error('photo1') is-invalid @enderror" id="photo1" tabindex="4" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('photo1')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="identity1" class="form-label">Scan KTM</label>
                  <input type="file" name="identity1" class="form-control @error('identity1') is-invalid @enderror" id="identity1" tabindex="5" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('identity1')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="text-end mt-3">
              <button type="button" class="form-submit one-two" tabindex="9">Selanjutnya</button>
            </div>
          </div>
          {{-- End of First Form --}}

          {{-- Second Form --}}
          <div id="secondForm" class="position-relative" style="display: none;">
            <h3 class="form-subhead">Data Anggota 2</h3>
            <div class="row">
              <div class="col-12">
                <div class="mt-1">
                  <label for="member2" class="form-label">Nama Anggota 2</label>
                  <input type="text" value="{{ old('member2') }}" name="member2" class="form-control @error('member2') is-invalid @enderror" id="member2" tabindex="6">
                  @error('member2')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="photo2" class="form-label">Upload Foto Formal (4x6)</label>
                  <input type="file" name="photo2" class="form-control @error('photo2') is-invalid @enderror" id="photo2" tabindex="7" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('photo2')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="identity2" class="form-label">Scan KTM</label>
                  <input type="file" name="identity2" class="form-control @error('identity2') is-invalid @enderror" id="identity2" tabindex="8" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('identity2')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <h3 class="form-subhead mt-4">Data Anggota 3</h3>
            <div class="row">
              <div class="col-12">
                <div class="mt-1">
                  <label for="member3" class="form-label">Nama Anggota 3</label>
                  <input type="text" value="{{ old('member3') }}" name="member3" class="form-control @error('member3') is-invalid @enderror" id="member3" tabindex="6">
                  @error('member3')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="photo3" class="form-label">Upload Foto Formal (4x6)</label>
                  <input type="file" name="photo3" class="form-control @error('photo3') is-invalid @enderror" id="photo3" tabindex="7" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('photo3')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="identity3" class="form-label">Scan KTM</label>
                  <input type="file" name="identity3" class="form-control @error('identity3') is-invalid @enderror" id="identity3" tabindex="8" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('identity3')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="d-flex flex-row-reverse justify-content-between mt-3">
              <button type="button" class="form-submit two-three" tabindex="9">Selanjutnya</button>
              <button type="button" class="form-submit two-one" tabindex="15">Sebelumnya</button>
            </div>
          </div>
          {{-- End of Second Form --}}

          {{-- Third Form --}}
          <div id="thirdForm" class="position-relative" style="display: none;">
            <h3 class="form-subhead">Data Anggota 4</h3>
            <div class="row">
              <div class="col-12">
                <div class="mt-1">
                  <label for="member4" class="form-label">Nama Anggota 4</label>
                  <input type="text" value="{{ old('member4') }}" name="member4" class="form-control @error('member4') is-invalid @enderror" id="member4" tabindex="6">
                  @error('member4')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="photo4" class="form-label">Upload Foto Formal (4x6)</label>
                  <input type="file" name="photo4" class="form-control @error('photo4') is-invalid @enderror" id="photo4" tabindex="7" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('photo4')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="identity4" class="form-label">Scan KTM</label>
                  <input type="file" name="identity4" class="form-control @error('identity4') is-invalid @enderror" id="identity4" tabindex="8" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('identity4')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <h3 class="form-subhead mt-4">Data Anggota 5</h3>
            <div class="row">
              <div class="col-12">
                <div class="mt-1">
                  <label for="member5" class="form-label">Nama Anggota 5</label>
                  <input type="text" value="{{ old('member5') }}" name="member5" class="form-control @error('member5') is-invalid @enderror" id="member5" tabindex="6">
                  @error('member5')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="photo5" class="form-label">Upload Foto Formal (4x6)</label>
                  <input type="file" name="photo5" class="form-control @error('photo5') is-invalid @enderror" id="photo5" tabindex="7" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('photo5')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="identity5" class="form-label">Scan KTM</label>
                  <input type="file" name="identity5" class="form-control @error('identity5') is-invalid @enderror" id="identity5" tabindex="8" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('identity5')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="d-flex flex-row-reverse justify-content-between mt-3">
              <button type="button" class="form-submit three-four" tabindex="9">Selanjutnya</button>
              <button type="button" class="form-submit three-two" tabindex="15">Sebelumnya</button>
            </div>
          </div>
          {{-- End of Third Form --}}

          {{-- Fourth Form --}}
          <div id="fourthForm" class="position-relative" style="display: none;">
            <div class="row">
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="team" class="form-label">Nama Kelompok/Tim</label>
                  <input type="text" value="{{ old('team') }}" name="team" class="form-control @error('team') is-invalid @enderror" id="team" tabindex="10">
                  @error('team')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="collage" class="form-label">Perguruan Tinggi</label>
                  <input type="text" value="{{ old('collage') }}" name="collage" class="form-control @error('collage') is-invalid @enderror" id="collage" tabindex="11">
                  @error('collage')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="proposal" class="form-label">Upload Proposal</label>
                  <input type="file" name="proposal" class="form-control @error('proposal') is-invalid @enderror" id="proposal" tabindex="12" accept=".pdf">
                  <small class="d-block my-2 text-warning">Format: .pdf max 5MB</small>
                  @error('proposal')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-12 col-xxl-6 col-md-6">
                <div class="mt-3">
                  <label for="payment" class="form-label">Upload Bukti Pembayaran</label>
                  <input type="file" name="payment" class="form-control @error('payment') is-invalid @enderror" id="payment" tabindex="13" accept=".jpg,.jpeg,.png">
                  <small class="d-block my-2 text-warning">Format: .jpg, .jpeg, .png max 1MB</small>
                  @error('payment')
                  <div class="invalid-feedback mt-2">
                    <p class="mb-0">{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="d-flex flex-row-reverse justify-content-between mt-3">
              <button type="submit" class="form-submit" tabindex="9">Daftar</button>
              <button type="button" class="form-submit four-three" tabindex="15">Sebelumnya</button>
            </div>
          </div>
          {{-- End of Fourth Form --}}
        </form>
      </div>
    </div>
  </div>
</section> 

@endsection