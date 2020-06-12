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
            
<!-- スライド -->
  <div class="container text-center">
          <!-- <h3 class="display-3">飲musubi</h3> -->
          <h3 class="fade">人と酒</h3>
          <h3 class="fade">人と店</h3>
          <h3 class="fade">人と人</h3>
          <h3 class="fade">全てを結ぶ</h3>
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

    <script src="{{ asset('js/index.js') }}" defer></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

@endsection