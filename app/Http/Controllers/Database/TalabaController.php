<?php

namespace App\Http\Controllers;

use App\Models\Talaba;
use Illuminate\Http\Request;

class TalabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Talaba::all();
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
     * @param  \App\Models\Talaba  $talaba
     * @return \Illuminate\Http\Response
     */
    public function show(Talaba $talaba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talaba  $talaba
     * @return \Illuminate\Http\Response
     */
    public function edit(Talaba $talaba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talaba  $talaba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talaba $talaba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talaba  $talaba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talaba $talaba)
    {
        //
    }
}
