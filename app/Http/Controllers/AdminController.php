<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use App\Models\LivrosUsers;

use Illuminate\Http\Request;
use resources\views\admim;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{

    public function __construct()
    {
        //$this->objUser=new User();
        $this->objLivros=new Livros();
        $this->objlu=new LivrosUsers();
      
    }

    public function favoritos(LivrosUsers $request){

        $cad=$this->objlu->create([

            Auth::user()->id=>$request->id_users,
            'id'=>$request->id_livros,
            

        ]);
        if($cad){
            return redirect('dashboard');
        }
    
        //auth::user()->id;

    }

    private function CheckSession(){
        return session()->has('user');
    }
    public function dashboard(){
          
        if (Auth::check() === true){
            $livro=$this->objLivros->all()->sortBy(callback:'titulo');
            return view('dashboard', compact(var_name:'livro'));
        }
        return redirect()->route('admin.login');
    }
    
    public function autenticate(Request $request){
        
        //if(!$request->isMethod('')){}

        $credentials = $request->validate([
            'email' => ['required', 'email'], 
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            session()->put('user', $credentials);
           return redirect()->route('admin.dashboard');
            
        }
        return back()->withErrors(
                ['email' => 'Email e/ou Senha incorretos.']
            
        );
    }

    public function logout(){
        Session::forget('user');
        
        Auth::logout();
        return redirect()->route('admin.login');

    }
    
    
    public function Loginform(){
        if($this->CheckSession()){
            return redirect()->route('admin.dashboard');
        }else{
            return view('login');
        }
    }

    //public function dashboard(){
      
    //    return view('admin');
    //}
}
