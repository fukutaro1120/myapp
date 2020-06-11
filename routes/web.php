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
    Route::get('index', 'MyPageController@index')->name('mypage.index');

    Route::get('create', 'MyPageController@add')->name('mypage.add');
    Route::post('create', 'MyPageController@create')->name('mypage.create');
   
    Route::post('store', 'MyPageController@store')->name('mypage.store');

    Route::get('show', 'MyPageController@show')->name('mypage.show');

    Route::get('edit', 'MyPageController@edit')->name('mypage.edit');
    Route::post('destory', 'MyPageController@destory')->name('mypage.destory');
    
    
    // 登録店舗一覧と更新
    Route::get('check', 'MyPageController@check')->name('mypage.check');
    Route::get('update', 'MyPageController@list')->name('mypage.list');
    Route::post('update', 'MyPageController@update')->name('mypage.update');

    // リクエストページ
    Route::get('request', 'mypageController@request')->name('mypage.request');
    // 評価ページ
    Route::get('evaluation', 'mypageController@evaluation')->name('mypage.evaluation');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
