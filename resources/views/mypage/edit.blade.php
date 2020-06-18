@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row">

      <div class="col-md-3">
          <div class="card mb-3">
            <img src="{{ asset('storage/image/'.$shop->image_path) }}" class=" d-block w-100" alt="..."> 
          </div>
      </div>

      <div class="col-md-3">
          <div class="card mb-3">
            <img src="{{ asset('storage/image/'.$shop->image_path1) }}" class=" d-block w-100" alt="...">
          </div>
      </div>

      <div class="col-md-3">
          <div class="card mb-3">
            <img src="{{ asset('storage/image/'.$shop->image_path2) }}" class=" d-block w-100"alt="...">
          </div>
      </div>

      <div class="col-md-3">
          <div class="card mb-3" >
            <img src="{{ asset('storage/image/'.$shop->image_path3) }}" class=" d-block w-100" alt="...">
          </div>
      </div> 
    </div>
</div>

  <div class="container text-center pb-4">  
          <div class="row">
              <dt class="col-md-3 ">店舗名</dt>
              <dd class="col-md-9 ">{{ $shop->shop_name}}</dd>
              <dt class="col-sm-3">住所</dt>
              <dd class="col-sm-9">{{ $shop->address}}</dd>
              <dt class="col-sm-3">ジャンル</dt>
              <dd class="col-sm-9">{{ $shop->category}}</dd>            
              <dt class="col-sm-3">おすすめ料理</dt>
              <dd class="col-sm-9">{{ $shop->recommend}}</dd>
              <dt class="col-sm-3">お店の作り</dt>
          </div>
  </div>

       


<div class="container">
    <div class="row">
      <div class="col-7"></div>
        <div class="col--2">

    <!-- マイページへの追加 -->
            <form action="{{ action('MyPageController@mypageup') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                <input type="hidden" value="{{ $shop->id }}" name="shop_id">
                <input type="submit" class="btn btn-primary" value="マイページに追加">
            </form>
        </div>
    <!-- マイページ追加処理ここまで -->

    </div>
  </div>



  <!-- 以下アコーディオンスライダー用 -->
  <br>

  <style>
    .image_size_m{
      width: 450px;
      height: 450px;	
    }
  </style>

  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/accordion.css') }}">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('js/accordion.min.js') }}"></script>
  


    <div class="accordion mb-5">
          <li><img src="{{ asset('storage/image/'.$shop->image_path) }}" class="image_size_m "></li>
          <li><img src="{{ asset('storage/image/'.$shop->image_path1) }}" class="image_size_m "></li>
          <li><img src="{{ asset('storage/image/'.$shop->image_path2) }}" class="image_size_m " ></li>
          <li><img src="{{ asset('storage/image/'.$shop->image_path3) }}" class="image_size_m " ></li>
      </div>
  

      <script type="text/javascript">
          $('.accordion').accordion();
      </script>
      <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

      </script>


@endsection