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

    public function slider()
    {

            $products = Product::limit(4)->get();
            return view('main', compact('products'));

    }

    public function create(Request $request){

        $imgName = time() . '-' . $request->image->getClientOriginalName();
        $image = $request->image->move(public_path('img'), $imgName);
        $products = Product::create(['name' => $request->name, 'content' => $request->content, 'image' => $imgName, 'price' => $request->price]);
        return view('admin-panel.create-product',compact('products'));

    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('catalog.one-product', compact('product'));
    }


    public function admin()
    {
        return view('admin-panel.admin');
    }
}
