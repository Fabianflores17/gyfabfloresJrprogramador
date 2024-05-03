<?php

namespace Database\Seeders;

use App\Models\EquipoMarca;
use App\Models\ServicioEstado;
use App\Models\TipoEquipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederGeneralproyecto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TipoEquipo::firstOrCreate([
            'nombre' => 'Laptop',
            'activo' => 'si',
        ]);
        TipoEquipo::firstOrCreate([
            'nombre' => 'Computadora de Escritorio',
            'activo' => 'si',
        ]);
        TipoEquipo::firstOrCreate([
            'nombre' => 'Tablet',
            'activo' => 'si',
        ]);
        TipoEquipo::firstOrCreate([
            'nombre' => 'Celular',
            'activo' => 'si',
        ]);
        TipoEquipo::firstOrCreate([
            'nombre' => 'Impresora',
            'activo' => 'si',
        ]);


        ServicioEstado::firstOrCreate([
            'nombre' => 'Recibido',
        ]);

        ServicioEstado::firstOrCreate([
            'nombre' => 'Reparando',
        ]);

        ServicioEstado::firstOrCreate([
            'nombre' => 'finalizado',
        ]);

        ServicioEstado::firstOrCreate([
            'nombre' => 'Entregado',
        ]);


        EquipoMarca::firstOrCreate([
            'nombre' => 'HP',
        ]);

        EquipoMarca::firstOrCreate([
            'nombre' => 'DELL',
        ]);

        EquipoMarca::firstOrCreate([
            'nombre' => 'LENOVO',
        ]);

        EquipoMarca::firstOrCreate([
            'nombre' => 'SAMSUNG',
        ]);

        EquipoMarca::firstOrCreate([
            'nombre' => 'APPLE',
        ]);

    }



}
