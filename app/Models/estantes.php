<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class estantes extends Model
{
    use HasFactory;
    protected $fillable=[
        'users_id',
        'ejemplares_id'
    ];

    public  function libros()
    {
        return $this->belongsToMany(libros::class());
    }
}
