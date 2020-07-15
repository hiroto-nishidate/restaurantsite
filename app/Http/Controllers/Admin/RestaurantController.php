<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    //以下を追加
    public function add()
      {
      return view('admin.restaurant.create');
  }
  
    // 以下を追記
    public function about()
      {
      return view('admin.restaurant.about');
  }
      // 以下を追記
    public function rule()
      {
      return view('admin.restaurant.rule');
  }
  
  
}
