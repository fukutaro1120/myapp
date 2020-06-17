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
          <h4 class="">ここに説明</h4> 
          <h4 class="">ここに説明</h4>
          <h4 class="">ここに説明</h4>
          <h4 class="">ここに説明</h4>
  </div> 


 

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <script src="{{ asset('js/index.js') }}" defer></script>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

@endsection