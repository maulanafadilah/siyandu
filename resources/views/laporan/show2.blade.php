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
          <h4 class="card-title">Laporan {{$laporan->tanggal_awal}} (-) {{$laporan->tanggal_akhir}}</h4>
          <div class="float-right">
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/balita/create'">Unduh Laporan</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered">
            <col>
            <colgroup span="2"></colgroup>
            <colgroup span="2"></colgroup>
            <tr>
              <td rowspan="3"></td>
              <th colspan="4" scope="colgroup">0-5Bln</th>
              <th colspan="4" scope="colgroup">6-11Bln</th>
              <th colspan="4" scope="colgroup">12-23Bln</th>
              <th colspan="4" scope="colgroup">24-59Bln</th>
              <th colspan="4" scope="colgroup">Total</th>
              <th colspan="4" scope="colgroup">Jumlah</th>
            </tr>
            <tr>
              <th colspan="2">Gakin</th>
              <th colspan="2">Non Gakin</th>
              <th colspan="2">Gakin</th>
              <th colspan="2">Non Gakin</th>
              <th colspan="2">Gakin</th>
              <th colspan="2">Non Gakin</th>
              <th colspan="2">Gakin</th>
              <th colspan="2">Non Gakin</th>
              <th colspan="2">Gakin</th>
              <th colspan="2">Non Gakin</th>
              <th colspan="2"></th>
            </tr>
            <tr>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col"></th>
            </tr>
            
            <tr>
              <th scope="row">S</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{$sj}}</td>
            </tr>
            <tr>
              <th scope="row">K</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{$sj}}</td>
            </tr>
            <tr>
              <th scope="row">N</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{$sj}}</td>
            </tr>
            <tr>
              <th scope="row">T</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{$sj}}</td>
            </tr>
            <tr>
              <th scope="row">D</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{$sj}}</td>
            </tr>

          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection