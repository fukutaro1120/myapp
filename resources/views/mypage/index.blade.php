@extends('layouts.app')

@section('content')

<!-- メインビジュアル -->
<div class="jumbotron jumbotron-fluid text-center p-0">
  <div class="bg-rgba pt-5 pb-3">
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-5"></h3>
    <h1 class="fade py-5">飲musubi</h1>
  </div> 
</div> 
            
<!-- サイト説明 -->
<div class="container">
  <section class="greeting">
    <div class="content-wrapper">
      <div class="contents">
        <div class="row">
          <div class="col-1"></div>
          <div class="col-md-5">
              <div class="content">
                <h2>飲musubiとは</h2>
                  <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                  </p>
              </div>
          </div>
              <div class="col-md-5 text-center">
                <figure><img src="/storage/img/mise.jpeg" alt=""></figure>
              </div> 
               <div class="col-1"></div>
          </div>
        </div>
    </div> 
  </section>             
</div> 
<!-- サイト説明ここまで -->


<!-- 確認 -->
<figure class="snip1340"><img src="/storage/img/mise.jpeg" alt="sample28"/>
  <figcaption>
    <h2>人と店</h2>
    <p>Nothing I do is my fault. </p>
  </figcaption>
  <a href="{{ route('mypage.show') }}"></a>
</figure>

<figure class="snip1340 hover"><img src="/storage/img/kanpai.jpeg" alt="sample42"/>
  <figcaption>
    <h2>人と人</h2>
    <p>A good compromise leaves everyone mad.</p>
  </figcaption><a href="{{ route('mypage.show') }}"></a>
</figure>

<figure class="snip1340"><img src="/storage/img/sake.jpeg" alt="sample63"/>
  <figcaption>
    <h2>人と酒</h2>
    <p>I liked things better when I didn't understand them.</p>
  </figcaption><a href="{{ route('mypage.show') }}"></a>
</figure>

<!-- エフェクトここまで -->


 
  <!-- ここから -->





    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <script src="{{ asset('js/index.js') }}" defer></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

@endsection