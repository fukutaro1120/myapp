@extends('layouts.app')

@section('content')

indexです<br>
ログイン後のホーム画面を表示（マイページアイコンがある）

<div class="jumbotron jumbotron-fluid text-center">
      <h3 class="display-3">飲musubi</h3>
        <p class="lead">一杯の酒と人を結ぶ</p>
</div> 

    <!-- <div class="card-deck m-3">
      <div class="card">
        <a href="detail.html">
          <img src="/storage/img/sato10.jpg"class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h3 class="card-title h4">
            <a href="detail.html" class="text-dark">海鮮居酒屋里</a>
          </h3>
          <h6 class="card-subtitle text-secondary">居酒屋</h6>
        </div>
    </div>
    <div class="card">
        <a href="detail.html">
          <img src="/storage/img/sato10.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h3 class="card-title h4">
            <a href="detail.html" class="text-dark">海鮮居酒屋里</a>
          </h3>
          <h6 class="card-subtitle text-secondary">居酒屋</h6>
        </div>
    </div>
    <div class="card">
        <a href="detail.html">
          <img src="/storage/img/sato10.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h3 class="card-title h4">
            <a href="detail.html" class="text-dark">海鮮居酒屋里</a>
          </h3>
          <h6 class="card-subtitle text-secondary">居酒屋</h6>
        </div>
    </div>  
  </div> -->

  <!-- <div class="jumbotron jumbotron-fluid text-center">
          <h3 class="display-3">飲musubiとは</h3>
          <p class="lead">ここに説明</p>
          <p class="lead">ここに説明</p>
          <p class="lead">ここに説明</p>
  </div>  -->

  <footer class="footer mt-auto  py-3 bg-light">
      <div class="container">
         <span class="text-muted">Copyright(c) </span>
      </div>
  </footer>

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

@endsection