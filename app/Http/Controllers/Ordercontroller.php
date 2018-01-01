<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;


class Ordercontroller extends Controller
{
    public function addtorder (Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('carto') ? Session::get('carto') : null;
        $cart = new Order($oldCart);
        $cart->addorder($product, $product->id);
        $request->session()->put('carto', $cart);
        return redirect()->route('product.index');
    }

    public function getCart()
    {
        if (!Session::has('carto')) {
            return view('Cart.orderlist');
        }
        $oldCart = Session::get('carto');
        $cart = new Order($oldCart);
        return view('Cart.orderlist', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function deleteitem ($id)
    {
        $oCart = Session::has('carto') ? Session::get('carto') : null;
        $cart1 = new Order($oCart);
        $cart1->removeItem($id);

        if (count($cart1->items) > 0) {
            Session::put('carto', $cart1);
        } else {
            Session::forget('carto');
        }

        return redirect()->route('Order.Show');
    }
    public function deleteCart()
    {
        if (!Session::has('carto')) {
            echo "There are no Orders !";
        }
         Session::forget ('carto');
        return redirect()->route('Order.Show');
    }
}
