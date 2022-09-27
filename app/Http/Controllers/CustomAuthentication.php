<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthentication extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function signUp(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:16'
        ]);
        $user = new User();
        $user-> name = $request -> name;
        $user-> email = $request -> email;
        $user-> password = Hash::make($request -> password);
        $res = $user->save();

        if($res){
            return back()->with('success','Your sign up was successful');
        }
        else{
            return back()->with('fail','Ooops!! Something went wrong');
        }

    }
}
