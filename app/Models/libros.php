<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\asigna_autores;
use App\Models\Asigna_categoria;

class libros extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'descripcion',
        'anio',
        'id_editoriales',
    ];

    public function asigna_autor(){
        return $this->belongsToMany(asigna_autores::class);
    }

    public function asigna_categoria(){
        return $this->belongsToMany(Asigna_categoria::class);
    }
}
