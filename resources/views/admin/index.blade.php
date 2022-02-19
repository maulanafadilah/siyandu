{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">

  <div class="row">
    <div class="col-xl-9 col-xxl-12">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="53" fill="#E872A3" class="bi bi-house-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207l-5-5-5 5V13.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7.207Zm-5-.225C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z"/>
                  </svg>
                </span>
                <div class="media-body ml-1">
                  <p class="mb-2">Posyandu</p>
                  <h3 class="mb-0 text-black font-w600">{{$posyandu}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="53" fill="#E8D843" class="bi bi-person-badge" viewBox="0 0 16 16">
                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                  </svg>
                </span>
                <div class="media-body ml-1">
                  <p class="mb-2">Kader</p>
                  <h3 class="mb-0 text-black font-w600">{{$kader}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="#2D899C" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                  </svg>
                </span>
                <div class="media-body ml-1">
                  <p class="mb-2">Orang Tua</p>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0 mr-3 text-black font-w600">{{$ortu}}</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0 pb-sm-0 pb-5">
              <h4 class="fs-20">Blog Terkini</h4>
              <div class="dropdown custom-dropdown mb-0">
                <div data-toggle="dropdown">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12.9999C12.5523 12.9999 13 12.5522 13 11.9999C13 11.4477 12.5523 10.9999 12 10.9999C11.4477 10.9999 11 11.4477 11 11.9999C11 12.5522 11.4477 12.9999 12 12.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5.99994C12.5523 5.99994 13 5.55222 13 4.99994C13 4.44765 12.5523 3.99994 12 3.99994C11.4477 3.99994 11 4.44765 11 4.99994C11 5.55222 11.4477 5.99994 12 5.99994Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 19.9999C12.5523 19.9999 13 19.5522 13 18.9999C13 18.4477 12.5523 17.9999 12 17.9999C11.4477 17.9999 11 18.4477 11 18.9999C11 19.5522 11.4477 19.9999 12 19.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="event-bx owl-carousel">
              @foreach ($blog as $item)
                <div class="items">
                  <div class="image-bx">
                    <img src="{{asset('storage/'.$item->gambar)}}" alt="">
                    <div class="info">
                      <p class="fs-18 font-w600"><a href="{!! url('#'); !!}" class="text-black">{{$item->judul}}</a></p>
                      <span class="fs-14 text-black d-block mb-3">{{$item->tanggal}}</span>
                      <!-- <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p> -->
                      <!-- <ul>
                        <li><i class="las la-dollar-sign"></i>$124,00</li>
                        <li><i class="las la-calendar"></i>June 20, 2020</li>
                        <li><i class="fa fa-ticket"></i>561 pcs</li>
                        <li><i class="las la-clock"></i>08:35 AM</li>
                      </ul> -->
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
    </div>
  </div>
</div>

@endsection			