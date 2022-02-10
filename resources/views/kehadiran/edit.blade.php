{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/kehadiran">Secari</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Secari</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Formulir Edit Secari</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
            <form class="form-valide" action="/kehadiran/{{ $kehadiran->id }}" method="post">
              @method('put')
              @csrf
              <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                      <label class="text-black font-w500">NIK</label>
                      <input type="text" class="form-control" name="nik" value="{{$kehadiran->nik}}" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" value="{{$kehadiran->tanggal}}" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" value="{{$kehadiran->nama_lengkap}}" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Usia (BL)</label>
                      <input type="text" class="form-control" name="usia" value="{{$kehadiran->usia}}" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Tinggi (CM)</label>
                      <input type="text" class="form-control" name="tinggi" value="{{$kehadiran->tinggi}}" required>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                      <label class="text-black font-w500">Berat (KG)</label>
                      <input type="text" class="form-control" name="berat" value="{{$kehadiran->berat}}" required>
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">NTOB</label>
                      <input type="text" class="form-control" name="ntob" value="{{$kehadiran->ntob}}">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Imunisasi</label>
                      <input type="text" class="form-control" name="imunisasi" value="{{$kehadiran->imunisasi}}">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Ket</label>
                      <input type="text" class="form-control" name="keterangan" value="{{$kehadiran->keterangan}}">
                    </div>
                    <input type="hidden" name="posyandu" value="{{$kehadiran->posyandu}}">
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