@extends('layouts.app')

@section('content')

<br>

  <div class="container mt-5 px-0 border">
    <table class="table table-hover">
      <thead class="thead-light">
         <tr>
              <th scope="col">No</th>
              <th scope="col">店舗名</th>
              <th scope="col">住所</th>
              <th scope="col">ジャンル</th>
              <th scope="col">おすすめ</th>
              <th scope="col">編集</th>
              <th scope="col">削除</th>
          </tr>
      </thead>
    <tbody>
      @foreach($shops as $shop)
         <tr>
            <th>{{ $shop->id}}</th>
              <td><a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}">{{ $shop->shop_name}}</a></td>
              <td>{{$shop->address }}</td>
              <td>{{$shop->category }}</td>
              <td>{{$shop->recommend }}</td>
              <td>
                <a href="{{ route('mypage.update') . '?id=' . strval($shop->id) }}">編集</a> 
              </td>
              <td>
                <form method="POST" action="{{ route('mypage.delete') . '?id=' . strval($shop->id ) }}" id="delete_{{ $shop->id}}" >
                  @csrf
                <a href="#" class="btn btn-danger" data-id="{{ $shop->id }}" onclick="deletePost(this);">削除</a>
                </form>
              </td>
         </tr>
      @endforeach   
    </tbody>
  </table>
  </div>
  

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <link href="{{ asset('css/font.css') }}" rel="stylesheet">

    <!-- 以下削除確認用 -->
   <script>
      function deletePost(e) 
      {
          'use strict';
          if (confirm('本当に削除していいですか?')) {
          document.getElementById('delete_' + e.dataset.id).submit();
          }
      }
    </script>
    <!-- ここまで -->
@endsection