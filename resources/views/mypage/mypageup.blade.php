@extends('layouts.app')

@section('content')

マイページ一覧画面です


<div class="container mt-5">
  <div class="row">
      @foreach($shops as $shop)
            <div class="card col-md-3 shadow mb-5 p-0 m-0 ">
                <img src="{{ asset('storage/image/'.$shop->image_path) }}" class="img-fluid d-block w-100 ">
                  <div class="card-body">

                      <div class="container mb-3">
                          <div class="row">
                              <div class="col-sm-6">
                                <h5 class="font-weight-bold">店名</h5>
                              </div>
                              <div class="col-sm-6">
                                <h6 class="card-title">{{ $shop->shop_name }}</h6>
                              </div>
                          </div>
                      </div>

                      <div class="container mb-3">
                          <div class="row">
                              <div class="col-sm-6">
                                <h5 class="font-weight-bold">ジャンル</h5>
                              </div>
                              <div class="col-6">
                                <h6 class="card-title">{{ $shop->category }}</h6>
                              </div>
                          </div>
                      </div>

                      <div class="container mb-4">
                          <div class="row">
                              <div class="col-sm-6">
                                <h5 class="font-weight-bold">住所</h5>
                              </div>
                              <div class="col-sm-6">
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
<link href="{{ asset('css/bak.css') }}" rel="stylesheet">
@endsection