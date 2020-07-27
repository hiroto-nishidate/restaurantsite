<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //ユーザーidを取得するため

// ログイン中のユーザー情報
Auth::user();
 
// ログイン中のユーザーID
Auth::id();

class KadaiController extends Controller
{
    //
    public function add()
    {
        return view('restaurant.kadai.create');
    }
    public function create(){
    $auths = Auth::user();
    return view('restaurant.kadai.create', [ 'auths' => $auths ]);
    }
}
