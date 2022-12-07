<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class editoriales extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_editorial'
    ];
    public function libros(){
        return $this->hasMany(libros::class);
    }
}
