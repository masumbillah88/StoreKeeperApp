<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class SaleController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        return view('products.sale', ['products'=>$products]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            
        ]);
        $products = Product::findOrFail($validatedData['product_id']);
        $price = $validatedData['quantity']*$validatedData['price'];
        $sale = Sale::create([
            'product_id'=>$products->id,
            'quantity'=>$validatedData['quantity'],
            'price'=> $validatedData['price']
        ]);
        $products->decrement('quantity', $validatedData['quantity']);
        return redirect()->route('sale.index')->with('success', 'Sale completed successfully');
    }
}
