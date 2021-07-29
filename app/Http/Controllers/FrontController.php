<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function homepage() {
        $announcements = Announcement::all()->sortByDesc('created_at')->take(5);
        return view('homepage', compact('announcements'));
    }

    public function Register(){
       return view('auth.register');
        }

    public function Login(){
        return view('auth.login');
    }

    public function search(Request $request){

        $query = $request->input('query');
        $announcements= Announcement::search($query)->get();
        

        return view('search.results', compact('query', 'announcements'));


    }

}
