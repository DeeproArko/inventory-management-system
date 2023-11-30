<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard()
    {
        $product = Product::all();
        return view('frontend.master', compact('product'));
    }
}
