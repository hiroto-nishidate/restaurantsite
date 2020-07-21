<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newpost extends Model
{
    //バリデーションを設定
    public static $rules = array(
        'store_name' => 'required',
        'station' => 'required',
        'image_path' => 'required',        
    );
}
