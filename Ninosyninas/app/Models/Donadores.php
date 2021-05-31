<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Donadores extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = "donadores";
    protected $fillable = 
    [
        'id',  
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'aprobado'
    ];

    public static function donadoresAprobados($busqueda){
        $donadores = DB::table('donadores')->where('aprobado',"=",'1');
        if($busqueda && !empty($busqueda)) {
            $donadores->where(function($q) use ($busqueda) {
                $q->where('donadores.nombre', 'like', "%{$busqueda}%")
                ->orWhere('donadores.apellido_paterno', 'like', "%{$busqueda}%")
                ->orWhere('donadores.apellido_materno', 'like', "%{$busqueda}%");
            });
        }
        return $donadores->paginate(10);
    }

    public static function donadoresNoAprobados($busqueda){
        $donadores = DB::table('donadores')->where('aprobado',"=",'0');
        if($busqueda && !empty($busqueda)) {
            $donadores->where(function($q) use ($busqueda) {
                $q->where('donadores.nombre', 'like', "%{$busqueda}%")
                ->orWhere('donadores.apellido_paterno', 'like', "%{$busqueda}%")
                ->orWhere('donadores.apellido_materno', 'like', "%{$busqueda}%");
            });
        }
        return $donadores->paginate(10);
    }

    public function getNombreCompletoAttribute(){
        $nombreCompleto = ucfirst($this->nombre) . ' ' . ucfirst($this->apellido_paterno) . ' ' . ucfirst($this->apellido_materno);
        return $nombreCompleto;
    }



}
