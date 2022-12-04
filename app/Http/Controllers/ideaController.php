<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    public $idea;
    public $ideas;
    public function detail($id){
        $this->idea = Idea::find($id);
        return view('admin.page.detail',['idea'=>$this->idea]);
    }
    public function select(Request $request, $id){
         Idea::changeStatus($request, $id);
         return redirect()->back();
    }
    public function selectedIdea(){
        $this->ideas = Idea::where('status', '1')->get();
        return view('admin.page.selected',['ideas'=>$this->ideas]);
    }
}
