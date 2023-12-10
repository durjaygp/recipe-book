<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Validator;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();
        return view('backEnd.blog.index',compact('blogs'));
    }

    public function create(){
        return view('backEnd.blog.create');
    }

    public function edit($id){
        $recipe = Blog::find($id);
        return view('course.edit',compact('recipe'));
    }

    public function save(Request $request){
        //return $request;
        // Validation rules
        $rules = [
            'name' => [
                'required',
                Rule::unique('blogs', 'name'),
            ],
            'image' => 'required',
            'status' => 'required',
            'description' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'name.required' => 'Blog name is required.',
            'name.unique' => 'This Blog is already available.',
            'description.required' => 'Description is required.',
            'image.required' => 'Image is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $recipe = new Blog();
        $recipe->name = $request->name;
        $recipe->slug = Str::slug($request->name, '-');
        $recipe->user_id = auth()->user()->id;
        $recipe->description = $request->description;
        $recipe->main_content = $request->main_content;
        $recipe->status = $request->status;
        // $book->image = $this->saveImage($request);
        if ($request->file('image')) {
            $recipe->image = $this->saveImage($request);
        }
        $recipe->save();
        return redirect()->route('blog.list')->with('success','Blog Created Successfully');
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
