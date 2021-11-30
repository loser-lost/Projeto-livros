<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivrosUsers extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_users', 'id_livros','created_at','uptated_at'];
}
