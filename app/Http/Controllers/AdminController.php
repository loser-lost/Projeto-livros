<?php

namespace App\Http\Controllers;
use app\Models\User;

use Illuminate\Http\Request;
use resources\views\admim;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function dashboard(){
          
        if (Auth::check() === true){
            return view('dashboard');
        }
        return redirect()->route('admin.login');
    }
    
    /*
    public function InserirUser(){
        $user = User::get();
        return view('Admin.CadUser', [
            'user' => $user,
        ]);

    }*/


    public function autenticate(Request $request){
        

        $credentials = $request->validate([
            'email' => ['required', 'email'], 
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(
                ['email' => 'the provided credentialsdo not match our records.']
            
        );
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');

    }
    
    
    public function Loginform(){
        return view('login');
    }

    //public function dashboard(){
      
    //    return view('admin');
    //}
}
