{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/laporan">Laporan</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail Laporan</a></li>
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
          <h4 class="card-title">Detail laporan</h4>
          <div class="float-right">
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/laporan/create'">Unduh Laporan</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example-3" class="display min-w850">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>NIK</th>
                  <th>Nama Anak</th>
                  <th>Usia</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>NTOB</th>
                  <th>Imunisasi</th>
                  <th>Ket</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($laporan as $kehadiran)
                <tr>
                  <td>{{$kehadiran->tanggal}}</td>
                  <td>{{$kehadiran->nik}}</td>
                  <td>{{$kehadiran->nama_lengkap}}</td>
                  <td>{{$kehadiran->usia}}</td>
                  <td>{{$kehadiran->tinggi}}</td>
                  <td>{{$kehadiran->berat}}</td>
                  <td>{{$kehadiran->ntob}}</td>
                  <td>{{$kehadiran->imunisasi}}</td>
                  <td>{{$kehadiran->keterangan}}</td>					
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