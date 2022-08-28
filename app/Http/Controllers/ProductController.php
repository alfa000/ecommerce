<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Product();
        return view('admin.product.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'img' => 'nullable|image',
            'desc' => 'nullable',
            'price' => 'required',
        ]);

        if ($request->file('img')) {
            $file = $request->file('img');
            $img_path = $file->store("product/img", 'public');
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'user_id' => Auth::user()->id,
            'img' => $img_path,
            'desc' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect(route('product.index'))->with('success', 'Data Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $model = $product;
        return view('admin.product.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'img' => 'nullable|image',
            'desc' => 'nullable',
            'price' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'user_id' => Auth::user()->id,
            'desc' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
        ];

        if ($request->file('img')) {
            $file = $request->file('img');
            $img_path = $file->store("product/img", 'public');
            $data['img'] = $img_path;
        }

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Data Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }
}
