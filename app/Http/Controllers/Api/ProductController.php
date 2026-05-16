<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Endpoint 3: Fetches the whole clothes collection list dynamically
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Faith & Fashion Collection retrieved successfully.',
            'collection' => Product::all()
        ], 200);
    }

    // Endpoint 4: Handles adding items to the cart and calculating subtotals
    public function addToCart(Request $request)
    {
        // 1. Validate that the product exists and the quantity is valid
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::find($request->product_id);

        // 2. Safety Check: Make sure there's enough physical inventory left
        if ($product->stock_quantity < $request->quantity) {
            return response()->json([
                'status' => 'error',
                'message' => "Sorry, only {$product->stock_quantity} units left in stock."
            ], 400);
        }

        // 3. Return the exact computing data needed by Kent's Flutter app interface
        return response()->json([
            'status' => 'success',
            'message' => "{$product->name} has been added to your cart!",
            'cart_item' => [
                'product_id' => $product->id,
                'sku' => $product->sku,
                'name' => $product->name,
                'category' => $product->category,
                'unit_price' => $product->price,
                'quantity' => (int)$request->quantity,
                'subtotal' => $product->price * $request->quantity
            ]
        ], 200);
    }
}
