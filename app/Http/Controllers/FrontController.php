<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function homepage() {
        return view('homepage');
    }

    public function Register(Request $request){
       return view('auth.register');
        }

    public function Login(Request $request){
        return view('auth.login');
    }
}
