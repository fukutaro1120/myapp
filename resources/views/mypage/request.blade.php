@extends('layouts.app')

@section('content')

requestです<br>
お店のリクエストページ
<form>
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <label for="exampleFormControlInput1">店舗名</label>
          </div>
          <div class="col-md-7">
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <label for="exampleFormControlInput1">住所</label>
          </div>
          <div class="col-md-7">
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <label for="exampleFormControlInput1">性別</label>
          </div>
          <div class="col-md-7">
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>選択してください</option>
                    <option>男性</option>
                    <option>女性</option>
                </select>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <label for="exampleFormControlInput1">年代</label>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <select class="form-control" id="exampleFormControlSelect1">  
                  <option>選択してください</option>
                  <option>20歳〜29歳</option>
                  <option>30歳〜39歳</option>
                  <option>40歳〜49歳</option>
                  <option>50歳〜59歳</option>
                  <option>60歳〜</option>
              </select>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <label for="exampleFormControlTextarea1">店のおすすめポイント</label>
        </div>
        <div class="col-md-7">
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
                    <div class="col-md-7">
                        <!-- <button type="button" class="btn btn-outline-primary">送信</button> -->
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary">
                    </div>
              </div>
          </div>
        </div>
    </form>
@endsection