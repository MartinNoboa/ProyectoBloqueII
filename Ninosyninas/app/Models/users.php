<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;


class users extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'fecha_inicio',
        'ocupacion',
        'telefono',
        'mail',
        'contrasenia',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $timestamps = false;


    /* 
    * Eloquent casting -> recuperar un atributo
    * Estructura
    *   public function get[nombreAtributo]Attribute
    */
    public function getNombreCompletoAttribute(){
        $nombreCompleto = ucfirst($this->nombre) . ' ' . ucfirst($this->apellido_paterno) . ' ' . ucfirst($this->apellido_materno);
        return $nombreCompleto;
    }

    public static function usuarios(){
        $usuarios = DB::table('users');
        return $usuarios->paginate(10);
    }
}
