<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newpost extends Model
{
    //バリデーションを設定
    public static $rules = array(
        'store_name' => 'required',
        'station' => 'required',
        'image' => 'required',        
    );
    protected $fillable = ['store_name','station','image','phone','address','holiday','url','price','hours','evaluation','reviews'];
}
