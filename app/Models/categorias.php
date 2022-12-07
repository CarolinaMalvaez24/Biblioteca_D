<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class categorias extends Model
{
    use HasFactory;
    protected $fillable=[
        'tipo_categoria'
    ];

    public  function libros()
    {
        return $this->belongsToMany(libros::class());
    }
}
