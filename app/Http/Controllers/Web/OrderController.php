<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;





class OrderController extends Controller
{
    public function checkout(){
        $totalPrice = Cart::where('user_id', Auth()->user()->id)->sum('total_price');
        $carts = Cart::latest()->where('user_id', Auth()->user()->id)->get();
        return view('frontEnd.books.checkout',compact('totalPrice','carts'));
    }

    public function checkoutSave(Request $request){
        $totalPrice = Cart::where('user_id', Auth()->user()->id)->sum('total_price');
        $carts = Cart::where('user_id', Auth()->user()->id)->get();

        foreach ($carts as $row){
            $order = new Order();
            $order->user_id = Auth()->user()->id;
            $order->book_id = $row->book_id;
            $order->price = $row->total_price;
            $order->name = $request->name;
            $order->account = $request->account;
            $order->reference = $request->reference;
            $order->description = $request->description;
            $order->total_price = $request->total_price;
            $order->status = 1;
            if ($request->file('image')) {
                $order->image = $this->saveImage($request);
            }
            $order->save();

        }
        Cart::where('user_id',Auth::user()->id)->delete();
        return redirect(route('dashboard'))->with('success','Payment Recorded');

      // $carts = Cart::where('user_id',Auth::user()->id)->get();
      // $inv = New Invoice();
      // $inv->user_id =Auth::user()->id;
      // $inv->item = $carts->count();
      // $inv->amount = $carts->sum('amount');
      // $inv->save();

      // foreach($carts as $cart){
      //     $order = New Order();
      //     $order->invoice_id=$inv->id;
      //     $order->user_id=$cart->user_id;
      //     $order->product_id=$cart->product_id;
      //     $order->product_name = $cart->product_name;
      //     $order->qty=$cart->qty;
      //     $order->price=$cart->price;
      //     $order->amount=$cart->amount;
      //     $order->save();
      // }
      // $carts = Cart::where('user_id',Auth::user()->id)->delete();
      // Session::flash('success', 'Payment successful!');


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



}
