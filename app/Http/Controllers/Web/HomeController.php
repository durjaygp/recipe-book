<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\Recipe;
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
    public function category($slug){
        $category = Category::where('slug',$slug)->first();
        $recipes = Recipe::where('category_id',$category->id)->latest()->get();
        return view('frontEnd.recipe.category',compact('category','recipes'));
    }
    public function blog(){
        $blogs = Blog::latest()->whereStatus(1)->get();
        return view('frontEnd.blog.blogs',compact('blogs'));
    }

    public function searchBooks(Request $request){
        $search = '%' . $request->input('search') . '%';

        $books = Book::where('name', 'like', $search)
            ->orWhere('description', 'like', $search)
            ->orWhere('body', 'like', $search)
            ->get();

        return view('frontEnd.books.search', compact('books', 'search'));
    }

    public function searchRecipe(Request $request){
        $search = '%' . $request->input('search') . '%';

        $recipes = Recipe::where('name', 'like', $search)
            ->orWhere('description', 'like', $search)
            ->orWhere('recipe', 'like', $search)
            ->get();

        return view('frontEnd.recipe.search', compact('recipes', 'search'));
    }



}
