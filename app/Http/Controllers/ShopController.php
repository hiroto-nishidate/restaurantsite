<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
        public function index()
    {
        $shops = Shop::paginate(5);
        return view('index',['shops' => $shops]);
    }
    
    public function create()
    {
        return view('new');
    }
    
    public function show($id)
    {
        $shop = Shop::find($id);
        $user = \Auth::user();
        if ($user) {
            $login_user_id = $user->id;
        } else {
            $login_user_id = "";
        }    
        return view('show', ['shop' => $shop, 'login_user_id' => $login_user_id]);
    }
    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->user_id = Auth::id();
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->reviews = request('reviews');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id])->with('new_message', '投稿が完了しました');
    }
    public function edit(Shop $shop, $id)
    {
        $shop = Shop::find($id);
        return view('edit',['shop' => $shop]);
    }
    public function update(Request $request, $id, Shop $shop)    
    {
        $shop = Shop::find($id);
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->reviews = request('reviews');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id])->with('edit_message', '投稿の編集が完了しました');
    }
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/shops')->with('delete_message', '投稿の削除が完了しました');
    }
    
}

