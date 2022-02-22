{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/balita">Balita</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="profile card card-body px-3 pt-3 pb-0">
        <div class="profile-head">
          <div class="photo-content">
            <div class="cover-photo"></div>
          </div>
          <div class="profile-info">
            <div class="profile-photo">
              <img src="{{ asset('images/profile/profile.jpg') }}" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="profile-details">
              <div class="profile-name px-3 pt-2">
                <h4 class="text-primary mb-0">{{$balita->nama_lengkap}}</h4>
                <p>{{$balita->nik}}</p>
              </div>
              
                <!-- <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-item">
                    <form action="/balita/{{$balita->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn tp-btn" onclick="return confirm('Apakah yakin ingin dihapus?')"><i class="fa fa-trash text-danger mr-2"></i> Hapus</button>
                    </form>
                  </li>
                </ul> -->
              <div class="col-lg-10 d-flex justify-content-end">
              <div class="p-2">
                <button class="btn light btn-sm btn-secondary" onclick="window.location.href='/balita/{{$balita->id}}/edit'""><i class="fa fa-pencil mr-2"></i> Edit</button>
              </div>
              <div class="p-2">
                    <form action="/balita/{{$balita->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn light btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin dihapus?')"><i class="fa fa-trash mr-2"></i> Hapus</button>
                    </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="profile-tab">
            <div class="custom-tab-1">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#biodata" data-toggle="tab" class="nav-link  active show">Biodata</a>
                </li>
                <li class="nav-item"><a href="#perkembangan" data-toggle="tab" class="nav-link ">Perkembangan</a>
                </li>
                <li class="nav-item"><a href="#kehadiran" data-toggle="tab" class="nav-link ">Kehadiran</a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="biodata" class="tab-pane fade active show">
                  <div class="profile-personal-info">
                    <h4 class="text-primary mb-4 mt-4">Informasi Data Diri</h4>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">No KK <span class="pull-right">:</span>
                        </h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->no_kk}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Nama Lengkap<span class="pull-right">:</span>
                        </h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->nama_lengkap}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">NIK <span class="pull-right">:</span>
                        </h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->nik}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Tempat Lahir <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->tempat_lahir}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Tanggal Lahir <span class="pull-right">:</span>
                        </h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->tanggal_lahir}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->jenis_kelamin}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Ibu <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->ibu}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Ayah <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->ayah}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Wali <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->wali}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Alamat <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->alamat}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Berat Saat Lahir (KG)<span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->berat_lahir}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Tinggi Saat Lahir (CM)<span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->tinggi_lahir}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Keterangan <span class="pull-right">:</span></h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$balita->keterangan}}</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="perkembangan" class="tab-pane fade">
                  <div class="profile-about-me">
                    <div class="pt-4 border-bottom-1 pb-3">
                      <h4 class="text-primary">Perkembangan</h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">KMS</h4>
                      </div>
                      <div class="card-body">
                        {{-- <div id="line-chart-tooltips" class="ct-chart ct-golden-section chartlist-chart"></div> --}}
                        @include('balita.line_chart')
                      </div>
                    </div>
                  </div>
                </div>
                <div id="kehadiran" class="tab-pane fade">
                  <div class="pt-4">
                    
                      <h4 class="text-primary">Kehadiran</h4>
                      
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
                                    <th>Tanggal</th>
                                    <th>Usia</th>
                                    <th>Tinggi</th>
                                    <th>Berat</th>
                                    <th>NTOB</th>
                                    <th>Imunisasi</th>
                                    <th>Ket</th>
                                    <th>Aksi</th>
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
                                    <td>{{$kehadiran->tanggal}}</td>
                                    <td>{{$kehadiran->usia}}</td>
                                    <td>{{$kehadiran->tinggi}}</td>
                                    <td>{{$kehadiran->berat}}</td>
                                    <td>{{$kehadiran->ntob}}</td>
                                    <td>{{$kehadiran->imunisasi}}</td>
                                    <td>{{$kehadiran->ket}}</td>
                                    <td>
                                      <div class="d-flex">
                                        <a href="/kehadiran/{{$kehadiran->id}}/edit" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <form action="/kehadiran/{{$kehadiran->id}}" method="post">
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
        </div>
      </div>
    </div>
  </div>
</div>

@endsection			
