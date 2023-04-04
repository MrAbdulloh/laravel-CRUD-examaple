<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $projects = Product::all();
        return view('products.index')->with('projects', $projects);
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($id)
    {
        $product = Product::query()->findOrFail($id);
        return view('products.show')->with('product', $product);
    }

    public function store(Request $request)
    {
        Product::query()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::query()->findOrFail($id);
        return view('products.edit')->with('product', $product);
    }

    public function update(Request $request)
    {
        Product::query()->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('product', $product);

    }
}
