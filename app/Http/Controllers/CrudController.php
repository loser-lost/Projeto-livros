<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Livros;
use App\Models\User;
use App\Models\relacoes;

class CrudController extends Controller
{

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

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function show($id)
    {
    $livro=$this->objLivros->find($id);
    return view('Admin/show', compact(var_name:'livro'));
    
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroRequest $request)
    {
        $cad=$this->objLivros->create([
            'titulo'=>$request->titulo,
            'autor'=>$request->autor,
            'resumo'=>$request->resumo,
            'link'=>$request->link,
            'categoria'=>$request->categoria
        ]);
        if($cad){
            return redirect('livro');
        }
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro=$this->objLivros->find($id);
        return view('Admin/create', compact(var_name:'livro'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LivroRequest $request, $id)
    {
        $edi=$this->objLivros->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'autor'=>$request->autor,
            'resumo'=>$request->resumo,
            'link'=>$request->link,
            'categoria'=>$request->categoria
        ]);
        if($edi){
            return redirect('livro');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objLivros->destroy($id);
        return($del)?"Sim":"Não";
    }
}
