@extends('layouts.app')

@section('content')


お店の掲示板送信フォーム

<!-- エラー表示 -->
@if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e )
      <li>{{ $e }}</li>
      @endforeach
    </ul>
@endif


<form action="{{ action('MyPageController@boardup') }}" method="post">
 @csrf

   <div class="container border">
      <div class="row">
          <div class="col-md-9">
              <div class="form-group text-center">
              <h1 class="mt-3">店名:{{ $shop->shop_name }}</h1>
              </div>
              <label for="exampleFormControlSelect1">■お店の掲示板へコメント</label>
                    <div class="container mt-2">
                        <div class="row">
                              <div class="col-md-3">
                                タイトル
                              </div>
                              <div class="col-md-9">
                                  <div class="form-group">
                                        <input class="form-control"type="text" name="taitle" value="{{ old('title') }}" >
                                  </div>
                              </div>
                        </div>    
                    </div>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="exampleFormControlTextarea1">コメント</label>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <textarea class="form-control" name="body" rows="5"></textarea>
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
                                      <input type="hidden" value="{{ $shop->id }}" name="shop_id">
                                      <input type="submit" class="btn btn-primary">
                                  </div>
                            </div>
                        </div>
                    </div>

          </div>
        </div>
     </div>
  </form>

                      
            
@endsection