{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/posyandu">Posyandu</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Posyandu</a></li>
    </ol>
  </div>
  
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Formulir Tambah Posyandu</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
          <form class="form-valide" method="post" action="/posyandu/{{ $posyandu->id }}">
          @method('put')
            @csrf
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="posyandu">Nama Posyandu
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="posyandu" name="posyandu" value="{{$posyandu->posyandu}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="kode">Kode Registrasi
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="kode" name="kode" value="{{$posyandu->kode}}" required>
                    </div>
                  </div>                 
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