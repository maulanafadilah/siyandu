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
        <div class="card-header">
          <h4 class="card-title">Daftar Posyandu</h4>
          <div class="float-right">
            <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addPosyandu">Tambah Posyandu</a>
          </div>
        </div>
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
                  <th>Posyandu</th>
                  <th>Kode Registrasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($posyandu as $item)
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                      <label class="custom-control-label" for="customCheckBox2"></label>
                    </div>
                  </td>
                  <td>{{$item->posyandu}}</td>
                  <td>{{$item->kode}}</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/posyandu/{{$item->id}}/edit">Ubah</a>
                        <form action="/posyandu/{{$item->id}}" method="post">
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

@include('admin.posyandu.create')

@endsection