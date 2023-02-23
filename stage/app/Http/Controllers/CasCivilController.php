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


    public function ajouteCivil(Request $request)
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
        
        $role = Auth::user()->role;
        if($role==1){
            return redirect()->route('ajouter_civil')->with('success', '');
        }
        else{
            return redirect()->route('ajouter_civil_user')->with('success', '');
        }    
    }


    public function viewCasCivil()
    {
        $data = cas_civil::with('cas_type')->paginate(5);
        $role = Auth::user()->role;
        if($role==1){
            return view('admin.viewCasCivil', compact('data'));
        }
        else{
            return view('user.viewCasCivil', compact('data'));
        }    
    }

    public function modifierCivil(Request $request, $id)
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
        $role = Auth::user()->role;
        if($role==1){
            return redirect()->route('viewCasCivil')->with('success', '');
        }
        else{
            return redirect()->route('viewCasCivil_user')->with('success', '');
        }  
    }

    public function staticCasCivil(){
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.staticCasCivilAdminSearch');
        } else {
            return view('user.staticCasCivilUserSearch');
        }  
    }
    public function CasCivilS(Request $request){
        // $data = cas_civil::with('cas_type')->where('date',[$request->input('dateS')]);
        return view('user.viewCasCivilSearch');
    }
    
    public function StatisticC(Request $request){
        $data = cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->paginate(5);
        $sommeTable=cas_civil::count();
        $sommerest=0;
        $sommeinscrit=0;
        $sommeSum=0;
        $sommecondamne=0;
        $sommeRSJ=0;
        for ($i=0; $i <=$sommeTable ; $i++) { 
            
            $sommerest= cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->sum('reste_derniere_session');
        }
        for ($i=0; $i <=$sommeTable ; $i++) { 
            
            $sommeinscrit= cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->sum('inscrit');
        }
        for ($i=0; $i <=$sommeTable ; $i++) { 
            
            $sommeSum= cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->sum('somme');
        }
        for ($i=0; $i <=$sommeTable ; $i++) { 
            
            $sommecomdamne= cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->sum('comdamne');
        }
        for ($i=0; $i <=$sommeTable ; $i++) { 
            
            $sommeRSJ= cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])->sum('reste_sans_jugement');
        }
        // return $data;
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.staticCasCivilAdmin', compact('data','sommerest','sommeinscrit','sommeSum','sommecomdamne','sommeRSJ'));
        } else {
            return view('user.staticCasCivilUser', compact('data','sommerest','sommeinscrit','sommeSum','sommecomdamne','sommeRSJ'));
        }  
        
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
    public function createCivil()
    {
        $data = DB::table('cas_types')->where('genre', '=', 'civil')->get();
        $role = Auth::user()->role;
        if($role==1){
            return view('admin.formDonneeCivil', compact('data'));
        }
        else{
            return view('user.UsformDonneeC', compact('data'));
        }
        
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
    public function editCivil($id)
    {
        $modi = DB::table('cas_civils')->where('id', $id)->first();
        $data = DB::table('cas_types')->where('genre', '=', 'civil')->get();
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
    public function destroyCivil($id)
    {
        DB::table('cas_civils')->where('id', $id)->delete();
        return redirect()->route('viewCasCivil')->with('success', '');
    }
}
