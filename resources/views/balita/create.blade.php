{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Balita</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Balita</a></li>
    </ol>
  </div>
  
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Formulir Tambah Balita</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
          <form class="form-valide" method="post" action="/balita/">
            @csrf
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="nama_lengkap">Nama Lengkap
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="no_kk">No Kartu Keluarga
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="nik">NIK/No Akta
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                    <input type="text" class="form-control" id="mdate" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <select class="form-control default-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option>Pilih Salah Satu..</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="ibu">Ibu
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="ibu" name="ibu" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="ayah">Ayah
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="ayah" name="ayah" required>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="wali">Wali
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="wali" name="wali">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="alamat">Alamat (RT/RW)
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="berat_lahir">Berat Badan Saat Lahir (Kg)
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="berat_lahir" name="berat_lahir" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tinggi_lahir">Tinggi Badan Saat Lahir (cm)
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="tinggi_lahir" name="tinggi_lahir" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="keterangan">Keterangan
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                  </div>
                  <input type="hidden" id="posyandu" name="posyandu" value="{{auth()->user()->posyandu}}">
                  <div class="form-group row">
                    <div class="col-lg-8 mt-4">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection