<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $category;
    public static function addCategory($request){
        self::$category = New Category();
        self::$category->name = $request->name;
        self::$category->save();


    }
    public function updateCategory($request,$id)
    {
        self::$category = Category::find('id');
        self::$category->name = $request->name;
        self::$category->save();
    }
}
