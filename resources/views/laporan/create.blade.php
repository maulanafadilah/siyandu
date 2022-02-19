{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Buat Laporan</a></li>
    </ol>
  </div>
  
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pilih Tanggal</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
          <form class="form-valide" method="post" action="/laporan/">
            @csrf
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tanggal_awal">Tanggal Awal
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <!-- <div class="example"> -->
                      <input type="text" class="form-control" name="tanggal_awal" id="mdate">
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tanggal_akhir">Tanggal Akhir
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <!-- <div class="example"> -->
                      <input type="text" class="form-control" name="tanggal_akhir" id="mdate2">
                      <!-- </div> -->
                    </div>
                    <input type="hidden" name="posyandu" value="{{auth()->user()->posyandu}}">
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-8 mt-4">
                      <button type="submit" class="btn btn-primary">Buat</button>
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