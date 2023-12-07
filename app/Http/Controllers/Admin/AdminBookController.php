<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Str;

class AdminBookController extends Controller
{
    public function index(){
        $books = Book::latest()->get();
        return view('backEnd.book.index',compact('books'));
    }

    public function create(){
        return view('backEnd.book.create');
    }

    public function edit($id){
        $course = Book::find($id);
        return view('course.edit',compact('course'));
    }

    public function save(Request $request){
        // Validation rules
        $rules = [
            'name' => [
                'required',
                Rule::unique('books', 'name'),
            ],
            'price' => 'required',
            'image' => 'required',
            'status' => 'required',
        ];

        // Validation messages (customize these as needed)
        $messages = [
            'name.required' => 'Book name is required.',
            'crs_name.unique' => 'The Book is already available.',
            'price.required' => 'Price is required.',
            'image.required' => 'Image is required.',
            'status.required' => 'Status is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $book = new Book();
        $book->name = $request->name;
        $book->slug = Str::slug($request->name, '-');
        $book->price = $request->price;
        $book->publish_date = $request->publish_date;
        $book->pages = $request->pages;
        $book->total_recipe = $request->total_recipe;
        $book->description = $request->description;
        $book->body = $request->body;
        $book->status = $request->status;
        // $course->image = $this->saveImage($request);
        if ($request->file('image')) {
            $book->image = $this->saveImage($request);
        }
        if ($request->file('file')) {
            $book->file = $this->saveFile($request);
        }
        $book->save();
        return redirect()->route('book.list')->with('success','Book Created Successfully');
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

    public function saveFile($request)
    {
        $this->image = $request->file('file');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'uploads/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function delete($id){
        $book = Book::find($id);

        if (!$book) {
            return redirect()->back()->with('error', 'Book not found');
        }

        if (file_exists($book->image)) {
            unlink($book->image);
        }

        if (file_exists($book->file)) {
            unlink($book->file);
        }

        $book->delete();

        return redirect()->back()->with('success', 'Book deleted successfully');
    }


    public function updateCourse(Request $request, $id)
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
