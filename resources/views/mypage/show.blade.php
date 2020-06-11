@extends('layouts.app')

@section('content')

showです<br>
登録店舗一覧の表示


<div class="container 
center">
  <div class="row">
      @foreach($shops as $shop)
            <div class="card col-md-3 shadow my-4">
                  <a href="#">
                    <img src="{{ asset('storage/image/'.$shop->image_path) }}" class="img-fluid  d-block w-100">
                  </a>
              <div class="card-body">
                    <h3 class="card-title">
                      <a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}" class="text-dark">{{ $shop->shop_name }}</a>
                    </h3>
                     <h5 class="card-subtitle text-secondary">{{ $shop->category }}</h5>
              </div>
            </div>
      @endforeach
    </div>
</div>
@endsection