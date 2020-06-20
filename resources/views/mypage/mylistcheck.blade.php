@extends('layouts.app')

@section('content')

<br>

<div class="container my-5  text-center">
  <h3>『マイページに登録している店の一覧表示です』</h3>
    <div class="row">
      <div class="col-2"></div>
    
  <div class="col-8 border">
    <table class="table table-hover">
      <thead >
         <tr>
              <!-- <th scope="col">No</th> -->
              <th>店舗名</th>
              <th>住所</th>
              <th>アクション</th>
          </tr>
      </thead>
    <tbody>
      @foreach($shops as $shop)
         <tr>
              <td>
                <a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}">{{ $shop->shop_name}}</a>
              </td>
              <td>{{$shop->address }}</td>
              <td>
              <a href="{{ route('mypage.mylistdelete') . '?id=' . strval($shop->id ) }}" class="text-danger font-weight-bold">削除</a>
              </td>
         </tr>
      @endforeach   
    </tbody>
  </table>
</div>
  <div class="col-2"></div>
  </div>
  </div>
  

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <link href="{{ asset('css/font.css') }}" rel="stylesheet">

@endsection