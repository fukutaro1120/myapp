@extends('layouts.app')

@section('content')

checkです<br>
登録店舗一覧表示<br>


  <div class="container pt-2">
    <table class="table table-hover">
      <thead>
         <tr>
              <th scope="col">No</th>
              <th scope="col">店舗名</th>
              <th scope="col">住所</th>
              <th scope="col">ジャンル</th>
              <th scope="col">アクション</th>
          </tr>
      </thead>
    <tbody>
         <tr>
           <th>1</th>
           <td><a href="detail.html">海鮮居酒屋 里</a></td>
           <td>東京都大田区蒲田</td>
           <td>和食</td>
           <td><a href="{{ route('mypage.update') }}">編集</a> / <a href="#">削除</a></td>
         </tr>
    </tbody>
  </table>
  </div>
  

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>


@endsection