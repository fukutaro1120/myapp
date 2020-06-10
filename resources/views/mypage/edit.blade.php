@extends('layouts.app')

@section('content')

editです<br>
マイページ登録店舗の詳細画面を表示
<div class="container-fulid">
    <div class="jumbotron jumbotron-fluid px-0">
        <div class="row">
            <div class="col-6">
                <div class="container m-5">
                    <h2 class="h4 text-muted">居酒屋</h2>
                    <h1 class="display-4">海鮮居酒屋 里</h1>
                    
                </div>
            </div>
            <div class="col-6 ">             
              <div id="foo" class="carousel slide shadow" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/storage/img/sato06.jpg" class="d-block w-80">
                    </div>
                    <div class="carousel-item">
                      <img src="/storage/img/sato06.jpg" class="d-block w-80">
                    </div>
                    <div class="carousel-item">
                      <img src="/storage/img/sato09.jpg" class="d-block w-80">
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

        <div class="container pb-4">
          <dl class="row">
            <dt class="col-sm-3">店舗名</dt>
            <dd class="col-sm-9">海鮮居酒屋 里</dd>
            <dt class="col-sm-3">住所</dt>
            <dd class="col-sm-9">東京都大田区蒲田</dd>
            <dt class="col-sm-3">ジャンル</dt>
            <dd class="col-sm-9">和食</dd>            
            <dt class="col-sm-3">おすすめ料理</dt>
            <dd class="col-sm-9">お刺身</dd>
            <dt class="col-sm-3">お店の作り</dt>
            <dd class="col-sm-9">2フロア （１階はカウンター、2階はテーブル席）</dd>
            <dt class="col-sm-3">コメント</dt>
            <dd class="col-sm-9">リーズナブルに新鮮なお刺身が食べられます。</dd>
            <dt class="col-sm-3">店のURL</dt>
            <dd class="col-sm-9"><a href="https://tabelog.com/tokyo/A1315/A131503/13163362/">https://tabelog.com/tokyo/A1315/A131503/13163362/</a></dd>
            
          </dl>
        </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm8"></div>
          <div class="col-sm-2">
            <a href="pro.html">
              <button type="button" class="btn btn-outline-primary">マイページに追加</button>
            </a>
          </div>
      <div class="col-sm-2">
          <a href="pro.html">
             <button type="button" class="btn btn-outline-primary">マイページから削除</button>
          </a>
      </div>
    </div>
  </div>


@endsection