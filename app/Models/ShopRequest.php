<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRequest extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'shop_name' => 'required',
        'address' => 'required',
        'comment' => 'required',
    );
        
}
