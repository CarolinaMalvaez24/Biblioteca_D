<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;
class asigna_autores extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_libro',
        'id_autor'
    ];

    public function libros(){
        return $this->belongsToMany(libros::class);
    }
}
