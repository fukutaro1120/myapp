<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MypageUp extends Model
{
  protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'user_id' => 'required',
        'shop_id' => 'required',
        'body' => 'required',
        
    );
}
