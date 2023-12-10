<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.index');
    }
    public function blogDetails($slug){
        $blog = Blog::where('slug',$slug)->first();
        return view('frontEnd.blog.blog_details',compact('blog'));
    }

}
