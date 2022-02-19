{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Blog</a></li>
    </ol>
  </div>
  
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Formulir Edit Blog</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
          <form class="form-valide" method="post" action="/blog/{{ $blog->id }}" enctype="multipart/form-data">
          @method('put')
            @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="judul">Judul
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="judul" name="judul" value="{{$blog->judul}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="tanggal">tanggal
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-10">
                      <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$blog->tanggal}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="penulis">penulis
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="penulis" name="penulis" value="{{$blog->penulis}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="isi">Isi
                    <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-10">
                      <input id="isi" type="hidden" name="isi" value="{{$blog->isi}}">
                      <trix-editor input="isi"></trix-editor>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="gambar">Gambar
                      <span class="text-info d-block">File sebelumnya: {{$blog->gambar}}</span>
                    </label>
                    <input type="hidden" name="oldImage" value="{{ $blog->gambar }}">
                    <div class="col-lg-10">
                      <input type="file" class="form-control custom-file-input" id="gambar" name="gambar">
                      <label class="custom-file-label">Choose file</label>
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