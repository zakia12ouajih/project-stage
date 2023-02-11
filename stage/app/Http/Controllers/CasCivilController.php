<?php

namespace App\Http\Controllers;

use App\Models\cas_civil;
use App\Http\Requests\Storecas_civilRequest;
use App\Http\Requests\Updatecas_civilRequest;

class CasCivilController extends Controller
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
     * @param  \App\Http\Requests\Storecas_civilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecas_civilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cas_civil  $cas_civil
     * @return \Illuminate\Http\Response
     */
    public function show(cas_civil $cas_civil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cas_civil  $cas_civil
     * @return \Illuminate\Http\Response
     */
    public function edit(cas_civil $cas_civil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecas_civilRequest  $request
     * @param  \App\Models\cas_civil  $cas_civil
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecas_civilRequest $request, cas_civil $cas_civil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cas_civil  $cas_civil
     * @return \Illuminate\Http\Response
     */
    public function destroy(cas_civil $cas_civil)
    {
        //
    }
}
