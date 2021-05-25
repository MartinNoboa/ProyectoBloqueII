<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'url',
    ];
    public $timestamps = false;
    public function news()
    {
        return $this->hasMany(news::class,'id');
    }
    public function gallery()
    {
        return $this->hasMany(galleries::class,'id');
    }
}
