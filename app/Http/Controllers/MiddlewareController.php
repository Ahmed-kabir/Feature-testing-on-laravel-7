<?php

namespace App\Http\Controllers;


use App\Middleware;
use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        echo "about";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Middleware  $middleware
     * @return \Illuminate\Http\Response
     */
    public function show(Middleware $middleware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Middleware  $middleware
     * @return \Illuminate\Http\Response
     */
    public function edit(Middleware $middleware)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Middleware  $middleware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Middleware $middleware)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Middleware  $middleware
     * @return \Illuminate\Http\Response
     */
    public function destroy(Middleware $middleware)
    {
        //
    }
}
