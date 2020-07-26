<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; //ユーザーIDを取得するため。


use App\Newpost;

// ログイン中のユーザー情報取得
Auth::user();
 
// ログイン中のユーザーID取得
Auth::id();



class NewpostController extends Controller
{
//    public function add(){
//        return view('restaurant.user.reviews.create');
//    }
    
   public function showCreateForm()
   {
       return view('restaurant/user/reviews/create');
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
      return redirect('restaurant/user/profiles/create');
  }
  
    // マイページの一覧表示
  public function index(Request $request)
  {
      $query = Newpost::query();
      $query->where('user_id',1); 
      $query->where('store_name',1);
      $posts = $query->get();// user_id が 1 のもの且つstore_name が 1 のものだけを取得する
      
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Newpost::where('title', $cond_title)->get();
      } else {
          // それ以外はすべての口コミデータを取得する
          $posts = Newpost::all();
      }
      return view('restaurant.user.profiles.create', ['posts' => $posts, 'cond_title' => $cond_title]);
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

      return redirect('restaurant/user/profiles/create');
  }
  
    // 以下を追記　　
  public function delete(Request $request)
  {
      // 該当するNewpost Modelを取得
      $newpost = Newpost::find($request->id);
      // 削除する
      $newpost->delete();
      return redirect('restaurant/user/profiles/create');
  }  
  
}