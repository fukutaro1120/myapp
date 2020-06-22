<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mypage.index');
});

// 管理者ログイン後のルーティング
Route::group(['prefix' => 'mypage','middleware'=>'auth'] ,function()
{
// トップページ
    Route::get('index', 'MyPageController@index')->name('mypage.index');

// 新規登録
    Route::get('create', 'MyPageController@add')->name('mypage.add');
    Route::post('create', 'MyPageController@create')->name('mypage.create');
   
    Route::post('store', 'MyPageController@store')->name('mypage.store');

// 全店：登録店一覧
    Route::get('show', 'MyPageController@show')->name('mypage.show');
    
// 店の詳細
    Route::get('edit', 'MyPageController@edit')->name('mypage.edit');

// 全店：登録店舗削除
    Route::post('delete', 'MyPageController@delete')->name('mypage.delete');
     
// 登録店舗一覧と更新
    Route::get('check', 'MyPageController@check')->name('mypage.check');
    Route::get('update', 'MyPageController@list')->name('mypage.list');
    Route::post('update', 'MyPageController@update')->name('mypage.update');
    
// マイページに店舗の更新
    Route::get('mylistcheck', 'MyPageController@mylistcheck')->name('mypage.mylistcheck');
    
//  マイページへ登録している店の削除  
    Route::post('mylistdelete', 'MyPageController@mylistdelete')->name('mypage.mylistdelete');

// マイページへ一覧からお店を登録
    Route::get('edit', 'MyPageController@up')->name('mypage.edit');
    Route::post('edit', 'MyPageController@mypageup')->name('mypage.mypageup');
    
//  マイページへ登録している店一覧(画像あり)   
    Route::get('mypagelist', 'MyPageController@mypagelist')->name('mypage.mypagelist');

// 新規登録のリクエスト
    Route::get('request', 'MyPageController@req')->name('mypage.req');
    Route::post('request', 'MyPageController@request')->name('mypage.request');
   
// 全店リクエストチェック画面
    Route::get('requestlist', 'MyPageController@requestlist')->name('mypage.requestlist');
 // リクエストの削除
    Route::post('requestdelete', 'MyPageController@requestdelete')->name('mypage.requestdelete');

// 掲示板へのコメントを保存
    Route::get('evaluation', 'MyPageController@board')->name('mypage.evaluation');
    Route::post('evaluation', 'MyPageController@boardup')->name('mypage.boardup');

// 掲示板へ 
    Route::get('board', 'MyPageController@boardlist')->name('mypage.boardlist');
    
// 掲示板のコメントの編集
    Route::get('commentupdate', 'MyPageController@commentupdate')->name('mypage.commentupdate');
    Route::post('commentupdate', 'MyPageController@commentsave')->name('mypage.commentsave');

// 掲示板のコメントを削除
    Route::post('commentdelete', 'MyPageController@commentdelete')->name('mypage.commentdelete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
