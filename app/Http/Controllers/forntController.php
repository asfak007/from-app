<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Idea;
use Validator;
use Illuminate\Http\Request;

class forntController extends Controller
{
    public  $Categories;
    public function index(){
       $this->Categories = Category::all();
//       return $this->Categories;
       return view("front.home",['Categories'=> $this->Categories]);
    }
    public function new(Request  $request){
        $validator = Validator::make($request->all(),[
            'name' =>'required',
            'mobile' => 'required|numeric|digits:11',
            'email'=>'required|email|unique:ideas',
            'title' =>'required',
            'category' =>'required',

        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $query = Idea::newIdea($request);
            if( $query ){
                return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
            }
//            return redirect()->back()->with('message','Your idea added successful ');
        }

    }

}
