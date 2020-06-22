@extends('layouts.app')

@section('content')

<!-- エラー表示 -->
@if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e )
      <li>{{ $e }}</li>
      @endforeach
    </ul>
@endif
                      
<br>
<div class="container mt-5">
    <div class="row text-center">
        <h1>『{{$shop->shop_name}}の掲示板』</h1>
    </div>
</div>


<div class="conatiner mx-auto mt-1">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 mb-3 text-right">
            <a href=" {{ route('mypage.evaluation') . '?id=' . strval($shop->id) }} "> 
                <button type="button" class="btn btn-primary">コメントを送る</button>
            </a>
        <!-- <div class="col-1"></div> -->
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <table class="table text-center table-hover ">
                        <thead class="thead-light">
                            <tr>
                                <th>投稿者</th>                          
                                <th>コメント</th>
                                <th>投稿日</th>
                                <th>編集</th>
                                <th>削除</th>
                            </tr>
                        </thead>
                        <tbody>   
                            @foreach($boards as $board)
                                    <tr>
                                        <td class="align-middle h5" style="height:60px">{{ $board->user->name}}</td>
                                        <td class="align-middle h5">{{ \Str::limit( $board->comment,30) }}</td>
                                        <td class="align-middle">{{ $board->created_at}}</td>
                                        <td class="align-middle">
                                             <a href="{{ route('mypage.commentupdate') . '?id=' . strval($board->id ) }}">編集</a>
                                        </td>
                                        <td>
                                             <form method="POST" action="{{ route('mypage.commentdelete') . '?id=' . strval($board->id ) }}" id="delete_{{ $board->id}}" >
                                             @csrf
                                             <a href="#" class="btn btn-danger" data-id="{{ $board->id }}" onclick="deletePost(this);">削除</a>
                                             </form>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
         </div>   
     </div>
  </div>
  <hr>
  <p class="mt-2 mb-5 mr-5 pr-5 text-right">※他ユーザーのコメントは「編集・削除」出来ません！</p>

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