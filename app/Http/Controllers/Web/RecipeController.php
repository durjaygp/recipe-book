<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(){
        return view('frontEnd.recipe.index');
    }

    public function details($slug){
        //$recipe = Recipe::where('slug', $slug)->first();
        $recipe = Recipe::whereSlug($slug)->first();
       // return $recipe;
        return view('frontEnd.recipe.show',compact('recipe'));
    }
}
