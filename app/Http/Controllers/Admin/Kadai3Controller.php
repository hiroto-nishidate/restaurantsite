<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //ユーザーidを取得するため

// ログイン中のユーザー情報
Auth::user();
 
// ログイン中のユーザーID
Auth::id();

class Kadai3Controller extends Controller
{
    //
    public function add()
    {
        return view('restaurant.kadai.create3');
    }
    public function create(){
    $auths = Auth::user();
    return view('restaurant.kadai.create3', [ 'auths' => $auths ]);
    }
}
