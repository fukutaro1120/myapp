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
                            ※コメントは30字以内です
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
                      
<hr>
以下掲示板
<div class="container">
<div class="row">
  <!-- <div class="col-1"></div> -->
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
                           <!-- foreachでくりかえす -->
                                <tr>
                                    <td width="10%">NAME</td>
                                    <td width="80%"class="text-center">title</td>
                                    <td width="10%">cmment</td>
                                </tr>
                            <!-- foreachここまで -->
                        </tbody>
                    </table>
                </div>
            </div>
    <!-- <div class="col-md-1"></div> -->
    </div>
  </div>
            
@endsection