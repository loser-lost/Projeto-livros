<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionControler extends Controller
{
    public function session(){
        
        
        Session::put('email', 'loser@gmail.com');
        echo Session::get('email');
       

        //Session::flash('message','Criadoooooooooooooooooooooooooooooooooooo');
       // echo Session::get('message');
        var_dump(Session::all());
    }
}
