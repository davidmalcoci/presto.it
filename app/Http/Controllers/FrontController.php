<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function homepage() {
        $announcements = Announcement::all()->sortByDesc('created_at');
        return view('homepage', compact('announcements'));
    }

    public function Register(){
       return view('auth.register');
        }

    public function Login(){
        return view('auth.login');
    }

}
