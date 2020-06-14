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
// 店一覧
    Route::get('show', 'MyPageController@show')->name('mypage.show');
// 店の詳細
    Route::get('edit', 'MyPageController@edit')->name('mypage.edit');
// 削除
    Route::get('delete', 'MyPageController@delete')->name('mypage.delete');
    
    
// 登録店舗一覧と更新
    Route::get('check', 'MyPageController@check')->name('mypage.check');
    Route::get('update', 'MyPageController@list')->name('mypage.list');
    Route::post('update', 'MyPageController@update')->name('mypage.update');

// マイページへ一覧からお店を登録
    Route::get('edit', 'MyPageController@up')->name('mypage.edit');
    Route::post('edit', 'MyPageController@mypageup')->name('mypage.mypageup');


 // 新規登録のリクエスト
    Route::get('request', 'MyPageController@req')->name('mypage.req');
    Route::post('request', 'MyPageController@request')->name('mypage.request');
// 評価ページ
    Route::get('evaluation', 'MyPageController@score')->name('mypage.score');
    Route::post('evaluation', 'MyPageController@evaluation')->name('mypage.evaluation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
