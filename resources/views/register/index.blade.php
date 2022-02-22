{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">
        
  <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12" style="background-color: #F0F0F0;">
                <div class="auth-form">
                    <div class="text-center mb-3">
                      <a href="{!! url('/'); !!}"><img src="{{ asset('images/logo-rancatungku.png') }}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4 text-black">Pendaftaran Kader Posyandu</h4>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1 text-black"><strong>Nomor Telepon</strong></label>
                            <input type="text" class="form-control  @error('nomor_telepon') is-invalid @enderror" placeholder="Nomor Telepon Aktif" id="nomor_telepon" name="nomor_telepon" required>
                            @error('nomor_telepon')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-black"><strong>Nama Lengkap</strong></label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Nama Lengkap" id="nama_lengkap" name="nama_lengkap" required>
                            @error('nama_lengkap')
                            <div class="invalid-feedback">
                                Nama Lengkap perlu diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-black"><strong>Kata Sandi</strong></label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Kata Sandi" id="password" name="password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                Kata Sandi perlu diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-black"><strong>Posyandu</strong></label>
                            <!-- <input type="text" class="form-control @error('posyandu') is-invalid @enderror" placeholder="Pilih Posyandu" id="posyandu" name="posyandu" required> -->
                            <select class="form-control" id="posyandu" name="posyandu" required>
                                <option selected>Pilh Posyandu</option>
                                <option value="Angkasa Puri">Angkasa Puri</option>
                                <option value="Puspa Melati">Puspa Melati</option>
                                <option value="Mawar">Mawar</option>
                                <option value="Anggrek">Anggrek</option>
                                <option value="Bunga Melati">Bunga Melati</option>
                                <option value="Puspa Sari">Puspa Sari</option>
                                <option value="Melati">Melati</option>
                                <option value="Cempaka Sari">Cempaka Sari</option>
                                <option value="Dahlia Bungur">Dahlia Bungur</option>
                                <option value="Puspa Indah">Puspa Indah</option>
                                <option value="Nusa Indah">Nusa Indah</option>
                            </select>
                            @error('posyandu')
                            <div class="invalid-feedback">
                                Posyandu tidak ditemukan
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-black"><strong>Kode Registrasi</strong></label>
                            <input type="text" class="form-control @error('kode_registrasi') is-invalid @enderror" placeholder="Kode Registrasi" id="kode_registrasi" name="kode_registrasi" required>
                            @error('kode_registrasi')
                            <div class="invalid-feedback">
                                Kode Registrasi Salah
                            </div>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn bg-primary text-white btn-block">Daftar</button>
                        </div>
                        <input type="hidden" id="role" name="role" value="Kader">
                    </form>
                    <div class="new-account mt-3">
                        <p class="text-black">Sudah memiliki akun? <a class="text-primary" href="{!! url('/login'); !!}">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection