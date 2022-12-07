<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\images;
use App\Models\categorias;
use App\Models\autores;
use App\Models\editoriales;

class libros extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'titulo',
        'anio',
        'descripcion',
        'editoriales_id',
    ];

    public function categorias(){
        return $this->belongsToMany(categorias::class);
    }

    public function autores(){
        return $this->belongsToMany(autores::class);
    }
    public function image(){
        return $this->morphOne(images::class,'imageable');
    }

    public function editoriales(){
        return $this->belongsTo(editoriales::class);
    }
}
