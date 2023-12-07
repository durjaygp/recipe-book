<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::latest()->where('user_id', Auth()->user()->id)->get();
        $totalPrice = Cart::where('user_id', Auth()->user()->id)->sum('total_price');
        return view('frontEnd.books.cart',compact('carts','totalPrice'));
    }
    public function cartToSave(Request $request)
    {
        if(Auth::check()){
            $cartChk = Cart::where('user_id', Auth::user()->id)
                ->where('book_id', $request->book_id) // Use 'book_id' instead of 'id'
                ->first();

            if($cartChk){
                return redirect(route('home.cart'))->with('warning', 'This book is already in your cart');
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->book_id = $request->book_id;
                $cart->total_price = $request->total_price;
                $cart->book_name = $request->book_name;
                $cart->save();
                return redirect(route('home.cart'))->with('success', 'Book added to Cart Successfully');
            }
        } else {
            return redirect()->route('login')->with('warning', 'Please login first');
        }
    }

    public function remove($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success','Removed Successfully');
    }

}
