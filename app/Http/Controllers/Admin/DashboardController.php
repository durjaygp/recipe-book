<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;



class DashboardController extends Controller
{
    public function index(){
        $today = date("Y-m-d");
        $todaySale = Order::whereRaw('DATE(created_at) = ?', [$today])->sum('price');

        $totalSale = Order::sum('price');
        $totalOrder = Order::count();
        $totalBooks = Book::count();
        $totalBlogs = Blog::count();
        $totalUser = User::count();
        $orders = Order::latest()->where('status',0)->take(5)->get();
        return view('backEnd.admin.admin',compact('orders','todaySale','totalSale','totalOrder','totalBooks','totalBlogs','totalUser'));
    }
}
