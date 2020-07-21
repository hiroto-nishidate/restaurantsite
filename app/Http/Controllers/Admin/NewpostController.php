<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewpostController extends Controller
{
    public function add(){
        return view('restaurant.user.newpost');
    }
    public function create(Request $request)
  {
      // restaurant/user/newpostにリダイレクトする
      return redirect('restaurant/user/newpost');
  }  
}