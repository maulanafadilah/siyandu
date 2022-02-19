{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-5">
    <div class="form-input-content text-center error-page">
        <h1 class="error-text  font-weight-bold">403</h1>
        <h4><i class="fa fa-times-circle text-danger"></i> Forbidden Error!</h4>
        <p>Anda tidak memiliki izin untuk mengakses halaman ini</p>
        <div>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Kembali</button>
            </form>
        </div>
    </div>
</div>
@endsection