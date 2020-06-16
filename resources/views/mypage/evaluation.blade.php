@extends('layouts.app')

@section('content')


お店の掲示板送信フォーム

<form action="{{ action('MyPageController@boardup') }}" method="post">
 @csrf

    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <div class="form-group text-center">
              <h1>店名：{{ $shop->shop_name }}</h1>
              </div>
              <label for="exampleFormControlSelect1">■お店の掲示板へコメント</label>

      <div class="container mt-5">
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
             ※コメントは50文字以内です
          </div>
        </div>
      </div>
    </div>
        <div class="form-group">
          <div class="container">
              <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <!-- <button type="button" class="btn btn-outline-primary">送信</button> -->
                        {{ csrf_field() }}
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