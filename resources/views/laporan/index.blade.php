{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Laporan</a></li>
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
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/laporan/create'">Buat Laporan</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example-3" class="display min-w850">
              <thead>
                <tr>
                  <th>Rentang Tanggal Kegiatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($laporan as $item)
                <tr>
                  <td>{{$item->tanggal_awal}} sampai {{$item->tanggal_akhir}}</td>
                  <td>
                    <div class="d-flex">
                      <a href="/laporan/{{$item->id}}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
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