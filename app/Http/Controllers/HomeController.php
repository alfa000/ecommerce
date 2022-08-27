<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::orderBy('DESC')->limit(10)->get();
        return view('home', compact('items'));
    }

    public function detail(Item $item)
    {
        return view('detail', compact('item'));
    }
}
