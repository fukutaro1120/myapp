@extends('layouts.app')

@section('content')

<br>
  <div class="container mt-5  border text-center">
    <table class="table table-hover">
      <thead>
         <tr>
              <th scope="col">id</th>
              <th scope="col">店名</th>
              <th scope="col">住所</th>
              <th scope="col">性別</th>
              <th scope="col">年齢</th>
              <th scope="col">コメント</th>
              <th scope="col">投稿日</th>
              <th scope="col">アクション</th>
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
             <!-- アラート用IDの部分を追加 -->
             <a href="{{ route('mypage.requestdelete') . '?id=' . strval($request->id ) }}"
               class="text-danger font-weight-bold">削除</a>
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

  

@endsection