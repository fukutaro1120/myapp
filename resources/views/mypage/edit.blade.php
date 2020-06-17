@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row">

      <div class="col-md-3">
          <div class="card mb-3">
            <img src="{{ asset('storage/image/'.$shop->image_path) }}" class="img-thumbnail d-block w-100" alt="..."> 
          </div>
      </div>

      <div class="col-md-3">
          <div class="card mb-3">
            <img src="{{ asset('storage/image/'.$shop->image_path1) }}" class="img-thumbnail d-block w-100" alt="...">
          </div>
      </div>

      <div class="col-md-3">
          <div class="card mb-3">
            <img src="{{ asset('storage/image/'.$shop->image_path2) }}" class="img-thumbnail d-block w-100"alt="...">
          </div>
      </div>

      <div class="col-md-3">
          <div class="card mb-3" >
            <img src="{{ asset('storage/image/'.$shop->image_path3) }}" class="img-thumbnail d-block w-100" alt="...">
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
            <!-- <dd class="col-sm-9">{{ $shop->interior}}</dd>
            <dt class="col-sm-3">コメント</dt>
            <dd class="col-sm-9">リーズナブルに新鮮なお刺身が食べられます。</dd>
            <dt class="col-sm-3">店のURL</dt>
            <dd class="col-sm-9"><a href="https://tabelog.com/tokyo/A1315/A131503/13163362/">https://tabelog.com/tokyo/A1315/A131503/13163362/</a></dd>
             -->
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
        <!-- <div class="col-3">
          <a href="{{ route('mypage.evaluation') . '?id=' . strval($shop->id) }}">
            <button type="button" class="btn btn-outline-primary">掲示板へコメント</button>
          </a>
        </div> -->
    </div>
</div>


@endsection