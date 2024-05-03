<?php

namespace App\Http\Controllers;

use App\DataTables\EquipoMarcaDataTable;
use App\Http\Requests\CreateEquipoMarcaRequest;
use App\Http\Requests\UpdateEquipoMarcaRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\EquipoMarca;
use Illuminate\Http\Request;

class EquipoMarcaController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Equipo Marcas')->only('show');
        $this->middleware('permission:Crear Equipo Marcas')->only(['create','store']);
        $this->middleware('permission:Editar Equipo Marcas')->only(['edit','update']);
        $this->middleware('permission:Eliminar Equipo Marcas')->only('destroy');
    }
    /**
     * Display a listing of the EquipoMarca.
     */
    public function index(EquipoMarcaDataTable $equipoMarcaDataTable)
    {
    return $equipoMarcaDataTable->render('equipo_marcas.index');
    }


    /**
     * Show the form for creating a new EquipoMarca.
     */
    public function create()
    {
        return view('equipo_marcas.create');
    }

    /**
     * Store a newly created EquipoMarca in storage.
     */
    public function store(CreateEquipoMarcaRequest $request)
    {
        $input = $request->all();

        /** @var EquipoMarca $equipoMarca */
        $equipoMarca = EquipoMarca::create($input);

        flash()->success('Equipo Marca guardado.');

        return redirect(route('equipoMarcas.index'));
    }

    /**
     * Display the specified EquipoMarca.
     */
    public function show($id)
    {
        /** @var EquipoMarca $equipoMarca */
        $equipoMarca = EquipoMarca::find($id);

        if (empty($equipoMarca)) {
            flash()->error('Equipo Marca no encontrado');

            return redirect(route('equipoMarcas.index'));
        }

        return view('equipo_marcas.show')->with('equipoMarca', $equipoMarca);
    }

    /**
     * Show the form for editing the specified EquipoMarca.
     */
    public function edit($id)
    {
        /** @var EquipoMarca $equipoMarca */
        $equipoMarca = EquipoMarca::find($id);

        if (empty($equipoMarca)) {
            flash()->error('Equipo Marca no encontrado');

            return redirect(route('equipoMarcas.index'));
        }

        return view('equipo_marcas.edit')->with('equipoMarca', $equipoMarca);
    }

    /**
     * Update the specified EquipoMarca in storage.
     */
    public function update($id, UpdateEquipoMarcaRequest $request)
    {
        /** @var EquipoMarca $equipoMarca */
        $equipoMarca = EquipoMarca::find($id);

        if (empty($equipoMarca)) {
            flash()->error('Equipo Marca no encontrado');

            return redirect(route('equipoMarcas.index'));
        }

        $equipoMarca->fill($request->all());
        $equipoMarca->save();

        flash()->success('Equipo Marca actualizado.');

        return redirect(route('equipoMarcas.index'));
    }

    /**
     * Remove the specified EquipoMarca from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var EquipoMarca $equipoMarca */
        $equipoMarca = EquipoMarca::find($id);

        if (empty($equipoMarca)) {
            flash()->error('Equipo Marca no encontrado');

            return redirect(route('equipoMarcas.index'));
        }

        $equipoMarca->delete();

        flash()->success('Equipo Marca eliminado.');

        return redirect(route('equipoMarcas.index'));
    }
}
