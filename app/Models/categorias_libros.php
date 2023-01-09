<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class categorias_libros extends Model
{
    use HasFactory;
    protected $fillable=[
        'libros_id',
        'categorias_id'
    ];

    public function libros(){
        return $this->belongsToMany(libros::class);
    }
}
