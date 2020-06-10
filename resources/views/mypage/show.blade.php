@extends('layouts.app')

@section('content')

showです<br>
登録店舗一覧の表示
<div class="card-deck m-3">

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
    
  </div>

@endsection