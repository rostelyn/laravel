<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
        public function index (){
          return view('login');
        }

        public function login(Request $request){
                $credentials = $request->only(['username','password']);

                if(Auth::attempt($credentials)){
                        return redirect('/');
                }else{
                        return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
                }
        }
    
}
