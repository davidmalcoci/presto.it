<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Mail\RevisorMail;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    function homepage() {
        $announcements = Announcement::all()->sortByDesc('created_at')->take(5);
        $categories = Category::all();
        return view('homepage', compact('announcements', 'categories'));
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

    public function work() {
        return view('work');
    }

    public function send(Request $request){
        $mail = $request->input('email');
        $nome = $request->input('name');

        $contact = compact('mail', 'nome');
        Mail::to($mail)->send(new RevisorMail($contact));

        return redirect(route('homepage'))->with('mailMessage', 'La tua richiesta da revisore è stata accolta e sarà valutata!');
    }

    public function locale($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    }


    public function user(Announcement $announcement){

        $user = Auth::user();
        $announcements = Announcement::where('user_id', Auth::user()->name)->get();
        

        $starter = 100;
        if($starter - Auth::user()->created_at->format('d') > 0){
            $starter = "Newbie*";
        
        } else {
            $starter = "Veteran";
        }

        return view ('user', compact('user', 'announcements','starter'));
    }

}
