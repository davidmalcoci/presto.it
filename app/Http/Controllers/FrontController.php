<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function homepage() {
        return view('homepage');
    }

    function store() {
        
    }
}
