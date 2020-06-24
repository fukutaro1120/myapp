@extends('layouts.app')

@section('content')

<!-- メインビジュアル -->
<div class="jumbotron jumbotron-fluid text-center p-0">
  <div class="bg-rgba pt-5 pb-3">
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-5"></h3>
    <p class="fade py-5">飲musubi</p>
  </div> 
</div> 
            
<!-- サイト説明 -->
<div class="concept">
  <div class="container my-5">
    <section class="greeting">
      <div class="content-wrapper">
        <div class="contents">
          <div class="row">
            <div class="col-1"></div>
              <div class="col-md-10 text-center">
                  <div class="content">
                      <h1 class="fadein pb-2">飲musubiとは...</h1>
                      <h4 class="fadein py-2">1杯目で店を楽しむ。</h4>
                      <h4 class="fadein py-2">2杯目で人を楽しむ。</h4>
                      <h4 class="fadein py-2">3杯目で酒を楽しむ。</h4>
                      <h6 class="fadein py-2">そんな時間を楽しみたい、人と店と酒を「結ぶ」アプリです。</h6>
                  </div>
              </div> 
          </div>
        </div>
      </div> 
    </section>              
  </div> 
</div> 
<!-- サイト説明ここまで -->

<!-- エフェクト画像 -->
<div class="service fadein  bg-white">
    <div class="container py-3 mt-5 ">
      <div class="row">
        <div class="col-md-4">
          <figure class="snip1340"><img src="/images/noge.jpg" alt=""/>
            <figcaption>
              <h2>店</h2>
              <p>People and stores</p>
            </figcaption>
            <a href="{{ route('mypage.show') }}"></a>
          </figure>
        </div>

        <div class="col-md-4">
          <figure class="snip1340 "><img src="/images/kanpai.jpeg" alt=""/>
            <figcaption>
              <h2>人</h2>
              <p>People and people</p>
            </figcaption><a href="{{ route('mypage.show') }}"></a>
          </figure>
        </div>

        <div class="col-md-4">
        <figure class="snip1340"><img src="/images/sake.jpeg" alt=""/>
          <figcaption>
            <h2>酒</h2>
            <p>People and sake</p>
          </figcaption><a href="{{ route('mypage.show') }}"></a>
        </figure>
        </div>
    </div>
  </div>
</div>

<!-- エフェクトここまで -->

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <script src="{{ asset('js/index.js') }}" defer></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <!-- 以下スクロール表示用 -->
    <script src="https://unpkg.com/scrollreveal"></script>

@endsection