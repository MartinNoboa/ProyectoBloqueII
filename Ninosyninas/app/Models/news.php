<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $fillable = [
        'evento',
        'titulo',
        'contenido'
    ];
    const CREATED_AT = 'fecha';
}
