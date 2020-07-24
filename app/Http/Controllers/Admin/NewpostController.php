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
      $newpost = new Newpost;
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
   public function edit(Request $request)
  {
      // Newpost Modelからデータを取得する
      $newpost = Newpost::find($request->id);
      if (empty($newpost)) {
        abort(404);    
      }
      return view('restaurant.user.edit', ['newpost_form' => $newpost]);
  }

  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Newpost::$rules);
      // Newpost Modelからデータを取得する
      $newpost = Newpost::find($request->id);
      // 送信されてきたフォームデータを格納する
      $newpost_form = $request->all();
      if (isset($newpost_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $newpost->image_path = basename($path);
        unset($newpost_form['image']);
      } elseif (isset($request->remove)) {
        $newpost->image_path = null;
        unset($newpost_form['remove']);
      }
      unset($newpost_form['_token']);
      // 該当するデータを上書きして保存する
      $newpost->fill($newpost_form)->save();

      return redirect('restaurant/user/mypage');
  }
  
    // 以下を追記　　
  public function delete(Request $request)
  {
      // 該当するNewpost Modelを取得
      $newpost = Newpost::find($request->id);
      // 削除する
      $newpost->delete();
      return redirect('retaurant/user/mypage');
  }  
  
}