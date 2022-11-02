<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editoriales extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'nombre_editorial'
    ];
}
