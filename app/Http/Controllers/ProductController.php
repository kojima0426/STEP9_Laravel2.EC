<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Sale;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();

    return view('products.index', compact('products'));
}

public function show($id)
{
    $product = Product::find($id);

    return view('products.show', compact('product'));
}

 public function purchase(Product $product)
    {
    return view('products.purchase', compact('product'));
    }

    public function purchaseStore(Request $request, Product $product)
    {

    if ($product->stock <= 0) {
        return redirect()->back()->with('error', '在庫がありません。');
    }


    $quantity = $request->quantity;
    if ($quantity > $product->stock) {
    return redirect()->back()->with('error', '在庫が足りません。');
}

    $product->stock -= $quantity;
    $product->save();

    Sale::create([
        'product_id' => $product->id,
        'user_id' => auth()->id(),
        'quantity' => $quantity,
        'total_price' => $product->price * $quantity,
    ]);

    return redirect()->route('products.index');
    }
}
