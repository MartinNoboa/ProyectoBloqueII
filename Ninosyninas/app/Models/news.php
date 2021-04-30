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
        'contenido',
        'fecha',
        'image_id',
    ];
    // const CREATED_AT = 'fecha';
    // public $timestamps = false;
    public function image()
    {
        
        return $this->belongsTo(images::class,'image_id');

    }

}
