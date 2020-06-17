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

<div class="container mx-auto border">
    <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>投稿者</th>                          
                                <th>コメント</th>
                                <th>投稿日</th>
                                <th >削除</th>
                            </tr>
                        </thead>
                        <tbody>   
                            @foreach($boards as $board)
                                    <tr>
                                        <td >{{ $board->user->name}}</td>
                                        <td >{{ \Str::limit( $board->comment,30) }}</td>
                                        <td >{{ $board->created_at}}</td>
                                        <td > <a href="{{ route('mypage.commentdelete') . '?id=' . strval($board->id ) }}" style="color: #F33;">削除</a></td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
         </div>   
     </div>
  </div>

 




            
@endsection