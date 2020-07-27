<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //ユーザーidを取得するため

// ログイン中のユーザー情報
Auth::user();
 
// ログイン中のユーザーID
Auth::id();

class Kadai2Controller extends Controller
{
    //
    public function add()
    {
        return view('restaurant.kadai.create2');
    }
    public function index(Request $request) {
        $user = Auth::user();   #ログインユーザー情報を取得します。
        return view('restaurant.kadai.create2', ['user' => $user]);
    }
}
