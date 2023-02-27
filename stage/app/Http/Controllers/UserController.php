<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    


    public function register()
    {

        $attributes = request()->validate([
            'userName' => ['required', 'string', 'max:255'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);

        return redirect()->route('viewAdminUser');
    }

    

    public function returnView(){
        return view('admin.registerUserAdmin');
    }

    
    


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
