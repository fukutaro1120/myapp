<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;

use App\Models\ShopRequest;
use App\Models\MypageUp;
use App\Models\Board;



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

// 店を新規登録する
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
  
        
    // 画像
        if(isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $shop->image_path = basename($path);
            // dd($shop->image_path);
        }else{
            $shop->image_path = null;
        }

    //  画像1
        if(isset($form['image1'])) 
        {
            
            $path = $request->file('image1')->store('public/image');
            $shop->image_path1 = basename($path);
          
        }else{
            $shop->image_path1 = null;
        }

    // 画像2
                if(isset($form['image2'])) {
                
                    $path = $request->file('image2')->store('public/image');
                    $shop->image_path2 = basename($path);
                }else{
                    $shop->image_path2 = null;
                }
            
    // 画像3
                 if(isset($form['image3'])) {
                        
                    $path = $request->file('image3')->store('public/image');
                     $shop->image_path3 = basename($path);
                }else{
                    $shop->image_path3 = null;
                }


        unset($form['_token']);
        unset($form['image']);
        unset($form['image1']);
        unset($form['image2']);
        unset($form['image3']);

        $shop->fill($form);


        $shop->save();

        return view('mypage.create');
        
    }

    
//クリエイトで入力された内容を受け取る

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


// ショップのデータ一覧を取得して、それを表示

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

// 会員別のマイページ登録しているショップの一覧を取得



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

        public function up(Request $request)
        { 
          $shop = Shop::find($request->id);
          
          return view('mypage.edit',['shop' =>$shop]);
        }

//マイページテーブルに保存
        public function mypageup(Request $request)
        {

            $shop= Shop::find($request->shop_id);
            if(empty($shop)){
                return redirect("mypage.show");
            }

            $mypageup = new MypageUp;         

            $mypageup->user_id = Auth::id();
            $mypageup->shop_id =$request->shop_id;
            // dd($mypageup);
           
            $mypageup->save();

            $shops = Auth::user()->shops()->get();

            return view('mypage.mypageup',['shops' =>$shops]);
            
        }
        
//  マイページ店舗の一覧へ
        public function mypagelist(Request $request)
        { 
            
            $myshop = Auth::user();
            
            $mypageup = new MypageUp;  
            $shops = Auth::user()->shops()->get();
            
            if(empty($shops)){
                return redirect("mypage.show");
            }
            
            
            return view('mypage.mypageup',['shops' =>$shops]);
            
        }       
        
// マイページのお店の削除
     
        
      /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function delete(Request $request)
        {
        $shops = Shop::find($request->id);
        
        $shops->delete();
                    
        return redirect('mypage/check');
        
        
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
            
            
            unset($form[' _token']);

            $shop_requests->user_id = Auth::id();
            $shop_requests->fill($form)->save();

            
            return view ('mypage.request');
        }

// リクエスト一覧
        public function requestlist(Request $request)
        {
            $shop_requests = new ShopRequest;
            $requests= $shop_requests::all();
            // dd($requests);

            return view ('mypage.requestlist',['requests' =>$requests]);

        }



// 掲示板へのコメント送付画面にいく
        public function board(Request $request)
        {
            $shop = Shop::find($request->id);

            return view('mypage.evaluation',['shop' =>$shop]);
            
        }

// 掲示板へコメントを保存する
        public function boardup(Request $request)
        {
            $this->validate($request,Board::$rules);
            $shop= Shop::find($request->shop_id);
            $form = $request->all();      
         
            $board = new Board;   
            
            $board->user_id = Auth::id();
            $board->shop_id =$request->shop_id;
            $board->comment =$request->body;
           
            $board->save();
           
            $boards = $shop->boards()->get();
            // dd($boards);
            // $boards->shop_id->sortByDesc('created_at');
    
            return view('mypage.board',['boards' =>$boards ,'shop' =>$shop ]);
        
        }
         
// 掲示板画面へ
        public function boardlist(Request $request)
        {
         
            $shop= Shop::find($request->id);
            $board = new Board;
            $boards = $shop->boards()->get();
             
            // 新規コメント順に表示
             $boards=$shop->boards->sortByDesc('created_at');
            // dd($boards);
           
            return view('mypage.board',['boards' =>$boards ,'shop' =>$shop ]);
            
        }
      
// 掲示板に投稿したコメントを削除する
        public function commentdelete(Request $request)
        {
           
            $board = new Board;   
            $board = Board::find($request->id);
            $user = Auth::user();
           
            // 他の人のコメントは消せないようにチェック
            if($board->user_id !== $user->id)
            {
                return redirect('mypage/show');
            }
            $board->delete();
         

            return redirect('mypage/show');
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


}
