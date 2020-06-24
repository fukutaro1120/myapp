@extends('layouts.app')

@section('content')


<form action="{{ action('MyPageController@create') }}" method="post" enctype="multipart/form-data">
@csrf

<!-- エラー表示 -->
@if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $e )
      <li>{{ $e }}</li>
      @endforeach
    </ul>
@endif

<br>
<br>

<div class="container border mt-4">
  <div class="container pt-4">
    <div class="row text-center">
      <div class="col-12">
        <h3>『新規店登録画面』</h3>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container pt-3">
          <div class="row">
                <div class="col-sm-3">
                  店舗名
                </div>
                <div class="col-sm-7">
                    <div class="form-group">
                          <input class="form-control"type="text" name="shop_name" value="{{ old('shop_name') }}" >
                    </div>
                </div>
          </div>    
      </div>
    
    <div class="container ">
        <div class="row">
              <div class="col-sm-3">
                住所
              </div>
              <div class="col-sm-7"> 
                  <div class="form-group">
                         <input class="form-control"type="text" name="address" value="{{ old('address') }}" >
                  </div>
               </div>
        </div>    
    </div>

    <div class="container ">
        <div class="row">
              <div class="col-sm-3">
                ジャンル
              </div>
              <div class="col-sm-7"> 
                  <div class="form-group">
                        <input class="form-control"type="text" name="category" value="{{ old('category') }}" >
                  </div>
               </div>
        </div>    
    </div>

    <div class="container">
      <div class="row pt-2">
          <div class="col-sm-3">
              おすすめ料理
          </div>
            <div class="col-sm-7">
                  <div class="form-group">
                  <input class="form-control"type="text" name="recommend" value="{{ old('recommend') }}" >
                  </div>
          
            </div>
      </div>    
    </div>

    <div class="container ">
      <div class="row pt-2">
        <div class="col-sm-3">
          お店の作り
          </div>
        <div class="col-sm-7">
            <div class="form-group">
              <input class="form-control"type="text" name="interior" value="{{ old('interior') }}" >
            </div>
        </div>
      </div>    
    </div>
  
<!-- 画像追加 -->
    <div class="container">
      <div class="form-group row">
        <label for="addImage" class="col-sm-3 col-form-label">画像（一覧用）</label>          
        <div class="col-sm-7">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="addImage"></label>  
          </div>
        </div>
      </div>
    </div>    

    <div class="container">
      <div class="form-group row">
        <label for="addImage" class="col-sm-3 col-form-label">画像1</label>          
        <div class="col-sm-7">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image1">
            <label class="custom-file-label" for="addImage"></label>  
          </div>
        </div>
      </div>
    </div>    

    <div class="container">
      <div class="form-group row">
        <label for="addImage" class="col-sm-3 col-form-label">画像2</label>          
        <div class="col-sm-7">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image2">
            <label class="custom-file-label" for="addImage"></label>  
          </div>
        </div>
      </div>
    </div>    

    <div class="container">
      <div class="form-group row">
        <label for="addImage" class="col-sm-3 col-form-label">画像3</label>          
        <div class="col-sm-7">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image3">
            <label class="custom-file-label" for="addImage"></label>  
          </div>
        </div>
      </div>
    </div>    

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-sm-7 text-right">
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary">
      </div>
    </div>
  </div>
  </div>
  </div>
</form>

<hr>

<link href="{{ asset('css/font.css') }}" rel="stylesheet">

@endsection