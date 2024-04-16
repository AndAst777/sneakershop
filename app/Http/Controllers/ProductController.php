<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('main', compact("products"));
        // $post = Post::all();
        // return view('admin', compact("posts"));
    }

    public function basket()
    {
        $products = Product::all();
        return view('basket', compact("products"));
        // $post = Post::all();
        // return view('admin', compact("posts"));
    }



    public function admin()
    {
        $products = Product::all();
        return view('admin', compact("products"));
        // $post = Post::all();
        // return view('admin', compact("posts"));
    }


    public function show(string $id)
    {

        $products = Product::findOrFail($id);
        return view("product", compact('products'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $request->file('image')->store('images', 'public');
        $product->save();

        return redirect()->route('admin')->with('success', 'Product created successfully');
    }

    public function destroy(Product $product){
    $product->delete();

    return redirect()->route('admin')->with('succes', 'Product delete succesfully');
    }
}
