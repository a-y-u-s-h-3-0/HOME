<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User1Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin',[User1Controller::class,'admin']);

Route::get('/about',function(){
    return view('about');
});



Route::get('/contact',function(){
    return view('contact');
});

Route::get("/",[User1Controller::class,'home']); 

Route::resource("category",CategoryController::class);

Route::get("/register",[User1Controller::class,'index']);

Route::get("/login",[User1Controller::class,'index1']);

Route::post("/login_user",[User1Controller::class,'login']);

Route::post("/register_user",[User1Controller::class,'register']);


Route::resource('product', ProductController::class);


Route::get("/users",[User1Controller::class,'getAllUser']);

Route::get('/more/{id}',[User1Controller::class,'more']);

Route::get('/cart',[CartController::class,'getCartItem']);
Route::get('/minus/{id}',[CartController::class,'minus']);
Route::get('/plus/{id}',[CartController::class,'plus']);
Route::get('/confirm',[CartController::class,'confirm']);
Route::get('/remove/{id}',[CartController::class,'removeCart']);
Route::get('/addcart/{id}',[CartController::class,'addtocart']);

Route::get('/orders',[CartController::class,'orders']);

Route::get("/shop",[User1Controller::class,'shop']); 


Route::get("/shop1/{id}",[User1Controller::class,'shop1']); 

Route::post('/search',[User1Controller::class,'search']);


Route::get('/logout', function () {
    session()->flush();  // Clears all session data
    return redirect('/');
});