<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function homepage() {
        return view('homepage');
    }

    public function Register(){
       return view('auth.register');
        }

    public function Login(){
        return view('auth.login');
    }

}
