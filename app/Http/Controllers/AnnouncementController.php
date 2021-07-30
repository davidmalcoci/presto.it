<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->except('index', 'show', 'catdisplay');
    } 


    
    // public function newAnnouncements() {

    //     $uniqueSecret=base_convert(sha1(uniqid(mt_rand())), 16, 36);
    //     return view('announcement.create', compact('uniqueSecret'));
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $uniqueSecret=base_convert(sha1(uniqid(mt_rand())), 16, 36);
        
        return view('announcement.create', compact('categories', 'uniqueSecret') );
    }

    public function upload(Request $request){
        
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
        session()->push("images.{$uniqueSecret}", $fileName);
        

    } 
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
        $announcement = announcement::Create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category,
            'user_id'=>Auth::id(),
            'price'=>$request->price
            
            
        ]);
        
        $uniqueSecret = $request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}");
        
        
        return redirect(route('homepage'))->with('message', 'Il tuo annuncio è stato inserito');
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        

        return view('announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
    }

    public function catdisplay(Announcement $announcement, $name, $id){
        
        $announcements = Announcement::where('category_id', $id)->get();
        return view ('category.show', compact('name', 'id', 'announcements'));
    }

}
