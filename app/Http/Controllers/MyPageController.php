<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;
use App\Models\ShopRequest;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Nullable;

use Illuminate\Support\Facades\DB;

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

// 店新規登録
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

//クリエイトで入力された内容を受け取るアクション

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
            // データを受け取る処理を記載
        }


// 会員別のショップのデータ一覧を取得して、それを表示

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Request $request)
        {
        $shops = DB::table('shops')
        ->select('id','shop_name','address','category','image_path')
        ->get();

            // dd($shops);

            return view('mypage.show', compact('shops'));
        }



// 店テーブルの一覧を表示する
        public function check(Request $request)
        {
            // 登録しているお店の一覧を表示、それを表示
            $shops = DB::table('shops')
        ->select('id','shop_name','address')
        ->get();

            return view('mypage.check',compact('shops'));
        }



        public function list(Request $request)
        {
            $shop = Shop::find($request->id);

            return view('mypage.update',['shop' =>$shop]);
        }


    
//マイページに登録している店舗の詳細へ表示
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Request $request)
        {
            $shops = Shop::find($request->id);


            return view('mypage.edit',['shop' => $shops]);
        }
    


// リクエストページ
        public function req(Request $request)
        {
            return view ('mypage.request');
        }


// リクエストの送付
        public function request(Request $request)
        {
            $this->validate($request,ShopRequest::$rules);

            $shop_requests = new ShopRequest;
            $form = $request->all();
            
            // dd($form);
            
            unset($form[' _token']);

            $shop_requests->user_id = Auth::id();
            $shop_requests->fill($form)->save();

            
            return view ('mypage.request');
        }





// 評価送付
        public function evaluation(Request $request)
        {
            $shop = Shop::find($request->id);

            return view('mypage.evaluation',['shop' =>$shop]);
            
        }




        
//編集した内容の更新とDBへの保存
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request)
        {

            $shop = Shop::find($request->id);
            $shop_date = $request->all();

            // dd($shop_date);

            if (isset($shop_date['image'])) {
                $path = $request->file('image')->store('public/image');
                $shop->image_path = basename($path);
                unset($shop_date['image']);
            } elseif (isset($request->remove)) {
                $shop->image_path = null;
                unset($shop_date['remove']);
            }
            unset($shop_date['_token']);
            // 該当するデータを上書きして保存する
            $shop->fill($shop_date)->save();
        
            return view ('mypage.update',['shop' =>$shop]);
        
        }

// マイページのお店の削除
// 該当するNews Modelを取得

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
            public function delete(Request $request)
            {
            $shops = Shop::find($request->id);

            // 削除する
            $shops->delete();
            
            return redirect('mypage/check');


            }
}
