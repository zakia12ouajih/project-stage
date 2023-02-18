<?php

namespace App\Http\Controllers;

use App\Models\cas_civil;
use App\Http\Requests\Storecas_civilRequest;
use App\Http\Requests\Updatecas_civilRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CasCivilController extends Controller
{


    public function ajoute(Request $request)
    {
        DB::table('cas_civils')->insert(
            [
                'reste_derniere_session' => $request->reste_derniere_session,
                'inscrit' => $request->inscrit,
                'somme' => $request->reste_derniere_session + $request->inscrit,
                'comdamne' => $request->comdamne,
                'reste_sans_jugement' => $request->reste_sans_jugement,
                'date' => $request->date,
                'id_type' => $request->type,
                'data_user_enter' => Auth::user()->userName,
            ]
        );
        return redirect()->route('ajouter_civil');
    }


    public function viewCasCivil()
    {
        $data = cas_civil::with('cas_type')->paginate(5);
        return view('admin.viewCasCivil', compact('data'));
    }

    public function modifier(Request $request, $id)
    {


        DB::table('cas_civils')->where('id', $id)->update([
            'reste_derniere_session' => $request->reste_derniere_session,
            'inscrit' => $request->inscrit,
            'somme' => $request->reste_derniere_session + $request->inscrit,
            'comdamne' => $request->comdamne,
            'reste_sans_jugement' => $request->reste_sans_jugement,
            'date' => $request->date,
            'id_type' => $request->type,
            'data_user_enter' => Auth::user()->userName,
        ]);
        return redirect()->route('viewCasCivil');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('cas_types')->get();
        return view('admin.formDonneeCivil', compact('data'));
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
    public function edit($id)
    {
        $modi = DB::table('cas_civils')->where('id', $id)->first();
        $data = DB::table('cas_types')->get();
        return view('admin.editCasCivil', compact('modi', 'data'));
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
    public function destroy($id)
    {
        DB::table('cas_civils')->where('id', $id)->delete();
        return redirect()->route('viewCasCivil');
    }
}
