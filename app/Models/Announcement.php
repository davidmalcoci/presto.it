<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;
use Laravel\Scout\Searchable;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'category_id',
        'price'

    ];

    public function toSearchableArray()
    {
        $array = [

            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description
        ];

        

        return $array;
    }


    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }


    public function images(){
        return $this->hasMany(AnnouncementImage::class);
    }

    static public function ToBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }



}
