<?php

namespace App\Http\Controllers;

use App\Models\testimony;
use App\Http\Requests\StoretestimonyRequest;
use App\Http\Requests\UpdatetestimonyRequest;

class TestimonyController extends Controller
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
     * @param  \App\Http\Requests\StoretestimonyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretestimonyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetestimonyRequest  $request
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetestimonyRequest $request, testimony $testimony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimony $testimony)
    {
        //
    }
}
