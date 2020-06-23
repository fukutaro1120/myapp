@extends('layouts.app')

@section('content')

<br>
<!-- 掲示板のコメントの更新画面です -->

<form action="{{ action('MyPageController@commentsave') }}" method="post">
 @csrf
  <div class="container px-0">
    <div class="row">
      <div class="col-1"></div>

        <div class="col-10">
          <div class="container border my-5">  
            <div class="row">
              <div class="col-md-12 px-0">
                <div class="form-group text-center">
                  <h1 class="p-3 mb-2 bg-primary text-white ">コメント編集画面です</h1>
                </div>
                  
                    <!-- エラー表示 -->
                    @if(count($errors) > 0)
                        <ul>
                          @foreach($errors->all() as $e )
                          <li>{{ $e }}</li>
                          @endforeach
                        </ul>
                    @endif
            
                    <div class="container">
                      <div class="row">
                        <label for="exampleFormControlSelect1">■編集内容を入力してください</label>  
                            <div class="col-md-12 text-left">
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <textarea class="form-control" name="body" rows="6"></textarea>
                                ※コメントは30字以内です
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="container text-right">
                                <div class="row">
                                  <div class="col-md-3"></div>
                                      <div class="col-md-9"> 
                                          {{ csrf_field() }}
                                          <input type="hidden" value="{{ $shop->id }}" name="id">
                                          <input type="submit" class="btn btn-primary" value="更新">
                                      </div>
                                </div>
                            </div>
                        </div>
              </div>
            </div>
          </div>
      </div>
     <div class="col-1"></div>
     </div>
  </div>
</form>
         

<link href="{{ asset('css/font.css') }}" rel="stylesheet">

@endsection