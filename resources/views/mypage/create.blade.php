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

    <div class="container mt-5">
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
            <!-- <form> -->
              <div class="form-group">
               <input class="form-control"type="text" name="recommend" value="{{ old('recommend') }}" >
              </div>
            <!-- </form> -->
        </div>
      </div>    
    </div>

    <div class="container">
      <div class="row pt-2">
        <div class="col-sm-3">
          お店の作り
          </div>
        <div class="col-sm-7">
          <!-- <form> -->
            <div class="form-group">
              <input class="form-control"type="text" name="interior" value="{{ old('interior') }}" >
            </div>
          <!-- </form> -->
        </div>
      </div>    
    </div>
  

    <div class="container">
      <div class="form-group row">
        <label for="addImage" class="col-sm-3 col-form-label">画像</label>          
        <div class="col-sm-7">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image[]">
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
</form>
<hr>


@endsection