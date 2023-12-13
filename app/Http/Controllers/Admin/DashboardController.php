<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;



class DashboardController extends Controller
{
    public function index(){
        $today = date("Y-m-d");
        $todaySale = Order::whereRaw('DATE(created_at) = ?', [$today])->sum('price');
        return view('backEnd.admin.admin',compact('todaySale'));
    }
}
