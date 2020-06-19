@extends('layouts.app')

@section('content')

<!-- indexです<br>
ログイン後のホーム画面を表示（マイページアイコンがある） -->


  
<div class="jumbotron jumbotron-fluid text-center p-0">
  <div class="bg-rgba pt-5 pb-3">
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-3"></h3>
    <h3 class="fade py-5"></h3>
    <h1 class="fade py-5">飲musubi</h1>



      </div> 
  </div> 
            

  <div class="container text-center">
          <!-- <h3 class="fade mb-3">人と店</h3>
          <h3 class="fade mb-3">店と人</h3>
          <h3 class="fade mb-3">人と人</h3> -->
          <!-- <h3 class="fade my-5">お気に入りのお店を登録しよう</h3>            -->
  </div> 
 
  <!-- ここから調整 -->
<div class="container mt-5">
    <div class="row">
      <div class="col">
          <div class="box">
              <div class="text">
               <h3 class="fade mb-3">人と店</h3>
                  <p>ここにコメント</p>
              </div>
                <div class="pict"><img src="/storage/img/mise.jpeg" alt=""></div>
          </div>
      </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col">
          <div class="box">
              <div class="text">
               <h3 class="fade mb-3">人と店</h3>
                  <p>ここにコメント</p>
              </div>
                <div class="pict"><img src="/storage/img/kanpai.jpeg" alt=""></div>
          </div>
      </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col">
          <div class="box">
              <div class="text">
              <h3 class="fade mb-3">人と人</h3>
                  <p>ここにコメント</p>
              </div>
                <div class="pict"><img src="/storage/img/sake.jpeg" alt=""></div>
          </div>
      </div>
    </div>
</div>


<!-- ここまで -->


    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <script src="{{ asset('js/index.js') }}" defer></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

@endsection