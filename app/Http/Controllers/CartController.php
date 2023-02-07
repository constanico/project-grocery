<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
        $cart = Cart::where('userId','=',$id)->get();
        return view('cart.index', compact('cart'));
    }

    public function addToCart($id) {
        $user = Auth::user();
        $item = Item::find($id);

        $cart = new Cart;
        $cart->name = $user->firstName;
        $cart->itemName = $item->name;
        $cart->price = $item->price;
        $cart->image = $item->image;
        $cart->itemId = $item->id;
        $cart->userId = $user->id;

        $cart->save();

        return redirect('home');
    }

    public function deleteCart($id) {
        $cart = DB::table('carts')->where('id', $id)->first();

        if(isset($cart)) {
            $cart = DB::table('carts')->where('id', $id)->delete();
        }

        return redirect('/home');
    }

    public function checkout() {
        Cart::where('userId', auth()->id())->delete();

        return view('cart.success');
    }
}
