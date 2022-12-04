<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function add()
    {
        $this->Categories = Category::all();
        return view('admin.page.category',['Categories'=> $this->Categories]);
    }
    public function new(Request $request){
        Category::addCategory($request);
        return redirect()->back()->with('message','Category added successful ');
    }
    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back()->with('message','Category deleted successful ');
    }
}
