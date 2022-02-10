{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Balita</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Balita</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Formulir Edit Balita</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
            <form class="form-valide" action="/balita/{{ $balita->id }}" method="post">
              @method('put')
              @csrf
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="nama_lengkap">Nama Lengkap
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" value="{{$balita->nama_lengkap}}" required>
                    </div>
                    @error('nama_lengkap')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="no_kk">No KK
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('no_kk') is-invalid @enderror" id="no_kk" name="no_kk" value="{{$balita->no_kk}}" required>
                    </div>
                    @error('no_kk')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="nik">NIK
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{$balita->nik}}" required>
                    </div>
                    @error('nik')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{$balita->tempat_lahir}}" required>
                    </div>
                    @error('tempat_lahir')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="2017-06-04" id="mdate" id="tanggal_lahir" name="tanggal_lahir" value="{{$balita->tanggal_lahir}}" required>
                    </div>
                    @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <select class="form-control default-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option>Pilih Salah Satu..</option>
                        <option value="L" {{ ( $balita->jenis_kelamin == 'L') ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ ( $balita->jenis_kelamin == 'P') ? 'selected' : '' }}>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="ibu">Ibu
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('ibu') is-invalid @enderror" id="ibu" name="ibu" value="{{ $balita->ibu}}" required>
                    </div>
                    @error('ibu')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="ayah">Ayah
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('ayah') is-invalid @enderror" id="ayah" name="ayah" value="{{$balita->ayah}}" required>
                    </div>
                    @error('ayah')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="wali">Wali
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('wali') is-invalid @enderror" id="wali" name="wali" value="{{$balita->wali}}">
                    </div>
                  </div>
                  @error('wali')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="alamat">Alamat (RT/RW)
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{$balita->alamat}}" required>
                    </div>
                    @error('alamat')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="berat_lahir">Berat Badan Saat Lahir (Kg)
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('berat_lahir') is-invalid @enderror" id="berat_lahir" name="berat_lahir" value="{{$balita->berat_lahir}}" required>
                    </div>
                    @error('berat_lahir')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tinggi_lahir">TInggi Badan Saat Lahir (cm)
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control @error('tinggi_lahir') is-invalid @enderror" id="tinggi_lahir" name="tinggi_lahir" value="{{$balita->tinggi_lahir}}" required>
                    </div>
                    @error('tinggi_lahir')
                            <div class="invalid-feedback">
                                Nomor Telepon yang dimasukkan salah
                            </div>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="keterangan">Keterangan
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$balita->keterangan}}">
                    </div>
                  </div>
                  <input type="hidden" id="posyandu" name="posyandu" value="{{$balita->posyandu}}">
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