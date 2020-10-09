<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     //以下を追加
    public function about()
    {
        return view('about');
    }   
     //以下を追加
    public function rule()
    {
        return view('rule');
    }       
   
         //以下を追加
    public function loginafter()
    {
        return view('loginafter');
    }    
    
         //以下を追加
    public function restaurant()
    {
        return view('restaurant');
    }    
         //会員登録後の登録完了後ページ
    public function registerafter()
    {
        return view('registerafter');
    }       

}    