<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\RecipeController;
use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminBookController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Admin\AdminOrderController;



// =============== All Routes ===============
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/recipes', [RecipeController::class,'index'])->name('home.recipes');
Route::get('/books', [BookController::class,'index'])->name('home.books');
Route::get('/book/{slug}', [BookController::class,'details'])->name('book.details');
Route::get('/contact-us', [PagesController::class,'contact'])->name('home.contact');
Route::post('/book/add-to-cart',[CartController::class,'cartToSave'])->name('cart.save');
Route::get('/cart', [CartController::class,'index'])->name('home.cart');
Route::get('/cart/remove/{id}', [CartController::class,'remove'])->name('cart.remove');

Route::get('/checkout', [OrderController::class,'checkout'])->name('home.checkout');
Route::post('/checkout/save', [OrderController::class,'checkoutSave'])->name('checkout.save');

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
    Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('category.create');
    Route::post('/admin/category/save',[AdminCategoryController::class,'save'])->name('category.save');

    //========== Book Routes =================
    Route::get('/admin/book/create',[AdminBookController::class,'create'])->name('book.create');
    Route::get('/admin/book',[AdminBookController::class,'index'])->name('book.list');
    Route::post('/admin/book/save',[AdminBookController::class,'save'])->name('book.save');
    Route::get('admin/book/delete/{id}', [AdminBookController::class,'delete'])->name('book.delete');
    Route::get('admin/book/edit/{id}',[AdminBookController::class,'edit'])->name('book.edit');
    Route::post('admin/book/update', [AdminBookController::class, 'update'])->name('book.update');

    //========== Order List ================
    Route::get('/admin/order',[AdminOrderController::class,'index'])->name('order.list');
    Route::get('/admin/order/pending',[AdminOrderController::class,'pendingOrder'])->name('pendingOrder.list');



});











require __DIR__.'/auth.php';
