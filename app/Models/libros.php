<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\images;
use App\Models\categorias;
use App\Models\autores;
use App\Models\editoriales;
use App\Models\Prestamos;
use App\Models\Devoluciones;
use App\Models\ejemplares;

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

    public function prestamos(){
        return $this->belongsToMany(Prestamos::class);
    }

    public function devoluciones(){
        return $this->belongsToMany(Devoluciones::class);
    }
    public function ejemplares(){
        return $this->belongsTo(ejemplares::class);
    }
    public function estantes(){
        return $this->belongsTo(libros::class);
    }
}
