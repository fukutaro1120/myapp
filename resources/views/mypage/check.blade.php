@extends('layouts.app')

@section('content')



  <div class="container mt-5 pt-5">
    <table class="table table-hover">
      <thead>
         <tr>
              <th scope="col">No</th>
              <th scope="col">店舗名</th>
              <th scope="col">住所</th>
              <th scope="col">アクション</th>
          </tr>
      </thead>
    <tbody>
      @foreach($shops as $shop)
         <tr>
           <th>{{ $shop->id}}</th>
           <td><a href="{{ route('mypage.edit') . '?id=' . strval($shop->id) }}">{{ $shop->shop_name}}</a></td>
           <td>{{$shop->address }}</td>
           <td>
             <a href="{{ route('mypage.update') . '?id=' . strval($shop->id) }}">編集</a> 
           / 
           <a href="{{ route('mypage.delete') . '?id=' . strval($shop->id ) }}">削除</a></td>
         </tr>
      @endforeach   
    </tbody>
  </table>
  </div>
  

    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>


@endsection