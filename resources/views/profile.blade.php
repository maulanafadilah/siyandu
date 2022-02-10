{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
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
              <img src="{{ asset('images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="profile-details">
              <div class="profile-name px-3 pt-2">
                <h4 class="text-primary mb-0">Mitchell C. Shay</h4>
                <p>6701191022</p>
              </div>
              <div class="dropdown ml-auto">
                <a href="#" class="btn btn-secondary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-item"><i class="fa fa-pencil text-info mr-2"></i> Ganti Password</li>
                </ul>
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
                <li class="nav-item"><a href="#datadiri" data-toggle="tab" class="nav-link  active show">Informasi Data Diri</a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="datadiri" class="tab-pane fade active show">
                  <div class="profile-personal-info">
                    <h4 class="text-primary mb-4 mt-4">Personal Information</h4>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Nama Lengkap<span class="pull-right">:</span>
                        </h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$user->nama_lengkap}}</span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-3 col-5">
                        <h5 class="f-w-500">Nomor Telepon <span class="pull-right">:</span>
                        </h5>
                      </div>
                      <div class="col-sm-9 col-7"><span>{{$user->nomor_telepon}}</span>
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
</div>

@endsection			