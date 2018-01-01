<?php

namespace App\Http\Controllers;

use App\WishList;
use App\Product;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class wishlistcontroller extends Controller
{
    public function addtorder (Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cartw') ? Session::get('cartw') : null;
        $cart = new WishList($oldCart);
        $cart->addorder($product, $product->id);
        $request->session()->put('cartw', $cart);
        return redirect()->route('product.index');
    }

    public function getCart()
    {
        if (!Session::has('cartw')) {
            return view('Cart.wishlist');
        }
        $oldwCart = Session::get('cartw');
        $cart = new WishList($oldwCart);
        return view('Cart.wishlist', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function removew ($id)
    {
        $wCart = Session::has('cartw') ? Session::get('cartw') : null;
        $cart = new WishList($wCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cartw', $cart);
        } else {
            Session::forget('cartw');
        }

        return redirect()->route('Wishlist.Show');
    }
    public function deleteAll()
    {
        if (!Session::has('cartw')) {
            echo "There are no Wishlist Orders !";
        }
        Session::forget ('cartw');
        return redirect()->route('Wishlist.Show');
    }
}
