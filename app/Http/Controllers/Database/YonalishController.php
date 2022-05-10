<?php

namespace App\Http\Controllers;

use App\Models\Yonalish;
use Illuminate\Http\Request;

class YonalishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Yonalish::all();
        return $list;
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
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function show(Yonalish $yonalish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function edit(Yonalish $yonalish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yonalish $yonalish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yonalish  $yonalish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yonalish $yonalish)
    {
        //
    }
}
