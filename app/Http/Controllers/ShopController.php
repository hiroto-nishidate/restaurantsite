<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    
    
    public function index()
    {
        $shops = Shop::all();
        return view('index',['shops' => $shops]);
    }
    public function create()
    {
        return view('new');
    }
    
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('show',['shop' => $shop]);
    }
    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->reviews = request('reviews');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id]);
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
        return redirect()->route('shop.detail', ['id' => $shop->id]);
    }
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/shops');
    }
    
}

