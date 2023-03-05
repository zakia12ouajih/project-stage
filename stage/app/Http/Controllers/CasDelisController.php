<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\cas_delis;
use App\Http\Requests\Storecas_delisRequest;
use App\Http\Requests\Updatecas_delisRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CasDelisController extends Controller
{

    public function ajouteDelis(Request $request)
    {
        $lastOne = cas_delis::where('id_type', $request->type)->get('reste_sans_jugement')->last();
        $current = Carbon::now();
        $idTypeCount = cas_delis::where('id_type', "=", $request->type)->count();

        

        if ($idTypeCount == 0) {
            
            DB::table('cas_delis')->insert(
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
            DB::table('cas_delis')->insert(
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
        if ($role == 1) {
            return redirect()->route('ajouter_delis')->with('success', '');
        } else {
            return redirect()->route('ajouter_delis_user')->with('success', '');
        }
    }

    public function getData(Request $request)
    {
        $data = cas_delis::get()->where('date', '=', $request->input('search'));
        // return $data;
        return view('admin.viewCasDelis', compact('data'));
    }

    public function viewCasDelis()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.monthCasDelisSearch');
        } else {
            return view('user.viewCasDélisSearch');
        }
    }
    public function CasDelisT(Request $request)
    {
        $data = cas_delis::with('cas_type')->where('date', [$request->input('search')])->paginate(5);
        // return $data;
        return view('user.UsviewCasD ', compact('data'));
    }
    public function statisticD(Request $request)
    {
        $data = cas_delis::with('cas_type')->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->get();
        $sommeTable = cas_delis::count();
        $sommerest = 0;
        $sommeinscrit = 0;
        $sommeSum = 0;
        $sommecondamne = 0;
        $sommeRSJ = 0;
        for ($i = 0; $i <= $sommeTable; $i++) {

            $sommerest = cas_delis::with('cas_type')->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->sum('reste_derniere_session');
        }
        for ($i = 0; $i <= $sommeTable; $i++) {

            $sommeinscrit = cas_delis::with('cas_type')->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->sum('inscrit');
        }
        for ($i = 0; $i <= $sommeTable; $i++) {

            $sommeSum = cas_delis::with('cas_type')->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->sum('somme');
        }
        for ($i = 0; $i <= $sommeTable; $i++) {

            $sommecomdamne = cas_delis::with('cas_type')->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->sum('comdamne');
        }
        for ($i = 0; $i <= $sommeTable; $i++) {

            $sommeRSJ = cas_delis::with('cas_type')->whereBetween('date', [$request->input('datefrom'), $request->input('dateto')])->sum('reste_sans_jugement');
        }
        // return $data;
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.staticCasDelisAdmin', compact('data', 'sommerest', 'sommeinscrit', 'sommeSum', 'sommecomdamne', 'sommeRSJ'));
        } else {
            return view('user.staticCasDelisUser', compact('data', 'sommerest', 'sommeinscrit', 'sommeSum', 'sommecomdamne', 'sommeRSJ'));
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createDelisNew(Request $request){
        $idTypeCount = cas_delis::where('id_type', "=", $request->type)->count();
        $a = $_POST['type'];
        return view('admin.formDonneeDelis2',compact("a",'idTypeCount'));
    }
    public function createDelis()
    {

        $data = DB::table('cas_types')->where('genre', '=', 'delis')->get();
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.formDonneeDelis', compact('data'));
        } else {
            return view('user.UsformDonneeD', compact('data'));
        }
    }

    public function modifierDelis(Request $request, $id)
    {
        DB::table('cas_delis')->where('id', $id)->update([
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
        if ($role == 1) {
            return redirect()->route('viewCasDelisAdmin')->with('success', '');
        } else {
            return redirect()->route('viewCasDelisUser')->with('success', '');
        }
    }
    public function staticCasDelis()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.staticCasDelisSearch');
        } else {

            return view('user.staticCasDelisUserSearch');
        }
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
    public function editDelis($id)
    {
        $modi = DB::table('cas_delis')->where('id', $id)->first();
        $data = DB::table('cas_types')->where('genre', '=', 'delis')->get();
        return view('admin.editCasDelis', compact('modi', 'data'));
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
    public function destroyDelis($id)
    {
        DB::table('cas_delis')->where('id', $id)->delete();
        return redirect()->route('viewCasDelisAdmin');
    }
}
