<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRequest extends Model
{
    protected $guarded = array('id');

    
    public function user(){
        return $this->belongsToMany('App\User');
    }

    public static $rules = array(
        'shop_name' => 'required',
        'address' => 'required',
        'comment' => 'required|string|max:20',
    );
        
}
