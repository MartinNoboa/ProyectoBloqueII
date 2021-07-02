<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;

    protected $table = "areas";
    protected $fillable = [
        'area',
        'descripcion'
    ];

    public function getNombreCompletoAttribute(){
        $nombreCompleto = ucfirst($this->area);
        return $nombreCompleto;
    }
}
