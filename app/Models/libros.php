<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;
    protected $fillable=[
        'descripcion',
        'anio',
        'id_editoriales',
        'id_categorias'
    ];
}
