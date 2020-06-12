@extends('layouts.app')

@section('content')

requestです<br>
お店のリクエストページ
<form>
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <div class="form-group">
          <label for="exampleFormControlInput1">店舗名</label>
          <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">住所</label>
          <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">性別</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>男性</option>
            <option>女性</option>
          </select>

        <div class="form-group">
          <label for="exampleFormControlSelect1">年代</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>選択してください</option>
            <option>20歳〜29歳</option>
            <option>30歳〜39歳</option>
            <option>40歳〜49歳</option>
            <option>50歳〜59歳</option>
            <option>60歳〜</option>
          </select>
        </div>
       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">店のおすすめポイント</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
      
      <form>
        <div class="form-group">
          <div class="container">
              <div class="row">
                <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <a href="pro.html">
                        <button type="button" class="btn btn-outline-primary">送信</button>
                      </a>
                    </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>


@endsection