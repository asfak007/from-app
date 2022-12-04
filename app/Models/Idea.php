<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    public static $idea;

    public static function changeStatus($request ,$id){
        self::$idea = Idea::find($id);
        self::$idea->status   = $request->status;
        self::$idea->save();


    }
    public static function newIdea($request)
    {
        self::$idea = new Idea();
        self::$idea->name   = $request->name;
        self::$idea->email  = $request->email;
        self::$idea->mobile   = $request->mobile;
        self::$idea->category_id   = $request->category_id;
        self::$idea->title   = $request->title;
        self::$idea->short_description  = $request->short_description;
        self::$idea->long_description   = $request->long_description;
        self::$idea->status             = $request->status;
        self::$idea->save();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
