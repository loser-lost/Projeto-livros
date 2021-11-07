<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $table ='Livros';

    public function user(){
        return $this->belongsToMany('App\Models\User','relacoes' , 'id_livros', 'id_user');
     }
}