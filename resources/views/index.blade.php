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
                  @foreach ($posyandu as $psy)
                  <h3 class="mb-0 text-black font-w600">{{$psy->posyandu}}</h3>
                  @endforeach
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="53" fill="#E8D843" class="bi bi-balloon" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z"/>
                  </svg>
                </span>
                <div class="media-body ml-1">
                  <p class="mb-2">Balita</p>
                  <h3 class="mb-0 text-black font-w600">{{$balita}}</h3>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="51" height="52" fill="#2D899C" class="bi bi-journal-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                  </svg>
                </span>
                <div class="media-body ml-1">
                  <p class="mb-2">Secari</p>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0 mr-3 text-black font-w600">{{$kehadiran}}</h3>
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