@extends('layouts.app')

@section('content')

<br>

<div class="container my-5  text-center">
  <h3>『マイページに登録している店の一覧表示です』</h3>
    <div class="row">
      <!-- <div class="col-2"></div> -->
    
  <div class="col-12 border px-0">
    <table class="table table-hover">
      <thead class="thead-light">
         <tr>
              <th>店舗名</th>
              <th>住所</th>
              <th>ジャンル</th>
              <th>おすすめ</th>
              <th>アクション</th>
          </tr>
      </thead>
    <tbody>
      @foreach($shops as $shop)
         <tr>
              <td class="h5">
                <a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}">{{ $shop->shop_name}}</a>
              </td>
              <td class="h5">{{$shop->address }}</td>
              <td class="h5">{{$shop->category }}</td>
              <td class="h5">{{$shop->recommend }}</td>
              <td class="h6">

              <!-- 削除のモーダルここから -->
            

              <form method="post" action=" {{route('mypage.mylistdelete') . '?id=' . strval($shop->id ) }}" id="delete_{{ $shop->id}}" >
              @csrf
              <a href="#" class="btn btn-danger" data-id="{{ $shop->id }}" onclick="deletePost(this);">削除</a>   
              </form>  
              <!-- <a href="  route('mypage.mylistdelete') . '?id=' . strval($shop->id ) " class="text-danger font-weight-bold">削除</a>-->

              <!-- ここまで -->

              </td>
         </tr>
      @endforeach   
    </tbody>
  </table>
</div>
  <!-- <div class="col-2"></div> -->
  </div>
  </div>
  

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <script src="{{ asset('js/delete.js') }}" defer></script>
  

    <link href="{{ asset('css/font.css') }}" rel="stylesheet">

    <!-- 以下モーダル -->
 
    <script>
      function deletePost(e) 
      {
          'use strict';
          if (confirm('本当に削除していいですか?')) {
          document.getElementById('delete_' + e.dataset.id).submit();
          }
      }
    </script>

@endsection