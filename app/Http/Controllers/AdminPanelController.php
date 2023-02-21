<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function admin()
    {
        return view('admin-panel.admin');
    }

  public function create(Request $request){

        $imgName = time() . '-' . $request->image->getClientOriginalName();
        $image = $request->image->move(public_path('img'), $imgName);
        $products = Product::create(['category_id'=> 2 ,'name' => $request->name, 'content' => $request->content, 'image' => $imgName, 'price' => $request->price]);
        return view('admin-panel.create-product',compact('products'));

    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('admin-panel.product-delete', compact('product'));
    }

    public function delete($id)
    {
        $cart = Product::find($id);
        Product::destroy($id);
        return view('admin-panel.admin');
    }

    public function catalog()
    {

            $products = Product::all();
            return view('admin-panel.catalog', compact('products'));

    }


    public function updatePage($id)
    {
        $product = Product::find($id);
        return view('admin-panel.update-product', compact('product'));
    }

    public function updateProduct(Request $request){

        $imgName = time() . '-' . $request->image->getClientOriginalName();
        $image = $request->image->move(public_path('img'), $imgName);
        $products = Product::where('id', $request->id)->update(['category_id'=> 2 ,'name' => $request->name, 'content' => $request->content, 'image' => $imgName, 'price' => $request->price]);
        return view('admin-panel.admin',compact('products'));

    }

}
