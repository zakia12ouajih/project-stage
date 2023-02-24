<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class User extends Controller
{




    public function viewUsers(Request $request){
        $data = DB::table('users')->paginate(5);
        return view('admin.viewUsers', compact('data'));
    }



    public function editUser($id)
    {
        $modiUser = DB::table('users')->where('id', $id)->first();
        return view('admin.editUser', compact('modiUser'));
    }



    public function destroyUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('viewAdminUser');
    }



    public function modifierUser(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'userName' => $request->userName,
            'role' => $request->role,
            'email' => $request->email,
        ]);
        return redirect()->route('viewAdminUser');
    }
}
