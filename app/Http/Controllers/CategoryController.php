<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //show create category form
    public function create()
    {
        return view('layouts.category.create');
    }

    public function store(Request $request)
    {

        Category::create([
            'name'=>$request->category_name,
            'status'=>$request->status
            //column name=>input field name
        ]);

        return redirect()->back()->with('msg','Category Created successfully.');
    }
}
