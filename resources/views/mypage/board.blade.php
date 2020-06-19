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
                    <table class="table text-center ">
                        <thead class="thead-light">
                            <tr>
                                <th>投稿者</th>                          
                                <th>コメント</th>
                                <th>投稿日</th>
                                <th >削除</th>
                            </tr>
                        </thead>
                        <tbody>   
                            @foreach($boards as $board)
                                    <tr class="">
                                        <td class="align-middle" style="height:80px">{{ $board->user->name}}</td>
                                        <td class="align-middle">{{ \Str::limit( $board->comment,30) }}</td>
                                        <td class="align-middle">{{ $board->created_at}}</td>
                                        <td class="align-middle"> <a href="{{ route('mypage.commentdelete') . '?id=' . strval($board->id ) }}" style="color: #F33;">削除</a></td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
         </div>   
     </div>
  </div>
  <p class="mt-2 mb-5 mr-5 pr-5 text-right">※他ユーザーのコメントは削除できません</p>

 




            
@endsection