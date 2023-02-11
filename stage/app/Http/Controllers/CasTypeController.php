<?php

namespace App\Http\Controllers;

use App\Models\cas_type;
use App\Http\Requests\Storecas_typeRequest;
use App\Http\Requests\Updatecas_typeRequest;

class CasTypeController extends Controller
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
     * @param  \App\Http\Requests\Storecas_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecas_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cas_type  $cas_type
     * @return \Illuminate\Http\Response
     */
    public function show(cas_type $cas_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cas_type  $cas_type
     * @return \Illuminate\Http\Response
     */
    public function edit(cas_type $cas_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecas_typeRequest  $request
     * @param  \App\Models\cas_type  $cas_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecas_typeRequest $request, cas_type $cas_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cas_type  $cas_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(cas_type $cas_type)
    {
        //
    }
}
