<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $table ='Livros';
    protected $fillable=['titulo','autor','resumo','link','categoria'];

    public function fav(){
       //return $this->belongsToMany('App\Models\User');

        //return $this->belongsToMany(related: user::class, table: 'livros_users', foreignPivotKey:'id_livro', relatedPivotKey:'id_user');
     }

     

}

