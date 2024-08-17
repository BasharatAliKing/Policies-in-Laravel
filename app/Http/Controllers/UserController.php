<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    // public function register(){
    //     User::create([
    //      'name'=>'Sharafat Ali',
    //      'email'=>'foji@gmail.com',
    //      'password'=>'123',
    //     'role'=>'admin',
    //     ]);
    // }
    public function login(){
        return view('login');
    }
    public function loginmatch(Request $req){
    
      $cred = $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt($cred)){
            return redirect()->route('book.index');
        }
    }
    public function adminpage(){
        
        return view('adminpage');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
