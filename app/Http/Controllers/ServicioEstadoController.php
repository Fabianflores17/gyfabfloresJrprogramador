<?php

namespace App\Http\Controllers;

use App\DataTables\ServicioEstadoDataTable;
use App\Http\Requests\CreateServicioEstadoRequest;
use App\Http\Requests\UpdateServicioEstadoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ServicioEstado;
use Illuminate\Http\Request;

class ServicioEstadoController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Servicio Estados')->only('show');
        $this->middleware('permission:Crear Servicio Estados')->only(['create','store']);
        $this->middleware('permission:Editar Servicio Estados')->only(['edit','update']);
        $this->middleware('permission:Eliminar Servicio Estados')->only('destroy');
    }
    /**
     * Display a listing of the ServicioEstado.
     */
    public function index(ServicioEstadoDataTable $servicioEstadoDataTable)
    {
    return $servicioEstadoDataTable->render('servicio_estados.index');
    }


    /**
     * Show the form for creating a new ServicioEstado.
     */
    public function create()
    {
        return view('servicio_estados.create');
    }

    /**
     * Store a newly created ServicioEstado in storage.
     */
    public function store(CreateServicioEstadoRequest $request)
    {
        $input = $request->all();

        /** @var ServicioEstado $servicioEstado */
        $servicioEstado = ServicioEstado::create($input);

        flash()->success('Servicio Estado guardado.');

        return redirect(route('servicioEstados.index'));
    }

    /**
     * Display the specified ServicioEstado.
     */
    public function show($id)
    {
        /** @var ServicioEstado $servicioEstado */
        $servicioEstado = ServicioEstado::find($id);

        if (empty($servicioEstado)) {
            flash()->error('Servicio Estado no encontrado');

            return redirect(route('servicioEstados.index'));
        }

        return view('servicio_estados.show')->with('servicioEstado', $servicioEstado);
    }

    /**
     * Show the form for editing the specified ServicioEstado.
     */
    public function edit($id)
    {
        /** @var ServicioEstado $servicioEstado */
        $servicioEstado = ServicioEstado::find($id);

        if (empty($servicioEstado)) {
            flash()->error('Servicio Estado no encontrado');

            return redirect(route('servicioEstados.index'));
        }

        return view('servicio_estados.edit')->with('servicioEstado', $servicioEstado);
    }

    /**
     * Update the specified ServicioEstado in storage.
     */
    public function update($id, UpdateServicioEstadoRequest $request)
    {
        /** @var ServicioEstado $servicioEstado */
        $servicioEstado = ServicioEstado::find($id);

        if (empty($servicioEstado)) {
            flash()->error('Servicio Estado no encontrado');

            return redirect(route('servicioEstados.index'));
        }

        $servicioEstado->fill($request->all());
        $servicioEstado->save();

        flash()->success('Servicio Estado actualizado.');

        return redirect(route('servicioEstados.index'));
    }

    /**
     * Remove the specified ServicioEstado from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var ServicioEstado $servicioEstado */
        $servicioEstado = ServicioEstado::find($id);

        if (empty($servicioEstado)) {
            flash()->error('Servicio Estado no encontrado');

            return redirect(route('servicioEstados.index'));
        }

        $servicioEstado->delete();

        flash()->success('Servicio Estado eliminado.');

        return redirect(route('servicioEstados.index'));
    }
}
