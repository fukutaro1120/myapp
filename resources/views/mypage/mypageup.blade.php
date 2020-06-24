@extends('layouts.app')

@section('content')


<div class="container">
<div class="bg-rgba pt-5">
  <div class="row">
   
      @foreach($shops as $shop)

            <div class="card col-md-3 shadow mb-5 mx-4  p-1 ">
              <div class="img_wrap">
                  <a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}">
                    <img src="{{ asset('storage/image/'.$shop->image_path) }}" class="img-fluid d-block w-100">
                  </a>
              </div>

                  <div class="card-body">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-12 text-left pl-0">
                                <h5 class="card-title">
                                      <a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}">{{ $shop->shop_name }}
                                      </a>
                                  </h5>
                              </div>
                          </div>
                      </div>

                      <div class="container mb-4 pl-0">
                          <div class="row"></div>
                              <div class="col-md-12 text-left pl-0 ">
                                <h6 class="card-title">< {{ $shop->address }} ></h6>
                              </div>
                      </div>
                      <div class="container mb-1 pl-0">
                            <div class="row"></div>
                                <div class="col-md-12 text-left pl-0 ">
                                  <h6 class="card-title"> ・{{ $shop->category }} </h6>
                                </div>
                      </div>
                          
                      <div class="text-right">
                          <a href="{{ route('mypage.boardlist') . '?id=' . strval($shop->id) }}" class="btn btn-primary">掲示板</a>
                      </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
</div>


<link href="{{ asset('css/bak.css') }}" rel="stylesheet">

<link href="{{ asset('css/font.css') }}" rel="stylesheet">
@endsection