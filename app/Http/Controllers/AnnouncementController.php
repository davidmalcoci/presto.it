<?php

namespace App\Http\Controllers;

use File;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Spatie\Image\Manipulations;
use App\Models\AnnouncementImage;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;
use App\Http\Requests\AnnouncementRequest;

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
        $announcements = Announcement::orderBy('created_at', 'DESC')->get();

        return view('latest', compact('announcements'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        $uniqueSecret = $request->old(
            'uniqueSecret',
             base_convert(sha1(uniqid(mt_rand())), 16, 36)
        );
        
        return view('announcement.create', compact('categories', 'uniqueSecret') );
    }

    public function upload(Request $request){
        
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        dispatch(new ResizeImage($fileName, 80, 80));
        dispatch(new ResizeImage($fileName, 500, 500));

        session()->push("images.{$uniqueSecret}", $fileName);
    
        return response()->json(
            [
                'id' => $fileName
            ]
        );

    } 

    public function remove(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->input('id');
        session()->push("removedimages.{$uniqueSecret}", $fileName);
        Storage::delete($fileName);

        return response()->json('ok');

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(AnnouncementRequest $request)
    {
        
        $announcement = announcement::Create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category,
            'user_id'=>Auth::id(),
            'price'=>$request->price
            
        ]);
        
        $uniqueSecret = $request->input('uniqueSecret');
        
        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedimages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);

        foreach ($images as $image){
            $i = new AnnouncementImage();

            $fileName = basename($image);
            $newFileName = "public/announcements/{$announcement->id}/{$fileName}";
            Storage::move($image, $newFileName);

            $i->file = $newFileName;
            $i->announcement_id = $announcement->id;
            $i->save();

            dispatch(new ResizeImage($i->file, 500,500));
            dispatch(new ResizeImage($i->file, 80,80));

            GoogleVisionSafeSearchImage::withChain([
                // new ResizeImage($i->file, 500, 500),
                // new ResizeImage($i->file, 80, 80),
                new GoogleVisionRemoveFaces($i->id),
                new GoogleVisionLabelImage($i->id),
                new ResizeImage($i->file, 500, 500),
                new ResizeImage($i->file, 80, 80)

            ])->dispatch($i->id);
        }
        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
        
        
        return redirect(route('homepage'))->with('message', 'Il tuo annuncio ?? stato inserito');
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

    public function getImages(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedimages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);

        $data = [];

        foreach($images as $image) {
            $data[] = [
                'id' => $image,
                'src' => AnnouncementImage::getUrlByFilePath($image, 80, 80)
            ];
        }

        return response()->json($data);
    }

}
