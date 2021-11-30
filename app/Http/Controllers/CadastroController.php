<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest as RequestsUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{

    private $objLivros;
    private $abjUser;
    public function __construct()
    {
        $this->objUser=new User();
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Cadastro()
    {
        return view('User/Cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $cad=$this->objUser->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->newPassword),
        ]);
        if($cad){
            return view('login');
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
        $User=$this->objUser->find($id);
        return view('User/Editar', compact(var_name:'user'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $edi=$this->objUser->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        if($edi){
            return redirect('dashboard');
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
        $del=$this->objUser->destroy($id);
        return($del)?"Sim":"Não";
    }}
