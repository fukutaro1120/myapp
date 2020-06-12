@extends('layouts.app')

@section('content')

<!-- indexです<br>
ログイン後のホーム画面を表示（マイページアイコンがある） -->


  
<div class="jumbotron jumbotron-fluid text-center p-0">
  <div class="bg-rgba pt-5">
              <h3 class="display-3 pt-5">飲musubi</h3>
                <p class="lead">一杯の酒と人を結ぶ</p>
      </div> 
  </div> 
            

  <div class="container text-center">
          <h3 class="display-3">飲musubi</h3>
          <p class="lead">ここに説明</p>
          <p class="lead">ここに説明</p>
          <p class="lead">ここに説明</p>
  </div> 

  <footer class="footer mt-auto  py-3 bg-light">
      <div class="container text-center">
         <span class="text-muted">Copyright(c) 飲musubi</span>
      </div>
  </footer>

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

@endsection