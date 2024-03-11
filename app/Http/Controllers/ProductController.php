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
<<<<<<< HEAD
        // $data=Product::all();
        // $data = Category::paginate(15);
        $c = Category::first();
        dd($c->product);
        
        return view('product/product_list',compact('data'));
=======
        $data = Product::all();

        return view('product/product_list', compact('data'));
>>>>>>> b542a75e2dfcc24f55aa31216864a42aacfb4006
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/product_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $details = $request->input('details');
        $price = $request->input('price');
        Product::create(['name'=>$name,'details'=>$details,'price'=>$price]);
        // $data=$request->all();
        // Product::create($data);
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($product);
        return view('product/product_details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
