@extends('layouts.app')

@section('content')

<br>
<br>

<div class="container  mt-2">
  <div class="row text-center">
    <div class="col">
      <h2>『{{ $shop->shop_name}}の紹介ページ』</h2>
    </div>
  </div>
</div>

<!-- 拡大画像ここから -->
<div class="container mt-2 pt-3">
    <div class="row">

      <div class="col-md-3 ">
        <div class="img_wrap">
          <a href="{{ $shop->image_path }}" data-lightbox="group">
            <img src="{{ $shop->image_path }}" width="300">
          <!-- <a href=" asset('storage/image/'.$shop->image_path) " data-lightbox="group">
            <img src=" asset('storage/image/'.$shop->image_path) " width="300"> -->
          </a>
        </div>
     </div>

     <div class="col-md-3 ">
        <div class="img_wrap">
        <a href="{{ $shop->image_path1 }}" data-lightbox="group">
          <img src="{{ $shop->image_path1 }}" width="300">
        <!-- <a href=" asset('storage/image/'.$shop->image_path1) " data-lightbox="group">
          <img src=" asset('storage/image/'.$shop->image_path1) " width="300"> -->
        </a>
        </div>
     </div>

    <div class="col-md-3 ">
      <div class="img_wrap">
        <a href="{{ $shop->image_path2 }}" data-lightbox="group">
          <img src="{{ $shop->image_path2 }}" width="300">
        <!-- <a href=" asset('storage/image/'.$shop->image_path2) " data-lightbox="group">
          <img src=" asset('storage/image/'.$shop->image_path2) " width="300"> -->
        </a>
      </div>
    </div>

    <div class="col-md-3 ">
      <div class="img_wrap">
        <a href="{{ $shop->image_path3 }}" data-lightbox="group">
          <img src="{{ $shop->image_path3 }}" width="300">
        <!-- <a href=" asset('storage/image/'.$shop->image_path3) " data-lightbox="group">
          <img src=" asset('storage/image/'.$shop->image_path3) " width="300"> -->
        </a>
      </div> 
    </div> 

  </div>
</div>
<!-- 拡大画像ここまで -->

<!-- ここからメモ書き風 -->
<div class="container1 my-3 shadow p-5 bg-white border">
  <h3>飲musubiメモ</h3>

    <section class="alternate-layout alternate-layout--reverse">
        <div class="alternate-layout__img">
          <img src="{{ $shop->image_path }}" class=" d-block w-80" alt="...">
          <!-- <img src=" asset('storage/image/'.$shop->image_path) " class=" d-block w-80" alt="..."> -->
        </div>
        <div class="alternate-layout__detail">
              <h2 class="alternate-layout__heading"> 『{{ $shop->shop_name}}』</h2>
              <h5>・店名：{{ $shop->shop_name}}</h5>    
              <h5>・住所：{{ $shop->address}}</h5>    
        </div>
    </section>

    <section class="alternate-layout">
        <div class="alternate-layout__img"> 
          <img src="{{ $shop->image_path1 }}" class=" d-block w-80" alt="...">
          <!-- <img src=" asset('storage/image/'.$shop->image_path1) " class=" d-block w-80" alt="..."> -->
        </div>
        <div class="alternate-layout__detail">
              <h5>・ジャンル：{{ $shop->category}}</h5>
              <h5>・おすすめ：{{ $shop->recommend}}</h5>
        </div>
    </section>
</div>
<!-- ここまでメモ -->

<!-- 店詳細 -->
 <div class="container  my-3 font-weight-bold">
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">・店名：{{$shop->shop_name }}</li>
            <li class="list-group-item">・住所：{{ $shop->address }}</li>
            <li class="list-group-item">・ジャンル：{{ $shop->category }}</li>
            <li class="list-group-item">・おすすめ：{{$shop->recommend }}</li>
        </ul>
      </div>
    <div class="col-2"></div>
  </div>
</div> 
<!-- 詳細ここまで -->

<!-- マイページ追加ボタン -->
<div class="container">
    <div class="row">
      <div class="col-9"></div>
        <div class="col--2">
          @if ( count(Auth::user()->mypageups->where("shop_id", $shop->id)) != 0 )
            <form action="{{ action('MyPageController@mypageup_delete') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                <input type="hidden" value="{{ $shop->id }}" name="shop_id">
                <input type="submit" class="btn btn-primary" value="マイページから削除">
            </form>
          @else
            <form action="{{ action('MyPageController@mypageup') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                <input type="hidden" value="{{ $shop->id }}" name="shop_id">
                <input type="submit" class="btn btn-primary" value="マイページに追加">
            </form>
          @endif
        </div>
    </div>
  </div>
  <!-- 追加ボタンここまで -->

<br>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/accordion.css') }}">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{ asset('js/accordion.min.js') }}"></script>
  

<link href="{{ asset('css/font.css') }}" rel="stylesheet">
<link href="{{ asset('css/edit.css') }}" rel="stylesheet">

<!-- 画像拡大の確認用 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

@endsection