@extends('layouts.app')

@section('content')

updateです<br>
運営のみ使用できるページ<br>
登録している店の更新ができる
<body>
    <div class="container">
      <h1 class="h3 mt-3 mb-2">
        <span class="h6">飲musubi</span>
        お気に入り編集画面
      </h1>
    </div>
  
    <div class="container mt-3">
        <div class="row">
              <div class="col-sm-3">
                店舗名
              </div>
              <div class="col-sm-9">
                <form>
                  <div class="form-group">
                    <input class="form-control"type="text" value="" placeholder="">
                  </div>
                </form>
          </div>
        </div>    
      </div>
   
    <div class="container ">
        <div class="row">
              <div class="col-sm-3">
                住所
              </div>
              <div class="col-sm-9">
                <form>
                  <div class="form-group">
                    <input class="form-control"type="text"value="" placeholder="">
                  </div>
                </form>
          </div>
        </div>    
    </div>

    <div class="container ">
        <div class="row">
              <div class="col-sm-3">
                ジャンル
              </div>
              <div class="col-sm-9">
                <form>
                  <div class="form-check">
                    <input class="form-check-input"type="radio" value="foo" id="foo_rb_h" name="example">
                    <label class="form-check-label" for="foo_rb_h">
                      和食
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"type="radio" value="rd" id="rd_rb_h" name="example">
                    <label class="form-check-label" for="rd_rb_h">
                      中華
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"type="radio" value="si" id="si_rb_h" name="example">
                    <label class="form-check-label" for="si_rb_h">
                      イタリアン
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"type="radio" value="br" id="br_rb_h" name="example">
                    <label class="form-check-label" for="br_rb_h">
                      その他
                    </label>
                  </div>
                </form>
          </div>
        </div>    
    </div>

    <div class="container">
      <div class="row pt-2">
        <div class="col-sm-3">
            おすすめ料理
          </div>
          <div class="col-sm-9">
            <form>
              <div class="form-group">
                <input class="form-control"type="text"value="" placeholder="">
              </div>
            </form>
      </div>
    </div>    
  </div>
    <div class="container">
      <div class="row pt-2">
        <div class="col-sm-3">
          お店の作り
          </div>
          <div class="col-sm-9">
            <form>
              <div class="form-group">
                <input class="form-control"type="text"value="" placeholder="">
              </div>
            </form>
          </div>
      </div>    
    </div>
    <div class="container">
      <div class="row pt-2">
        <div class="col-sm-3">
          コメント
          </div>
          <div class="col-sm-9">
            <form>
              <div class="form-group">
                <input class="form-control"type="text"value="" placeholder="">
              </div>
            </form>
          </div>
      </div>    
    </div>
    <div class="container">
      <div class="row pt-2">
        <div class="col-sm-3">
          店のURL（任意）
          </div>
          <div class="col-sm-9">
            <form>
              <div class="form-group">
                <input class="form-control"type="text"value="" placeholder="">
              </div>
            </form>
          </div>
      </div>    
    </div>

      <div class="container">
      <div class="form-group row">
        <label for="addImage" class="col-sm-3 col-form-label">画像(追加)</label>          
        <div class="col-sm-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="addImage"lang="ja">
            <label class="custom-file-label" for="addImage">ファイル選択...</label>  
          </div>
        </div>
      </div>
    </div>    
  </div>

  <div class="container">
    <div class="row">
          <div class="col-sm-3">
            画像(削除)
          </div>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="d">
              <label class="form-check-label" for="d">削除</label>
            </div>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <img src="/storage/img/sato10.jpg" class="img-fluid img-thumbnail">
          </div>
          <div class="col-sm-3">
            
          </div>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="d">
              <label class="form-check-label" for="d">削除</label>
            </div>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <img src="/storage/img/sato10.jpg" class="img-fluid img-thumbnail">
          </div>
          <div class="col-sm-3">
            
          </div>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="d">
              <label class="form-check-label" for="d">削除</label>
            </div>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <img src="/storage/img/sato10.jpg" class="img-fluid img-thumbnail">
          </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <button type="button" class="btn btn-primary">更新登録</button>
      </div>
    </div>
  </div>


    <!-- Opional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

@endsection