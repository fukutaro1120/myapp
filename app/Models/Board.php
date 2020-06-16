<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public function user(){
       return $this->belongsTo("App\User");
    }



    public static $rules = array(
       
        'comment' => 'required',
    );
}
