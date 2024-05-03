<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServicioEstado extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'soporte_servicio_estados';

    public $fillable = [
        'nombre'
    ];

    protected $casts = [
        'nombre' => 'string'
    ];

    public static $rules = [
        'nombre' => 'required|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    const INGRESADO = 1;
    const REPARANDO = 2;
    const FINALIZADO = 3;
    const ENTREGADO = 4;

    public function soporteServicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SoporteServicio::class, 'estados_id');
    }
}
