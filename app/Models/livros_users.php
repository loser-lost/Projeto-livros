<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_livro extends Model
{
    use HasFactory;

    protected $fillable = ['id_users', 'id_livros'];

    
}
