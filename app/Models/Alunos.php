<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = ['nome', 'idade'];



    public function livros()
    {
        return $this->hasMany(Livros::class, 'aluno_id', 'id');
    }

}
