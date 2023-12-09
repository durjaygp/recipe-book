<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        $orders = Order::latest()->where('status',0)->where('user_id',auth()->user()->id)->get();
        return view('userPanel.book.index',compact('orders'));
    }
    public function read(){
        return view('userPanel.book.show');
    }
}
