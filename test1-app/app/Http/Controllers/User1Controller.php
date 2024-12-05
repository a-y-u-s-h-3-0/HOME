<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class User1Controller extends Controller
{
    //
    public function index(){
        return view('regsiter');
    }

    public function index1(){
        return view('login');
    }

    public function login(Request $request)
{
    $request->validate([
        "username" => "required|string",
        "password" => "required|string",
    ]);

    // Check for admin credentials
    if ($request->username === "admin" && $request->password === "admin") {
        return redirect("admin");
    }

    // Fetch user from the database
    $user = User1::where("username", $request->username)->first();

    // Validate user
    if (strcmp($request->password, $request->password)==0) {
        session()->put('user', $user);
        return redirect("/");

    }else{
       
        return redirect("login")->withErrors(["username" => "Invalid Username or Password"]);

    }

    // Store user session
   
}



public function register(Request $request)
{
    $request->validate([
        "fullname" => "required|string",
        "username" => "required|string|unique:user",
        "password" => "required|min:6",
        "con_password" => "required|same:password",
        "email" => "required|email|unique:user",
        "address" => "required|string",
        "mobileno" => "required|numeric|digits:10"
    ]);

    // Create new user instance
    $user = new User1();
    $user->fullname = $request->fullname;
    $user->password = $request->password; // Hash the password
    $user->address = $request->address;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->mobileno = $request->mobileno;
    $user->save();

    return redirect("/register")->withSuccess('Registered Successfully!!!');
}



    public function getAllUser(){
        $data=User1::get();
        return view('adminuser',compact('data'));
    }


    public function home(){
        $cat=Category::get();
        $product=Product::get();
        return view('home',compact('cat','product'));
        
    }

    public function more($id){
        $product=Product::where('_id',$id)->first();
        return view('productdetail',compact('product'));
    }    public function admin(){
        $c_count=Category::count();
        $u_count=Category::count();
        $p_count=Category::count();
        $o_count=Cart::where('status',1)->count();
        $r=Cart::where('status',1)->sum('total');
        $data=Cart::where('status',1)->latest()->get();

        $o_count=Cart::where('status',1)->count();
        return view('adminhome',compact('c_count','u_count','p_count','o_count','r','data'));


    }

    public function shop(){
        $product=Product::get();
        return view('shop',compact('product'));
        
    }

    public function shop1($id){
        $product=Product::where('category',$id)->get();
        return view('shop',compact('product'));
        
    }

    public function search(Request $request) {
        // $cats=Category::get();
        $product=Product::where('product_name','LIKE','%'.$request->search."%")->get();
        return view('shop',compact('product'));
    }

}