{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
        {{ session('success') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
        {{ session('loginError') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
  <div class="authincation-content">
      <div class="row no-gutters">
          <div class="col-xl-12" style="background-color: #F0F0F0;">
              <div class="auth-form">
                  <div class="text-center mb-3">
                    <a href="/"><img src="{{ asset('images/logo-babydaily-full-blue.png') }}" alt=""></a>
                  </div>
                  <h4 class="text-center mb-4 text-black">Masuk sebagai Kader Posyandu</h4>
                  <form action="/login" method="post">
                      @csrf
                      <div class="form-group">
                          <label class="mb-1 text-black"><strong>Nomor Telepon</strong></label>
                          <input type="text" class="form-control" placeholder="Nama Telepon Aktif" id="nomor_telepon" name="nomor_telepon" required>
                      </div>
                      <div class="form-group">
                          <label class="mb-1 text-black"><strong>Kata Sandi</strong></label>
                          <input type="password" class="form-control" placeholder="Kata Sandi" id="password" name="password" required>
                      </div>
                      <!-- <input type="hidden" id="role" name="role" value="Kader"> -->
                      <div class="form-row d-flex justify-content-between mt-4 mb-2">
                          <div class="form-group  ml-2">
                                <label class="text-secondary">Lupa Kata Sandi?</label>
                          </div>
                          <div class="form-group mr-2">
                              <a class="text-primary" href="{!! url('/page-forgot-password'); !!}">Ganti Kata Sandi</a>
                          </div>
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn bg-primary text-white btn-block">Masuk</button>
                      </div>
                  </form>
                  <div class="new-account mt-4">
                      <p class="text-black">Belum Punya Akun? <a class="text-primary" href="{!! url('/register'); !!}" >Daftar</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection