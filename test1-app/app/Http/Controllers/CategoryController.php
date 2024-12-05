<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Category::paginate(3);
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "category_name" => "required | Unique:category",
                "category_pic" => "required"
            ]
        );
        $imageName = "category_" . time() . "." . $request->category_pic->extension();
        //cateogy_123.jpg
        $request->category_pic->move(public_path("img"), $imageName);
        $imgpath = "/img/" . $imageName;
        //insert code
        $table = new Category();
        $table->category_name = $request->category_name;
        $table->category_pic = $imgpath;
        $table->save();
        return redirect("category")->withSuccess("inserted successfully..");
    }
    public function show(Category $category)
    {
        //2
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate(
            [
                "category_name" => "required",

            ]
        );
        $table = category::find($category->_id);
        if (isset($request->category_pic)) {
            $imageName = "category_" . time() . "." . $request->category_pic->extension();
            //cateogy_123.jpg
            $request->category_pic->move(public_path("img"), $imageName);
            $imgpath = "/img/" . $imageName;
            //insert code
            $table->category_pic = $imgpath;
        }


        $table->category_name = $request->category_name;
        $table->save();


        return redirect("category")->withSuccess("updated successfully..");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('category')->withSuccess("Deleted Sucessfully");
    }
}
