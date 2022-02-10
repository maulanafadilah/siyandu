{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Balita</a></li>
    </ol>
  </div>
  <!-- row -->
  
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
        {{ session('success') }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
  @endif

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Daftar Balita</h4>
          <div class="float-right">
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/balita/create'">Tambah Balita</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example-3" class="display min-w850">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal Lahir</th>
                  <th>Ibu</th>
                  <th>Ayah</th>
                  <th>Alamat (RT/RW)</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($balita as $balita)
                <tr>
                  <td>{{$balita->nik}}</td>
                  <td><a href="/balita/{{ $balita->id }}"><strong class="text-black">{{$balita->nama_lengkap}}</strong></a></td>
                  <td>{{$balita->tanggal_lahir}}</td>
                  <td>{{$balita->ibu}}</td>
                  <td>{{$balita->ayah}}</td>
                  <td>{{$balita->alamat}}</td>
                  <td>
                    <div class="d-flex">
                      <a href="/balita/{{$balita->id}}/edit" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <form action="/balita/{{$balita->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Apakah yakin ingin dihapus?')"><i class="fa fa-trash"></i></button>
                      </form>
                    </div>												
                  </td>												
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection