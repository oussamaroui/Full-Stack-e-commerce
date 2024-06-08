<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function index(Request $request)
    {
        return response()->json(Basket::all());
    }


    public function indexWeb(Request $request)
    {
        $products = Basket::all();
        return view('dashboard.bought', compact('products'));
    }

    public function addToBasket(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|string',
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $basket = new Basket();
        $basket->image = $validated['image'];
        $basket->name = $validated['name'];
        $basket->price = $validated['price'];
        $basket->save();

        return response()->json(['message' => 'Product added to basket successfully!'], 200);
    }

    public function destroy($id)
    {
        $product = Basket::findOrFail($id);
        $product->delete();
        
        return response()->json(['message' => 'Product removed successfully'], 200);
    }
}
