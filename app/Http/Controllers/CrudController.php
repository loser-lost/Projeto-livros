<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Livros;
use App\Models\User;
use App\Models\relacoes;

class CrudController extends Controller
{
    public function read(){
          
        if (Auth::check() === true){
            return view('Admin/read');
        }
        return redirect()->route('admin.login');
    }
    
    private $objLivros;
    private $abjUser;
    public function __construct()
    {
        //$this->objUser=new User();
        $this->objLivros=new Livros();
        //$this->objRel=new relacoes();
    }

    public function index(){
        //dd($this->objLivros->all());
        //dd($this->objRel->find(1));
        $livro=$this->objLivros->all()->sortBy(callback:'titulo');
        return view('Admin/read', compact(var_name:'livro'));
    }

}
