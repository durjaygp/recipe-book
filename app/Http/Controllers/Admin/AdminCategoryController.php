<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('backEnd.category.index',compact('categories'));
    }
    public function save(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->description = $request->description;
        $category->save();
        return redirect()->back();
    }
}
