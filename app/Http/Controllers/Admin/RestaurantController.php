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
  

}
