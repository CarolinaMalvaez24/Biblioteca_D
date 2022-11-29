<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;
class Asigna_categoria extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'id_libro',
        'id_categoria'
    ];

    public function libros(){
        return $this->belongsToMany(libros::class);
    }
}
