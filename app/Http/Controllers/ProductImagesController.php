<?php

namespace App\Http\Controllers;

use App\Models\Product_images;
use App\Http\Requests\StoreProduct_imagesRequest;
use App\Http\Requests\UpdateProduct_imagesRequest;

class ProductImagesController extends Controller
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
     * @param  \App\Http\Requests\StoreProduct_imagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_imagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_images  $product_images
     * @return \Illuminate\Http\Response
     */
    public function show(Product_images $product_images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_images  $product_images
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_images $product_images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_imagesRequest  $request
     * @param  \App\Models\Product_images  $product_images
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_imagesRequest $request, Product_images $product_images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_images  $product_images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_images $product_images)
    {
        //
    }
}
