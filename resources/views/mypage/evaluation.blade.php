@extends('layouts.app')

@section('content')

evaluationです<br>
お店の評価ページ

<form action="#" method="post">
 @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <div class="form-group">
              <h1>店名：{{ $shop->shop_name }}</h1>
              </div>
              <label for="exampleFormControlSelect1">■満足度チェック</label>
          
              
    <div class="container">
        <div class="row">
            <div class="col-md-3 my-0">
              <div class="form-group">
                <label for="exampleFormControlSelect1">料理</label>
              </div>
            </div>
            <div class="col-md-9 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>-選択してください-</option>
                  <option value="5">大満足</option>
                  <option value="4">満足</option>
                  <option value="3">普通</option>
                  <option value="2">やや物足りない</option>
                  <option value="1">物足りない</option>
              </select>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 my-0">
              <div class="form-group">
                <label for="exampleFormControlSelect1">ドリンク</label>
              </div>
            </div>
            <div class="col-md-9 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>-選択してください-</option>
                  <option value="5">大満足</option>
                  <option value="4">満足</option>
                  <option value="3">普通</option>
                  <option value="2">やや物足りない</option>
                  <option value="1">物足りない</option> 
              </select>
            </div>
        </div>
    </div>
    <div class="container my-0">
        <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleFormControlSelect1">雰囲気</label>
              </div>
            </div>
            <div class="col-md-9 mb-3">
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>-選択してください-</option>
                  <option value="5">大満足</option>
                  <option value="4">満足</option>
                  <option value="3">普通</option>
                  <option value="2">やや物足りない</option>
                  <option value="1">物足りない</option>
              </select>
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
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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