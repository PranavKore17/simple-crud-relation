<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        $products = Product::with('category')->get();
        return view('home',compact('products'));
    }

    public function create(){
        $catgories = Category::all();
        return view('products.create',compact('catgories'));
    }

    public function edit($id){
        $catgories = Category::all();
        $product = Product::find($id)->get();
        return view('products.edit',compact('product','catgories'));
    }

    public function store(Request $request){
        // dd($request->all());
        $input = $request->all();

        Product::create($input);

        return redirect()->route('home');
    }

    public function welcome(){
        return view('welcome');
    }


}
