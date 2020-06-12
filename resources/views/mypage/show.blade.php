@extends('layouts.app')

@section('content')

showです<br>
登録店舗一覧の表示


<div class="container">
  <div class="row">
      @foreach($shops as $shop)
            <div class="card col-md-4 shadow mb-5 ">
                <img src="{{ asset('storage/image/'.$shop->image_path) }}" class="img-fluid  d-block w-100">
                  <div class="card-body">

                      <div class="container mb-3">
                          <div class="row">
                              <div class="col-4">
                                <h6>店名:</h6>
                              </div>
                              <div class="col-8">
                                <h5 class="card-title">{{ $shop->shop_name }}</h5>
                              </div>
                          </div>
                      </div>

                      <div class="container mb-3">
                          <div class="row">
                              <div class="col-4">
                                <h6>ジャンル:</h6>
                              </div>
                              <div class="col-8">
                                <h6 class="card-title">{{ $shop->category }}</h6>
                              </div>
                          </div>
                      </div>

                      <div class="container mb-4">
                          <div class="row">
                              <div class="col-4">
                                <h6>住所:</h6>
                              </div>
                              <div class="col-8">
                                <h6 class="card-title">{{ $shop->address }}</h6>
                              </div>
                          </div>
                      </div>
                          
                      <div class="text-right">
                          <a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}" class="btn btn-primary">詳細</a>
                      </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection