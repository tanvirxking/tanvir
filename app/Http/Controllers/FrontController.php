<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $product = Product::paginate(20); //Model alt all() or get() 
        return view('front.index', compact('product'));
    }

    public function singleProduct($id){
        $items = Product::find($id);
        return view('front.single-product',compact('items'));
    }
    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart', []);
        $cart[$id] = [
            'product_id' => $id,
            'name' => $product->productname,
            'price' => $product->productprice,
            'qty' => 1
        ];
       session()->put('cart', $cart);
       return redirect()->back(); 
    }
    public function clearCart(){
        session()->forget('cart');
        return redirect()->back(); 
    }

    public function checkout(){
        return view('front.checkout');
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
