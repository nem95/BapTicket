<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){
        return view("auth.login");
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect('/');
        }else{
            return redirect('/');;
        }
    }

    
    public function showRegister(){
        return view("auth.register");
    }
    public function register(Request $request){
        
        $user = new User;
        $user->surname = $request->surname;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password) ;
        $user->save();

        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
