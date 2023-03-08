<?php

namespace App\Http\Controllers;

use App\Models\cas_civil;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CasCivilController extends Controller
{

    // admin * user
    public function ajouteCivil(Request $request)
    {
        $lastOne = cas_civil::where('id_type', $request->type)->get('reste_sans_jugement')->last();
        $current = Carbon::now();
        $idTypeCount = cas_civil::where('id_type', "=", $request->type)->count();


        if ($idTypeCount == 0) {
            DB::table('cas_civils')->insert(
                [
                    'reste_derniere_session' => $request->reste_derniere_session,
                    'inscrit' => $request->inscrit,
                    'somme' => $request->reste_derniere_session + $request->inscrit,
                    'comdamne' => $request->comdamne,
                    'reste_sans_jugement' => ($request->reste_derniere_session + $request->inscrit) - $request->comdamne,
                    'date' => $current,
                    'id_type' => $request->type,
                    'data_user_enter' => Auth::user()->userName,
                ]
            );
        } else {
            // return 1;
            DB::table('cas_civils')->insert(
                [
                    'reste_derniere_session' => $lastOne->reste_sans_jugement,
                    'inscrit' => $request->inscrit,
                    'somme' =>  $lastOne->reste_sans_jugement + $request->inscrit,
                    'comdamne' => $request->comdamne,
                    'reste_sans_jugement' => ($lastOne->reste_sans_jugement + $request->inscrit) - $request->comdamne,
                    'date' => $current,
                    'id_type' => $request->type,
                    'data_user_enter' => Auth::user()->userName,
                ]
            );
        }


        
        
        $role = Auth::user()->role;
        if($role==1){
            return redirect()->route('ajouter_civil')->with('success', '');
        }
        else{
            return redirect()->route('ajouter_civil_user')->with('success', '');
        }    
    }

    public function createCivilNew(Request $request)
    {
        $idTypeCount = cas_civil::where('id_type', "=", $request->type)->count();
        $a = $_POST['type'];
        return view('admin.formDonneeCivil2', compact("a", 'idTypeCount'));
    }

    // admin * user
    public function viewCasCivil()
    {
        $role = Auth::user()->role;
        $data2 = DB::table('cas_types')->where('genre', '=', 'civil')->get();
        if($role==1){
            return view('admin.monthCasCivilSearch',compact('data2'));
        }
        else{
            return view('user.viewCasCivilSearch');

        }    
    }

    // admin
    public function monthCasCivil(Request $request){
        $data = cas_civil::get()->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->where('id_type','=',$request->type);
        return view('admin.viewCasCivil',compact('data'));

    }

    // admin * user
    public function modifierCivil(Request $request, $id)
    {
        DB::table('cas_civils')->where('id', $id)->update([
            'reste_derniere_session' => $request->reste_derniere_session,
            'inscrit' => $request->inscrit,
            'somme' => $request->reste_derniere_session + $request->inscrit,
            'comdamne' => $request->comdamne,
            'reste_sans_jugement' => ($request->reste_derniere_session + $request->inscrit) - $request->comdamne,
            'date' => $request->date,
            'id_type' => $request->type,
            'data_user_enter' => Auth::user()->userName,
        ]);
        
        $role = Auth::user()->role;
        if($role==1){
            return redirect()->route('viewCasCivil')->with('success' ,'');
        }
        else{
            return redirect()->route('viewCasCivil_user')->with('success', '');
        }  
    }


    //admin * user
    public function staticCasCivil(){
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.staticCasCivilAdminSearch');
        } else {
            return view('user.staticCasCivilUserSearch');
        }  
    }

    // admin * user
    
    public function CasCivilT(Request $request){
        $data = cas_civil::get()->where('date', '=', $request->input('search'));
        return view('user.viewCasCivil',compact('data'));

    }
    
    // admin *user
    public function statisticC(Request $request){
        

        $data = cas_civil::select(
            DB::raw('sum(reste_derniere_session) as sumRest'), 
            DB::raw('sum(inscrit) as sumInscrit'),
            DB::raw('sum(somme) as sumSum'),
            DB::raw('sum(comdamne) as sumComdamne'),
            DB::raw('sum(reste_sans_jugement) as sumRSJ'),
            DB::raw('id_type')
        )
        ->with('cas_type')
        ->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])
        ->groupBy('id_type')
        ->get();
        
        $somme = cas_civil::select(
            DB::raw('sum(reste_derniere_session) as finalRest'),
            DB::raw('sum(inscrit) as finalInscrit'),
            DB::raw('sum(somme) as finalSomme'),
            DB::raw('sum(comdamne) as finalComdamne'),
            DB::raw('sum(reste_sans_jugement) as finalRSJ')
        )
        ->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')])
        ->get();
        
            
            // $sommeRSJ= cas_civil::with('cas_type')->whereBetween('date',[$request->input('datefrom'),$request->input('dateto')]);
        
        // return $data;
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.staticCasCivilAdmin', compact('data','somme'));
        } else {
            return view('user.staticCasCivilUser', compact('data', 'somme'));
        }  
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     // admin * user
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cas_civil  $cas_civil
     * @return \Illuminate\Http\Response
     */

    
    // admin
    public function editCivil($id)
    {
        $modi = DB::table('cas_civils')->where('id', $id)->first();
        $data = DB::table('cas_types')->where('genre', '=', 'civil')->get();
        return view('admin.editCasCivil', compact('modi', 'data'));
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cas_civil  $cas_civil
     * @return \Illuminate\Http\Response
     */

     // admin
    public function destroyCivil($id)
    {
        DB::table('cas_civils')->where('id', $id)->delete();
        return redirect()->route('viewCasCivil')->with('success', '');
    }
}
