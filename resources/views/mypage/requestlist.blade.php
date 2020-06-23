@extends('layouts.app')

@section('content')

<br>
  <div class="container mt-5 px-0 border text-center">
    <table class="table table-hover">
      <thead class="thead-light ">
         <tr>
              <th scope="col">id</th>
              <th scope="col">店名</th>
              <th scope="col">住所</th>
              <th scope="col">性別</th>
              <th scope="col">年齢</th>
              <th scope="col">コメント</th>
              <th scope="col">投稿日</th>
              <th scope="col">削除</th>
          </tr>
      </thead>
    <tbody>
      @foreach($requests as $request)
         <tr>
           <td>{{ $request->user_id}}</td>
           <td>{{ $request->shop_name}}</td>
           <td>{{ $request->address}}</td>
           <td>{{ $request->gender}}</td>
           <td>{{ $request->age}}</td>
           <td>{{ $request->comment}}</td>
           <td>{{ $request->created_at}}</td>
           <td> 
            
             <form method="post" action="{{ route('mypage.requestdelete') . '?id=' . strval($request->id ) }}" id="delete_{{ $request->id}}" >
              @csrf
             <a href="#"class="btn btn-danger" data-id="{{ $request->id }}" onclick="deletePost(this);">削除</a>
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