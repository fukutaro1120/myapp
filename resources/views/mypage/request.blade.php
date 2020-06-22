@extends('layouts.app')

@section('content')

<br>
<br>



<form action="{{ action('MyPageController@request') }}" method="post">
    @csrf
    
    <!-- エラー表示 -->
    @if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $e )
        <li>{{ $e }}</li>
        @endforeach
    </ul>
    @endif
    
    <!-- フラッシュメッセージ -->
    @if (session()->has('flash_message'))
                <div class="alert alert-info mb-3 flash_message">
                    {{ session('flash_message') }}
                </div>
            @endif
    




<div class="container border pt-3 my-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center">
            <h3>『自分お気に入りのお店をリクエストで送ろう』</h3>
        </div>
        <div class="col-1"></div>
    </div>
<!-- </div> -->
<div class="container mb-5 mt-1">
    <div class="row">
        <div class="col-1"></div>
        <div class="container col-10 ">
           
          <div class="container mt-4 h5">
              <div class="row">
                  <div class="col-md-3">
                      <label >店舗名</label>
                  </div>
                  <div class="col-md-7">
                      <div class="form-group">
                      <input class="form-control"type="text" name="shop_name" value="{{ old('shop_name') }}" >
                      </div>
                  </div>
              </div>
          </div>
          <div class="container h5">
              <div class="row">
                  <div class="col-md-3">
                      <label >住所</label>
                  </div>
                  <div class="col-md-7">
                      <div class="form-group">
                      <input class="form-control"type="text" name="address" value="{{ old('address') }}" >
                      </div>
                  </div>
              </div>
          </div>
        
          <div class="container h5">
              <div class="row">
                  <div class="col-md-3">
                      <label >性別</label>
                  </div>
                  <div class="col-md-6 pl-4">
                        <div class="form-group row">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="男">
                                <label class="form-check-label" for="inlineRadio1">男性</label>
                            </div>
                            <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="女">
                                <label class="form-check-label" for="inlineRadio2">女性</label>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
        
          <div class="container h5">
              <div class="row">
                  <div class="col-md-3">
                      <label >年齢</label>
                  </div>
                  <div class="col-md-7">
                      <div class="form-group">
                      <input class="form-control"type="text" name="age" value="{{ old('age') }}" >
                      </div>
                  </div>
              </div>
          </div>
         
          <div class="container h5">
              <div class="row">
                <div class="col-md-3">
                  <label for="exampleFormControlTextarea1">店のおすすめ</label>
                </div>
                <div class="col-md-7">
                   <div class="form-group">
                   <input class="form-control"type="text" name="comment" value="{{ old('comment') }}" >
                  </div>
                </div>
              </div>
          </div>
                <div class="form-group ">
                  <div class="container text-right">
                      <div class="row">
                        <div class="col-md-3"></div>
                            <div class="col-md-7">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary ">
                            </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-1"></div>
    </div>
</div>
</div>
</form>

<link href="{{ asset('css/font.css') }}" rel="stylesheet">

<script src="{{ asset('js/request.js') }}" defer></script>


@endsection