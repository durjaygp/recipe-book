<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Support\Str;

class AdminRecipeController extends Controller
{
    public function index(){
        $recipes = Recipe::latest()->get();
        return view('backEnd.recipe.index',compact('recipes'));
    }

    public function create(){
        $categories = Category::latest()->where('status',1)->get();
        return view('backEnd.recipe.create',compact('categories'));
    }

    public function edit($id){
        $recipe = Recipe::find($id);
        return view('course.edit',compact('recipe'));
    }

    public function save(Request $request){
        //return $request;
        // Validation rules
        $rules = [
            'name' => [
                'required',
                Rule::unique('recipes', 'name'),
            ],
            'image' => 'required',
            'status' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'name.required' => 'Recipe name is required.',
            'name.unique' => 'This Recipe is already available.',
            'image.required' => 'Image is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->slug = Str::slug($request->name, '-');
        $recipe->user_id = auth()->user()->id;
        $recipe->category_id = $request->category_id;
        $recipe->ingredients = $request->ingredients;
        $recipe->description = $request->description;
        $recipe->peoples = $request->peoples;
        $recipe->duration = $request->duration;
        $recipe->video = $request->video;
        $recipe->recipe = $request->recipe;
        $recipe->status = $request->status;
        // $book->image = $this->saveImage($request);
        if ($request->file('image')) {
            $recipe->image = $this->saveImage($request);
        }
        $recipe->save();
        return redirect()->route('recipe.list')->with('success','Recipe Created Successfully');
    }

    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'uploads/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function delete($id){
        $recipe = Recipe::find($id);
        if (!$recipe) {
            return redirect()->back()->with('error', 'Recipe not found');
        }
        if (file_exists($recipe->image)) {
            unlink($recipe->image);
        }
        $recipe->delete();
        return redirect()->back()->with('success', 'Recipe deleted successfully');
    }


    public function update(Request $request, $id)
    {

        // Validation rules
        $rules = [
            'crs_name' => [
                'required',
                Rule::unique('courses', 'crs_name')->ignore($id),
            ],
            'crs_code' => 'required',
            'crs_fee' => 'required',
            'status' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'crs_name.required' => 'Course is required.',
            'crs_name.unique' => 'The course is already available.',
            'crs_code.required' => 'Course Code is required.',
            'crs_fee.required' => 'Course Fee is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, update the student
        $course = Course::find($id);
        $course->crs_name = $request->crs_name;
        $course->slug = Str::slug($request->crs_name, '-');
        $course->crs_code = $request->crs_code;
        $course->crs_fee = $request->crs_fee;
        $course->crs_description = $request->crs_description;
        $course->status = $request->status;


        if ($request->file('crs_image')) {
            if (file_exists($course->crs_image)) {
                unlink($course->crs_image);
            }
            $course->crs_image = $this->saveImage($request);
        }

        $course->save();

        return redirect()->route('course.list')->with('success', 'Update Successfully');
    }


}
