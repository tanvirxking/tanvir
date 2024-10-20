<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(20); //Model alt all() or get() 
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $validator = $request->validate([
            'productname' => 'required|string|max:20',
            'productdescription' => 'required|string|max:200',
            'productcatagory' => 'required',
            'productprice' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png|max:2024'
        ]);
        
        
        $product = new Product;

        if (isset($request->photo)) {
            $filename = time() . '.' . $request->photo->extension();
            $upload_path = public_path('upload/product');
            $request->photo->move($upload_path, $filename);
            $product->photo = $filename;
        }
      

        $product->productname = $request->productname;
        $product->productdescription = $request->productdescription;
        $product->productcatagory = $request->productcatagory;
        $product->productprice = $request->productprice;


       $result =   $product->save();
        if ($result ){
            session()->put('success', 'Product Add Successfully!!');
        }
        
        return redirect('/products');
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
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'productname' => 'required|string|max:20',
            'productdescription' => 'required|string|max:90',
            'productcatagory' => 'required',

            'productprice' => 'required',

            'photo' => 'nullable|mimes:jpg,jpeg,png|max:512'
        ]);




        $product = Product::find($id);

        if (isset($request->photo)) {
            $filename = time() . '.' . $request->photo->extension();
            $upload_path = public_path('upload/product');
            $request->photo->move($upload_path, $filename);
            $product->photo = $filename;
        }



        $product->productname = $request->productname;
        $product->productdescription = $request->productdescription;
        $product->productcatagory = $request->productcatagory;
        $product->productprice = $request->productprice;


        $product->save();

        session()->flash('success', 'Product Save Success!!');

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);  //Model 
        //return $student;
        if ($product->photo != '' && file_exists(public_path('upload/product/' . $product->photo))) {
            unlink(public_path('upload/product/' . $product->photo)); //for file delete
        }
        $product->delete();
        return redirect('/products');
    }
}
