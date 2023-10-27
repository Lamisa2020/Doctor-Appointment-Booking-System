<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register(Request $request){
        //dd(0);
        $request->validate([
            "role_id" => 'required',
        ]);

        $account = new User();

        $account->role_id = $request->role_id;
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = Hash::make($request['password']);

        $account->save();
        return back();
    }
}
