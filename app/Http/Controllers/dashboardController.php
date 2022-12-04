<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public $ideas;
    public function index(){
        $this->ideas = Idea::latest()->get();
        return view('admin.page.manage',['ideas'=>$this->ideas]);
    }
    public function details(){
        return view('admin.details');
    }

}
