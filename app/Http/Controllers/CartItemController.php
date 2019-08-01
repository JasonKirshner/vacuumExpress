<?php

namespace App\Http\Controllers;

use App\CartItem;
use Illuminate\Http\Request;
use App\Http\Requests\CartItemStoreRequest;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CartItem::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartItemStoreRequest $request)
    {
        return CartItem::create([
            'product_id' => $request['product_id'],
            'cart_id' => $request['cart_id'],
            'quantity' => $request['quantity']
        ])->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cart_id
     * @return \Illuminate\Http\Response
     */
    public function show($cart_id)
    {
        return CartItem::where('cart_id', $cart_id)->get()->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(['quantity' => 'required|min:1|max:20']);

        return CartItem::findOrFail($id)->update(['quantity' => $validated['quantity']])->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return CartItem::findOrFail($id)->delete()->toJson();
    }
}
