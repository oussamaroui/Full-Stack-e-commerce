<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $productCount = Product::count();
        $basketCount = Basket::count();
        $totalBasketPrice = Basket::sum('price');
        $productNames = Product::pluck('name');
        $productPrices = Product::pluck('price');
        $basketNames = Basket::pluck('name');
        $basketPrices = Basket::pluck('price');

        return view('home', compact('products', 'productCount', 'basketCount', 'totalBasketPrice'));
    }

    public function products()
    {
        $products = Product::all();
        return view('dashboard.index', compact('products'));
    }

    public function productsAPI()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create a new product
        $product = new Product();
        $product->image = $imagePath;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/')->with('status', 'Product created successfully!');
    }
}
