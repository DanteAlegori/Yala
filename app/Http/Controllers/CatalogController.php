<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use app\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{


    public function product($id = 0)
    {
        if ($id == 0) {
            $products = Product::all();
            return view('catalog.product', compact('products'));
        }

        $products = Product::where('category_id', $id)->get();
        return view('catalog.product', compact('products'));
    }
}
