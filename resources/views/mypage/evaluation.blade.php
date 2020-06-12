@extends('layouts.app')

@section('content')

evaluationです<br>
お店の評価ページ
<form>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleFormControlInput1">{{ $shop->shop_name }}</label>
              </div>
              <label for="exampleFormControlSelect1">■満足度チェック</label>
          
              
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleFormControlSelect1">料理</label>
              </div>
            </div>
            <div class="col-md-9">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>大ジョッキ</option>
                <option>中ジョッキ</option>
                <option>小ジョッキ</option>
              </select>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleFormControlSelect1">ドリンク</label>
              </div>
            </div>
            <div class="col-md-9">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>大ジョッキ</option>
                <option>中ジョッキ</option>
                <option>小ジョッキ</option>
              </select>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleFormControlSelect1">雰囲気</label>
              </div>
            </div>
            <div class="col-md-9">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>大ジョッキ</option>
                <option>中ジョッキ</option>
                <option>小ジョッキ</option>
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