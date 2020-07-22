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
      //dd($request);
      $this->validate($request, Newpost::$rules);
      $newpost=new Newpost;
      $form = $request->all();
      
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $newpost->image_path = basename($path);
      } else {
          $newpost->image_path = null;
      }
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      // データベースに保存する
      $newpost->fill($form);
      $newpost->save();
      return redirect('restaurant/user/newpost');
  }
  
    // マイページの作成
  public function mypage(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Newpost::where('title', $cond_title)->get();
      } else {
          // それ以外はすべての口コミデータを取得する
          $posts = Newpost::all();
      }
      return view('restaurant.user.mypage', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}