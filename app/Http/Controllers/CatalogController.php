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

    public function create(){

$products = Product::created(['name','contend','image','price']);
return view('admin-panel.create-product',compact('products'));

    }
}
