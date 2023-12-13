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

    public function edit($id){
        $category = Category::find($id);
        return view('backEnd.category.edit',compact('category'));
    }

    public function create(){
        return view('backEnd.category.create');
    }

    public function save(Request $request){
        $request->validate([
            'name'=>'required|unique:categories'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('category.index')->with('success','Category Created Successfully');
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('category.index')->with('success','Category Created Successfully');
    }

    public function delete($id){
        $category_default_id = Category::where('name','Uncategorized')->first()->id;
        $category = Category::find($id);
        if ($category->name === 'Uncategorized')
            abort(404);

        $category->recipe()->update(['category_id'=>$category_default_id]);
        $category->delete();
        return redirect()->back()->with('success', 'Category Has been deleted.');
    }

}
