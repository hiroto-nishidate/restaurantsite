<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Newpost;

class NewpostController extends Controller
{
    public function add(){
        return view('restaurant.user.newpost');
    }

public function create(Request $request)
  {
      // 以下を追記
      // Varidationを行う
      $this->validate($request, Newpost::$rules);
      $newpost=new Newpost;
      $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        $path = $request->file('image')->store('public/image');
        $newpost->image_path = basename($path);
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      // データベースに保存する
      $newpost->fill($form);
      $newpost->save();
      return redirect('restaurant/user/newpost');
  }
}