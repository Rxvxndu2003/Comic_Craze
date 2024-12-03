<?php

namespace App\Http\Controllers;
use App\Models\Accessories;

use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    //public function showProducts()
    public function fetchAccessories(Request $request)
    {
        $products = Accessories::all();
        return response()->json($products);
    }

    public function getProductDetails($id)
{
    $product = Accessories::findOrFail($id); // Fetch product details from the database
    return response()->json([
        'image' => $product->image,
        'name' => $product->name,
        'rating' => $product->rating,
        'price' => $product->price,
        'description' => $product->description
    ]);
}
public function show($id)
{
    $quick = Accessories::findOrFail($id); // Fetch the product by ID
    return view('pages.accessory', compact('quick')); // Pass product details to the view
}

}
