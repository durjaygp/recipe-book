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
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserPanelController;
use App\Http\Controllers\Admin\AdminRecipeController;
use App\Http\Controllers\Admin\BlogController;






// =============== All Routes ===============
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/recipes', [RecipeController::class,'index'])->name('home.recipes');
Route::get('/books', [BookController::class,'index'])->name('home.books');
Route::get('/blog/{slug}', [HomeController::class,'blogDetails'])->name('home.blogDetails');
Route::get('/book/{slug}', [BookController::class,'details'])->name('book.details');
Route::get('/contact-us', [PagesController::class,'contact'])->name('home.contact');
Route::post('/book/add-to-cart',[CartController::class,'cartToSave'])->name('cart.save');
Route::get('/cart', [CartController::class,'index'])->name('home.cart');
Route::get('/cart/remove/{id}', [CartController::class,'remove'])->name('cart.remove');

Route::get('/checkout', [OrderController::class,'checkout'])->name('home.checkout');
Route::post('/checkout/save', [OrderController::class,'checkoutSave'])->name('checkout.save');

Route::get('/dashboard', function () {
    return view('userPanel.admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/my-books',[UserPanelController::class,'index'])->name('user.myBooks');
    Route::get('/dashboard/book/read',[UserPanelController::class,'read'])->name('myBooks.read');











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

    //========== Blog Routes =================
    Route::get('admin/blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::get('admin/blog',[BlogController::class,'index'])->name('blog.list');
    Route::post('admin/blog/save',[BlogController::class,'save'])->name('blog.save');
    Route::get('admin/blog/delete/{id}', [BlogController::class,'delete'])->name('blog.delete');
    Route::get('admin/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('admin/blog/update', [BlogController::class, 'update'])->name('blog.update');

    //========== Recipe Routes =================
    Route::get('/admin/recipe/create',[AdminRecipeController::class,'create'])->name('recipe.create');
    Route::get('/admin/recipe',[AdminRecipeController::class,'index'])->name('recipe.list');
    Route::post('/admin/recipe/save',[AdminRecipeController::class,'save'])->name('recipe.save');
    Route::get('admin/recipe/delete/{id}', [AdminRecipeController::class,'delete'])->name('recipe.delete');
    Route::get('admin/recipe/edit/{id}',[AdminRecipeController::class,'edit'])->name('recipe.edit');
    Route::post('admin/recipe/update', [AdminRecipeController::class, 'update'])->name('recipe.update');

    //========== Order List ================
    Route::get('/admin/order',[AdminOrderController::class,'index'])->name('order.list');
    Route::get('/admin/order/pending',[AdminOrderController::class,'pendingOrder'])->name('pendingOrder.list');
    Route::get('/admin/order/delete/{id}',[AdminOrderController::class,'cartDelete'])->name('order.delete');
    Route::get('/admin/order/approve/{id}',[AdminOrderController::class,'orderStatus'])->name('order.approve');


    // ============ Personal Update ==========
    Route::get('admin/personal-details',[AdminController::class,'index'])->name('personal.details');



});











require __DIR__.'/auth.php';
