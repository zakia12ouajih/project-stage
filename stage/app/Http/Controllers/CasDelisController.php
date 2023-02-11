<?php

namespace App\Http\Controllers;

use App\Models\cas_delis;
use App\Http\Requests\Storecas_delisRequest;
use App\Http\Requests\Updatecas_delisRequest;

class CasDelisController extends Controller
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
     * @param  \App\Http\Requests\Storecas_delisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecas_delisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cas_delis  $cas_delis
     * @return \Illuminate\Http\Response
     */
    public function show(cas_delis $cas_delis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cas_delis  $cas_delis
     * @return \Illuminate\Http\Response
     */
    public function edit(cas_delis $cas_delis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecas_delisRequest  $request
     * @param  \App\Models\cas_delis  $cas_delis
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecas_delisRequest $request, cas_delis $cas_delis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cas_delis  $cas_delis
     * @return \Illuminate\Http\Response
     */
    public function destroy(cas_delis $cas_delis)
    {
        //
    }
}
