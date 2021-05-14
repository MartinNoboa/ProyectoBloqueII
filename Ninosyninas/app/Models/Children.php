<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Children extends Model
{
    use HasFactory;

    /** 
     * Eloquent agrega una -s al final de los nombres de las tablas en metodos default
     * Definir el nombre de la tabla en el modelo evita conflictos de query
    */
    protected $table = "children";
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'grado',
    ];

    /**
     * Funcion de eloquent para crear un atributo
     */
    public function getNombreCompletoAttribute(){
        $nombreCompleto = ucfirst($this->nombre) . ' ' . ucfirst($this->apellido_paterno) . ' ' . ucfirst($this->apellido_materno);
        return $nombreCompleto;
    }
    
    /** 
     * Funcion para recuperar los datos de la tabla children
     * @param: $busqueda - string parcial o completo para buscar en el query
    */
    public static function ninos($busqueda){
        $ninos = DB::table('children');
        if($busqueda && !empty($busqueda)) {
            $ninos->where(function($q) use ($busqueda) {
                $q->where('children.nombre', 'like', "%{$busqueda}%")
                ->orWhere('children.apellido_paterno', 'like',"%{$busqueda}%")
                ->orWhere('children.apellido_materno', 'like', "%{$busqueda}%");
        });
        }
        return $ninos->paginate(10);
    }
}
