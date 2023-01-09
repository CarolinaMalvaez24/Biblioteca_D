<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoluciones extends Model
{
    use HasFactory;
    protected $fillable=['estantes_id','observaciones',
    ];
}
