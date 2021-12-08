<?php

namespace App\Http\Controllers;

use App\Models\Product_review;
use App\Http\Requests\StoreProduct_reviewRequest;
use App\Http\Requests\UpdateProduct_reviewRequest;

class ProductReviewController extends Controller
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
     * @param  \App\Http\Requests\StoreProduct_reviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_reviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function show(Product_review $product_review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_review $product_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_reviewRequest  $request
     * @param  \App\Models\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_reviewRequest $request, Product_review $product_review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_review $product_review)
    {
        //
    }
}
