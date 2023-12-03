<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\RecipeController;
use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Admin\AdminCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/recipes', [RecipeController::class,'index'])->name('home.recipes');
Route::get('/books', [BookController::class,'index'])->name('home.books');
Route::get('/contact-us', [PagesController::class,'contact'])->name('home.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'isadmin'])->group(function(){

    Route::get('/admin',[DashboardController::class,'index'])->name('admin.index');

    //======== Category Routes ==========

    Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('category.index');
    Route::post('/admin/category/save',[AdminCategoryController::class,'save'])->name('category.save');


});











require __DIR__.'/auth.php';
