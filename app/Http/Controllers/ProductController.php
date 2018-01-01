<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('Products.index', ['products' => $products]);
    }

    public function store (Request $request)
    {
        $title = $request->input('title');
        $file = $request->file('image');
        $destination = 'images';
        $filename = rand(1,999).'.'.$file-> guessClientExtension() ;
        $file-> move($destination,$filename);
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('category');

        $newitem = new Product;
        $newitem-> title = $title ;
        $newitem-> imagePath = '/images/'.$filename ;
        $newitem-> description = $description ;
        $newitem-> price = $price ;
        $newitem-> cat_type =$category ;

        $newitem-> save();
        return redirect()-> route('product.index');
    }
    public function addform()
    {
        return view('Products.additem');
    }
    public function showitemn()
    {
        $products = Product::where('cat_type','=','Normal')->get();
        return view('Products.items', ['products' => $products]);
    }
    public function showitems()
    {
        $products = Product::where('cat_type','=','Sale')->get();
        return view('Products.items', ['products' => $products]);

    }

}
