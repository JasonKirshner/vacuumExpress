<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    /**
     * Display all Products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all()->toJson();
    }

    /**
     * Display all Products on sale.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOnSale()
    {
        return Product::where('salePrice', '>', 0)->get()->toJson();
    }

    /**
     * Store a new Product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();

        $validated['img_name']->store('products');

        return Product::create($validated)->toJson();
    }

    /**
     * Display the specified Product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::findOrFail($id)->toJson();
    }

    /**
     * Update the specified Product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        return Product::findOrFail($id)->update($request->validated())->toJson();
    }

    /**
     * Remove the specified Product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
