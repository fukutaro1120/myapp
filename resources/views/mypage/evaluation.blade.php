@extends('layouts.app')

@section('content')

evaluationです<br>
お店の評価ページ
<form>
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <div class="form-group">
          <label for="exampleFormControlInput1">店舗名</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">満足指数</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
          </select>

        <div class="form-group">
          <label for="exampleFormControlSelect1">総合評価</label>
          <select class="form-control" id="exampleFormControlSelect1">
              <option>選択してください</option>
              <option>大ジョッキ</option>
              <option>中ジョッキ</option>
              <option>小ジョッキ</option>
          </select>
        </div>
       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">店のおすすめポイント</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    
        <div class="form-group">
          <div class="container">
              <div class="row">
                <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <!-- <a href="pro.html"> -->
                        <button type="button" class="btn btn-outline-primary">評価を送信する</button>
                      </a>
                    </div>
              </div>
          </div>
        </div>
      </form>
@endsection