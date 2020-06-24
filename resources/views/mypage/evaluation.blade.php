@extends('layouts.app')

@section('content')

<br>

<form action="{{ action('MyPageController@boardup') }}" method="post">
 @csrf
  <div class="container px-0">
    <div class="row">
      <div class="col-1"></div>

        <div class="col-10">
          <div class="container border mt-5">  
            <div class="row">
              <div class="col-md-12">
                <div class="form-group text-center">
                  <h1 class="p-3 mb-2 bg-primary text-white ">店名:{{ $shop->shop_name }}</h1>
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
                        <label for="exampleFormControlSelect1">■お店の掲示板へコメント</label>  
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
                                          <input type="hidden" value="{{ $shop->id }}" name="shop_id">
                                          <input type="submit" class="btn btn-primary">
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