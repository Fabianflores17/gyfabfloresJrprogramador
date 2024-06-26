<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'soporte_clientes';

    public $fillable = [
        'nombres',
        'apellidos',
        'dpi',
        'telefono',
        'direccion',
        'correo'
    ];

    protected $casts = [
        'nombres' => 'string',
        'apellidos' => 'string',
        'dpi' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'correo' => 'string'
    ];

    public static $rules = [
        'nombres' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'dpi' => 'required|string|max:13',
        'telefono' => 'required|string|max:20',
        'direccion' => 'required|string|max:255',
        'correo' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    //Atributo Nombre Completo
    protected $appends = ['nombre_completo'];

    public function servicio(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'cliente_id');
    }

   //GETATRBUTO NOMBRE COMPLETO
    public function getNombreCompletoAttribute()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }
}
