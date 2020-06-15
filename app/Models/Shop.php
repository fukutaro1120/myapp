<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
   
    

    public function users(){
        return $this->belongsToMany('App\User','mypage_ups','shop_id','user_id');
    }

    protected $guarded = array('id');

    public static $rules = array(
        'shop_name' => 'required',
        'address' => 'required',
        'category' => 'required',
        'recommend' => 'required',
        'interior' => 'required',
        
        
    );
}
