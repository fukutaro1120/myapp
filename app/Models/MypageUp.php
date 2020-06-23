<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MypageUp extends Model
{
  public function user(){
    
    return $this->hasMany('App\User');
  }
  public function shop(){

    return $this->belongsToMany('App\Models\Shop');
  }

  protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'user_id' => 'required',
        'shop_id' =>'required|uinique:shops,id;',
        'body' => 'required',
        
    );
}
