<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        $totalProduct = DB::table('products')->sum('quantity');
        return view('products.create',['sum'=>$totalProduct]);
    
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'quantity'=> 'required|numeric',
            'price'=> 'required|decimal:2,4',
            'description' => 'nullable'

        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.app'));
    }
    public function edit($id){
        $productsArray = Product::where('id',$id)->first();
        return view('products.edit',compact('productsArray'));
    }
    public function productList(){
        $products = Product::all();
        return view('products.productList',compact('products'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required|decimal:0,2'
        ]);
        $productsArray = Product::where('id',$id)->first();
        $productsArray->name = $request->get('name');
        $productsArray->quantity = $request->get('quantity');
        $productsArray->price = $request->get('price');
        $productsArray->save();
        return redirect('/')->with('success','product updated successfully.');
    }
}
