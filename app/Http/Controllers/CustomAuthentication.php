<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

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

    public function signIn(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:16'
        ]);

        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('/');
            }else{
                return back()->with('fail','Password does not match');
            }
        }
        else{
            return back()->with('fail','This email is not registered');
        }
    }
}
