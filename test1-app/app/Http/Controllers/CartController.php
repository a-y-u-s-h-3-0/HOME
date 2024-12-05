<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function getCartItem()
    {
        $user = session()->get('user');
        if ($user != null) {
            $total = Cart::where('status', 0)
                ->where('uid', $user->_id)->sum('total');

            $address = $user->address;

            $data = Cart::where('status', 0)
                ->where('uid', $user->_id)->get();
            return view('cart', compact('data','total','address'));
        } else {
            return redirect("login")->withSuccess("Login to continue....");
        }
    }

    public function addtocart($id)
    {
        $user = session()->get('user');
        if ($user != null) {
            $cart = Cart::where('status', 0)
                ->where('pid', $id)->first();
            if ($cart == null) {
                $product = Product::where('_id', $id)->first();
                $c = new Cart();
                $c->uid = $user->_id;
                $c->pid = $product->_id;
                $c->pname = $product->product_name;
                $c->ppic = $product->product_pic;
                $c->price = (int) $product->product_price;
                $c->username = $user->username;
                $c->qty = 1;
                $c->total = (int) $product->product_price;
                $c->status = 0;
                $c->date = date('mm:dd:yyyy hh:mm:ss');
                $c->save();
            } else {
                $cart->qty = $cart->qty + 1;
                $cart->total = $cart->qty * $cart->price;
                $cart->save();
            }
            return redirect('cart');
        } else {
            return redirect("login")->withSuccess("Login to continue....");
        }
    }

    public function minus($id)
    {
        $cart = Cart::where("_id", $id)->first();
        if ($cart->qty != 1) {
            $cart->qty = $cart->qty - 1;
            $cart->total = $cart->qty * $cart->price;
            $cart->save();
        }
        return redirect('cart');
    }


    public function plus($id)
    {
        $cart = Cart::where("_id", $id)->first();
        if ($cart->qty != 10) {
            $cart->qty = $cart->qty + 1;
            $cart->total = $cart->qty * $cart->price;
            $cart->save();
        }
        return redirect('cart');
    }

    public function removeCart($id)
    {
        $cart = Cart::where("_id", $id)->delete();
        return redirect('cart');
    }

    public function orders()
    {
        $data = Cart::where('status', 1)->get();
        return view('order', compact('data'));
    }

    public function confirm(){
        $user=session()->get('user');

        $data=Cart::where('uid',$user->_id)
        ->where('status',0)
        ->get();
        foreach($data as $i){
            $i->status=1;
            $i->save();
        }
        return back()->withSuccess("Order Placed Successfully!!!");
    }
}
