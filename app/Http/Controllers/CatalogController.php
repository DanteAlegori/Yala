<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{


    public function product()
    {

            $products = Product::all();
            return view('catalog.product', compact('products'));

    }



    public function about()
    {

            $products = Product::limit(4)->get();
            return view('info.about-us', compact('products'));

    }



    public function detail($id)
    {
        $product = Product::find($id);
        return view('catalog.one-product', compact('product'));
    }



}
