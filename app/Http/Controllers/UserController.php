<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //以下を追加
    public function completed()
    {
        return view('restaurant.completed');
    }
     //以下を追加
    public function about()
    {
        return view('restaurant.about');
    }   
     //以下を追加
    public function rule()
    {
        return view('restaurant.rule');
    }       
         //以下を追加
    public function option()
    {
        return view('restaurant.user.option');
    }    
         //以下を追加
    public function login()
    {
        return view('restaurant.user.login');
    }    
    
         //以下を追加
    public function restaurant()
    {
        return view('restaurant');
    }    
         //会員登録後の登録完了後ページ
    public function register()
    {
        return view('restaurant.user.register');
    }       
               //以下を追加
    public function account_delete_completed()
    {
        return view('restaurant.user.account_delete_completed');
    } 
                   //以下を追加
    public function delete_confirm()
    {
        return view('restaurant.user.delete_confirm');
    } 
             //以下を追加
    public function newpost()
    {
        return view('restaurant.user.newpost');
    }  
}
