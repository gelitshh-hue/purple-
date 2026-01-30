<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Product = Product::all();
    return view('Products.index', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
    return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        return view('Product.edit', compact('Product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $Product)
    {
        $Product->update($request->all());
    return redirect()->route('Product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();
    return redirect()->route('Product.index');
    }
}
