<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\ProductCategory;
use Illuminate\Support\Facades\Session;
use App\Btw;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //producten code
    public function index()
    {
        $category = ProductCategory::all();
        return view('categorie', ['categorie' => $category]);
    }

    public function producten($categorie)
    {
        $producten = Product::where('categorie', $categorie)->get();
        return view('product', ['categorie' => $categorie, 'products' => $producten]);
    }


    //winkelwagen code
    public function AddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('categorie');
    }

    public function reduceCart($id){
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->reduce($id);

        $som = 0;
        foreach ($cart->items as $item) {
            $btw = Btw::find($item['items']['btw_id']);
            $btwVal = $btw['btw'] / 100;
            $y = $item['items']['prijs'] * $btwVal;
            $totPerProduct = $y + ($item['items']['prijs'] * $item['aantal']);
            $som += $totPerProduct;
        }
        $som = round($som, 2);

        Session::put('cart', $cart);
        return view('ShoppingCart', ['products' => $cart->items, 'totPrijs' => $cart->totPrijs, 'totAantal' => $cart->totAantal, 'totBtw' => $som]);
    }

    public function removeCart($id){
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->remove($id);

        $som = 0;
        foreach ($cart->items as $item) {
            $btw = Btw::find($item['items']['btw_id']);
            $btwVal = $btw['btw'] / 100;
            $y = $item['items']['prijs'] * $btwVal;
            $totPerProduct = $y + ($item['items']['prijs'] * $item['aantal']);
            $som += $totPerProduct;
            $cart->totBtw = $som;
        }
        $som = round($som, 2);

        Session::put('cart', $cart);
        return view('ShoppingCart', ['products' => $cart->items, 'totPrijs' => $cart->totPrijs, 'totAantal' => $cart->totAantal, 'totBtw' => $som]);
    }

    public function getCart() {
        if(!Session::has('cart')) {
            return view('ShoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $som = 0;
        foreach ($cart->items as $item) {
            $btw = Btw::find($item['items']['btw_id']);
            $btwVal = $btw['btw'] / 100;
            $y = $item['items']['prijs'] * $btwVal;
            $totPerProduct = $y + ($item['items']['prijs'] * $item['aantal']);
            $som += $totPerProduct;
            $cart->totBtw = $som;
        }
        $som = round($som, 2);

        return view('ShoppingCart', ['products' => $cart->items, 'totPrijs' => $cart->totPrijs, 'totAantal' => $cart->totAantal, 'totBtw' => $som]);
    }

    public function checkout() {
        if(!Session::has('cart')) {
            return view('ShoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totBtw;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')) {
            return view('ShoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        try {
            $order = new Order();
            $order->cart = serialize($cart);
            $order->user_id = Auth::user()->id;
        } catch (\exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        $order->save();
        Session::forget('cart');
        return redirect()->route('welcome')->with('success', 'Bestelling is ontvangen.');
    }
}
