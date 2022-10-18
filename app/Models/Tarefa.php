<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'data',
        'user_id',
        'categoria_id'
    ];

    public function user()
    {
        return $this->belongsTo(User
        ::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
