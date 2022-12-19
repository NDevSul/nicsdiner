<?php

namespace App\Http\Controllers;

use App\Models\FoodGallery;
use App\Http\Requests\StoreFoodGalleryRequest;
use App\Http\Requests\UpdateFoodGalleryRequest;

class FoodGalleryController extends Controller
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
     * @param  \App\Http\Requests\StoreFoodGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodGallery  $foodGallery
     * @return \Illuminate\Http\Response
     */
    public function show(FoodGallery $foodGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodGallery  $foodGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodGallery $foodGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodGalleryRequest  $request
     * @param  \App\Models\FoodGallery  $foodGallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodGalleryRequest $request, FoodGallery $foodGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodGallery  $foodGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodGallery $foodGallery)
    {
        //
    }
}
