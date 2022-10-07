<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("auth/login");
    }

    public function login_auth(Request $request){

    }

    public function register(){
        return view("auth/register");
    }

    public function register_auth(Request $request){

    }

    public function logout(){
        Auth::logout();
    }
}
