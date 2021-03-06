<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Item;

class CartController extends Controller
{
    public function index()
    {
        $user = \Auth::user();

        $carts = $user->carts;

        return view('user.cart.index', compact('carts'));
    }

    public function store(Request $request)
    {
        $user = \Auth::user();

        $values = Cart::where('user_id', $user->id)->where('item_id', $request->item_id)->get();


        if ($values->isEmpty()) {
            $cart = new Cart; 

            $cart->user_id = $user->id;
            $cart->item_id = $request->item_id;
            $cart->num = $request->input('num');
            $cart->save();
        } else {
            foreach ($values as $value) {
                $value->num = $value->num + $request->num;
                $value->save();
            };
            
        }

        return redirect()->route('user.cart.index');
    }

    public function update(Request $request, $cart)
    {   
        $cart = Cart::find($cart);

        $cart->num = $request->num;
        $cart->save();
        
        return back();
    }

    public function destroy($cart)
    {
        $cart = Cart::find($cart);
        $cart->delete();

        return back();
    }
}
