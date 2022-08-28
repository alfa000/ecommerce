<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy('DESC')->limit(10)->get();
        return view('home', compact('products'));
    }

    public function detail(Product $product)
    {
        return view('detail', compact('product'));
    }

    public function addCart(Product $product)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'qty' => 1,
        ]);

        return redirect(route('cart'));
    }

    public function cart()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart', compact('carts'));
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('checkout', compact('carts'));
    }
}
