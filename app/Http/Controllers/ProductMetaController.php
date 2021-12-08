<?php

namespace App\Http\Controllers;

use App\Models\Product_meta;
use App\Http\Requests\StoreProduct_metaRequest;
use App\Http\Requests\UpdateProduct_metaRequest;

class ProductMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct_metaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_metaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_meta  $product_meta
     * @return \Illuminate\Http\Response
     */
    public function show(Product_meta $product_meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_meta  $product_meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_meta $product_meta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_metaRequest  $request
     * @param  \App\Models\Product_meta  $product_meta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_metaRequest $request, Product_meta $product_meta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_meta  $product_meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_meta $product_meta)
    {
        //
    }
}
