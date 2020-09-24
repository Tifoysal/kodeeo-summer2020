<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::all();
        return view('layouts.product-list',compact('products'));
    }

    public function showCreateForm()
    {
        return view('layouts.product-create');
    }


    public function store(Request $request)
    {

        $photo = $request->file('product_image');

        $file_name = '';


        if ($photo) {
            $file_name = date('Ymdhis').$photo->getClientOriginalName();
            $photo->move(public_path('images'), $file_name);
        }


        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'qty'=>'30',
            'image'=>$file_name
        ]);

        return redirect()->route('product.list');

    }

    public function view($id)
    {
// 1      Product::find($id);
// 2   Product::where('id',$id)->first();
// 3      select * from products where id=$id;
        $thisProduct=Product::find($id);
       return view('layouts.product-view',compact('thisProduct'));
    }
}
