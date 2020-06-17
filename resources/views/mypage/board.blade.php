@extends('layouts.app')

@section('content')


お店の掲示板画面

<!-- エラー表示 -->
@if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e )
      <li>{{ $e }}</li>
      @endforeach
    </ul>
@endif
                      
<hr>
以下掲示板

<p>自分意外のコメントは削除できません</p>

<div class="container border">
    <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>投稿者</th>                          
                                <th class="text-center">コメント</th>
                                <th>投稿日</th>
                                <th >削除</th>
                            </tr>
                        </thead>
                        <tbody>   
                            @foreach($boards as $board)
                                    <tr>
                                        <td width="9%">{{ $board->user->name}}</td>
                                        <td width="70%">{{ \Str::limit( $board->comment,30) }}</td>
                                        <td width="9%">{{ $board->created_at}}</td>
                                        <td width="12%"> <a href="{{ route('mypage.commentdelete') . '?id=' . strval($board->id ) }}" style="color: #F33;">削除</a></td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
         </div>   
     </div>
  </div>

 




            
@endsection