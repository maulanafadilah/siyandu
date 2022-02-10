{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Secari</a></li>
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
  <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="example-5" class="display min-w850">
              <thead>
                <tr>
                  <th>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                      <label class="custom-control-label" for="checkAll"></label>
                    </div>
                  </th>
                  <th>NIK</th>
                  <th>Tanggal</th>
                  <th>Nama Anak</th>
                  <th>Usia</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>NTOB</th>
                  <th>Imunisasi</th>
                  <th>Ket</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kehadiran as $kehadiran)
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                      <label class="custom-control-label" for="customCheckBox2"></label>
                    </div>
                  </td>
                  <td>{{$kehadiran->nik}}</td>
                  <td>{{$kehadiran->tanggal}}</td>
                  <td>{{$kehadiran->nama_lengkap}}</td>
                  <td>{{$kehadiran->usia}}</td>
                  <td>{{$kehadiran->tinggi}}</td>
                  <td>{{$kehadiran->berat}}</td>
                  <td>{{$kehadiran->ntob}}</td>
                  <td>{{$kehadiran->imunisasi}}</td>
                  <td>{{$kehadiran->keterangan}}</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/kehadiran/{{$kehadiran->id}}/edit">Ubah</a>
                        <form action="/kehadiran/{{$kehadiran->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="dropdown-item" onclick="return confirm('Apakah yakin ingin dihapus?')">Hapus</button>
                        </form>
                      </div>
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