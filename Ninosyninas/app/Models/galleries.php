<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    use HasFactory;
    protected $fillable = [
        'evento',
        'image_id',
        'comentario',


    ];
    public function image()
    {
        
        return $this->belongsTo(images::class,'image_id');

    }
}
