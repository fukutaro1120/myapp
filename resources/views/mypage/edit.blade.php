@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="jumbotron jumbotron-fluid px-0">
        <div class="row">
            <div class="col-6">
                <div class="container m-5">      
                    <dl class="row">
                          <dt class="col-md-3 mb-4 h3">■店舗名:</dt>
                          <dd class="col-md-9 mb-4 h4">{{ $shop->shop_name}}</dd>
                          <dt class="col-md-3 mb-4 h3">■住所:</dt>
                          <dd class="col-md-9 mb-4 h4">{{ $shop->address}}</dd>
                          <dt class="col-md-3 mb-4 h3">■ジャンル:</dt>
                          <dd class="col-md-9 mb-4 h4">{{ $shop->category}}</dd>            
                          <dt class="col-md-3 mb-4 h3">■おすすめ:</dt>
                          <dd class="col-md-9 mb-4 h4">{{ $shop->recommend}}</dd>
                          <dt class="col-md-3 mb-4 h3">■店内:</dt>
                          <dd class="col-md-9 mb-4 h4">{{ $shop->interior}}</dd>
                          <!-- <dt class="col-sm-3">コメント</dt>
                          <dd class="col-sm-9"></dd>
                          <dt class="col-sm-3">店のURL</dt>
                          <dd class="col-sm-9"><a href="https://tabelog.com/tokyo/A1315/A131503/13163362/">https://tabelog.com/tokyo/A1315/A131503/13163362/</a></dd> --> 
                    </dl> 
                </div>
            </div>
            <div class="col-6 ">             
              <div id="foo" class="carousel slide shadow" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('storage/image/'.$shop->image_path) }}" class="img-fluid  ">
                    </div>
                    <div class="carousel-item">
                      <img src="/storage/img/sato06.jpg" class="img-fluid  ">
                    </div>
                    <div class="carousel-item">
                      <img src="/storage/img/sato09.jpg" class="img-fluid  ">
                    </div>
                        <a class="carousel-control-prev" href="#foo"data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#foo"data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                        <ol class="carousel-indicators">
                          <li data-target="#foo"data-slide-to="0"class="active"></li>
                          <li data-target="#foo"data-slide-to="1"></li>
                          <li data-target="#foo"data-slide-to="2"></li>
                        </ol>
                 </div>
              </div> 
            </div>
          </div>
        </div>      
  </div>



  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
          <div class="col-sm-2">
            <a href="pro.html">
              <button type="button" class="btn btn-outline-primary">マイページ追加</button>
            </a>
          </div>
      <div class="col-md-4">
          <a href="{{ route('mypage.evaluation') . '?id=' . strval($shop->id) }}">
             <button type="button" class="btn btn-outline-primary">評価入力</button>
          </a>
      </div>
    </div>
  </div>


@endsection