<?php

namespace App\Http\Controllers;

use App\Models\cas_type;
use App\Http\Requests\Storecas_typeRequest;
use App\Http\Requests\Updatecas_typeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CasTypeController extends Controller
{

    public function ajoute(Request $request)
    {
        DB::table('cas_types')->insert(
            [
                'code_type' => $request->code_type,
                'nom_type' => $request->nom_type,
                'genre' =>$request->genre,
            ]
        );
        return redirect()->Route('ajouter_cas');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function viewCas()
    {
        $data = DB::table('cas_types')->paginate(5);
        return view('admin.viewCas', compact('data'));
    }

    public function modifier(Request $request, $id)
    {
        DB::table('cas_types')->where('id', $id)->update([
            'code_type' => $request->code_type,
            'nom_type' => $request->nom_type,
            'genre' =>$request->genre,
        ]);
        return redirect()->Route('viewCas');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formCas');
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
    public function edit($id)
    {
        $modi = DB::table('cas_types')->where('id', $id)->first();
        return view('admin.editCas', compact('modi'));
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
    public function destroy($id)
    {
        DB::table('cas_types')->where('id', $id)->delete();
        return redirect()->route('viewCas');
    }
}
