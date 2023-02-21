<?php

namespace App\Http\Controllers;

use App\Models\cas_delis;
use App\Http\Requests\Storecas_delisRequest;
use App\Http\Requests\Updatecas_delisRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CasDelisController extends Controller
{

    public function ajoute(Request $request)
    {
        DB::table('cas_delis')->insert(
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
        $role = Auth::user()->role;
        if($role==1){
            return redirect()->route('ajouter_delis');
        }
        else{
            return redirect()->route('ajouter_delis_user');
        }  
    }

    public function viewCasDelis()
    {
        $data = cas_delis::with('cas_type')->paginate(5);
        $role = Auth::user()->role;
        if($role==1){
            return view('admin.viewCasDelis', compact('data'));
        }
        else{
            return view('user.UsviewCasD', compact('data'));
        }
    }
    public function StatisticD(Request $request){
        $data = cas_delis::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->paginate(5);
        return view('user.staticCasDelisUser', compact('data'));
            
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
        $role = Auth::user()->role;
        if($role==1){
            return view('admin.formDonneeDelis', compact('data'));
        }
        else{
            return view('user.UsformDonneeD', compact('data'));
        }
    }

    public function modifier(Request $request, $id)
    {


        DB::table('cas_delis')->where('id', $id)->update([
            'reste_derniere_session' => $request->reste_derniere_session,
            'inscrit' => $request->inscrit,
            'somme' => $request->reste_derniere_session + $request->inscrit,
            'comdamne' => $request->comdamne,
            'reste_sans_jugement' => $request->reste_sans_jugement,
            'date' => $request->date,
            'id_type' => $request->type,
            'data_user_enter' => Auth::user()->userName,
        ]);
        $role = Auth::user()->role;
        if($role==1){
            return redirect()->route('viewCasDelis');
        }
        else{
            return redirect()->route('viewCasDelisUser');
        }  
    }
    public function staticCasDelisUser(){
        return view('user.staticCasDelisUserSearch');
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
    public function edit($id)
    {
        $modi = DB::table('cas_delis')->where('id', $id)->first();
        $data = DB::table('cas_types')->get();
        return view('admin.editCasCivil', compact('modi', 'data'));
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
    public function destroy($id)
    {
        DB::table('cas_delis')->where('id', $id)->delete();
        return redirect()->route('viewCasDelis');
    }
}
