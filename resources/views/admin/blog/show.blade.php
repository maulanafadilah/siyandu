{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/blog">Blog</a></li>
						<li class="breadcrumb-item active"><a href="#">Detail Blog</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
								<div class="post-details">
									<h3 class="mb-2 text-black">{{$blog->judul}}</h3>
									<ul class="mb-4 post-meta d-flex flex-wrap">
										<li class="post-author mr-3">{{$blog->penulis}}</li>
										<li class="post-date mr-3"><i class="fa fa-calender"></i> {{$blog->tanggal}}</li>
									</ul>
									<img src="{{asset('storage/'.$blog->gambar)}}" alt="" class="img-fluid mb-3 mx-auto d-block">
									<p>{!! $blog->isi !!}</p>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection			