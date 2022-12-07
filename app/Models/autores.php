<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class autores extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_autor'
    ];

    public  function libros()
    {
        return $this->belongsToMany(libros::class());
    }
}
