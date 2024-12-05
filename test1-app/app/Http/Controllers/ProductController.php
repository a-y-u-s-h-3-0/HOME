<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Product::paginate(5);
        return view('product.index', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories=Category::get();
        return view('product.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_desc' => 'required|string',
            'product_price' => 'required|numeric|min:0',
            'product_discount' => 'required|numeric|min:0|max:100',
            'product_pic' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'category' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'detail_desc' => 'required|string',
            'primary_material' => 'required|string|max:100',
            'weight' => 'required',
        ]);


        $imageName = "product_pic" . time() . "." . $request->product_pic->extension();
        //cateogy_123.jpg
        $request->product_pic->move(public_path("img"), $imageName);
        $imgpath = "/img/" . $imageName;
        
        
        //
        $table = new Product();
        $table->product_name = $request->product_name;
        $table->product_desc = $request->product_desc;
        $table->product_price=$request->product_price;
        $table->product_discount = $request->product_discount;
        $table->product_pic=$imgpath;
        $table->category = $request->category;
        $table->color = $request->color;
        $table->detail_desc=$request->detail_desc;
        $table->primary_material=$request->primary_material;
        $table->weight=$request->weight;
        $table->save();
        return redirect('product')->withSuccess("Inserted Succesfully");




    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categories=Category::get();
        return view('product.edit',compact('product','categories'));    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
       
        
        //
        $table = Product::find($product->_id);

        if(isset($request->product_pic)){
            $imageName = "product_pic" . time() . "." . $request->product_pic->extension();
            //cateogy_123.jpg
            $request->product_pic->move(public_path("img"), $imageName);
            $imgpath = "/img/" . $imageName;
            $table->product_pic=$imgpath;

            


        }
        
        $table->product_name = $request->product_name;
        $table->product_desc = $request->product_desc;
        $table->product_pric=$request->product_pric;
        $table->product_discount = $request->product_discount;
        $table->category = $request->category;
        $table->color = $request->color;
        $table->detail_desc=$request->detail_desc;
        $table->primary_material=$request->primary_material;
        $table->weight=$request->weight;
        $table->save();
        return redirect('product')->withSuccess("Updtaed  Succesfully");




    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect("product")->withSuccess("Deleted Successfully !!..");
    }
}
