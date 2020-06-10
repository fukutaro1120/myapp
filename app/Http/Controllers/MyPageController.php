<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;
use phpDocumentor\Reflection\Types\Nullable;

class MyPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mypage.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('mypage.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, Shop::$rules);

        $shop = new Shop;
        $form = $request->all();

        if(isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $shop->image_path = basename($path);
        }else{
            $shop->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);
        $shop->fill($form);
        $shop->save();

        return view('mypage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //クリエイトで入力された内容を受け取るアクション
        // データを受け取る処理を記載
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // 会員別のショップのデータ一覧を取得して、それを表示
        return view('mypage.show');
    }



    // 店テーブルの一覧を表示する
    public function check()
    {
        // 登録しているお店の一覧を表示、それを表示
        return view('mypage.check');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     
    public function edit()
    {
        //マイページに登録している店舗の詳細へ表示
        return view('mypage.edit');
        
    }
    
    public function request()
    {
        return view ('mypage.request');
    }

    public function evaluation()
    {
        return view ('mypage.evaluation');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //editで編集した内容を店の情報の更新とDBへの保存
        return view ('mypage.update');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // マイページのお店の削除


    }
}
