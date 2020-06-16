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
<div class="container">
<div class="row">
  <div class="col-1"></div>
            <div class="col-md-12 center">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">NAME</th>                          
                                <th width="80%" class="text-center">コメント</th>
                                <th width="10%">TIME</th>
                            </tr>
                        </thead>
                        <tbody>   
                                         
                            @foreach($boards as $board)
                                    <tr>
                                        <td width="10%">{{ $board->user->name}}</td>
                                        <td width="80%">{{ $board->comment}}</td>
                                        <td width="10%">{{ $board->created_at}}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    <!-- <div class="col-md-1"></div> -->
    </div>
  </div>
            
@endsection