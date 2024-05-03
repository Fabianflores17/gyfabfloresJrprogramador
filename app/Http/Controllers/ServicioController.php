<?php

namespace App\Http\Controllers;

use App\DataTables\Scopes\ScopeServicioDataTable;
use App\DataTables\ServicioDataTable;
use App\Http\Requests\CreateServicioRequest;
use App\Http\Requests\UpdateServicioRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Servicio;
use App\Models\ServicioEstado;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicioController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Servicios')->only('show');
        $this->middleware('permission:Crear Servicios')->only(['create','store']);
        $this->middleware('permission:Editar Servicios')->only(['edit','update']);
        $this->middleware('permission:Eliminar Servicios')->only('destroy');
    }
    /**
     * Display a listing of the Servicio.
     */
    public function index(ServicioDataTable $servicioDataTable)
    {

        $scope = new ScopeServicioDataTable();
        $servicioDataTable->addScope($scope);

    return $servicioDataTable->render('servicios.index');
    }


    /**
     * Show the form for creating a new Servicio.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created Servicio in storage.
     */
    public function store(CreateServicioRequest $request)
    {

        //MERGE
        $request->merge([
            'fecha_recibido' => Carbon::Now(),
            'estado_id' => ServicioEstado::INGRESADO
        ]);

        $input = $request->all();

        /** @var Servicio $servicio */
        $servicio = Servicio::create($input);

        flash()->success('Servicio guardado.');

        return redirect(route('servicios.index'));
    }

    /**
     * Display the specified Servicio.
     */
    public function show($id)
    {
        /** @var Servicio $servicio */
        $servicio = Servicio::find($id);

        if (empty($servicio)) {
            flash()->error('Servicio no encontrado');

            return redirect(route('servicios.index'));
        }

        return view('servicios.show')->with('servicio', $servicio);
    }

    /**
     * Show the form for editing the specified Servicio.
     */
    public function edit($id)
    {
        /** @var Servicio $servicio */
        $servicio = Servicio::find($id);

        if (empty($servicio)) {
            flash()->error('Servicio no encontrado');

            return redirect(route('servicios.index'));
        }

        return view('servicios.edit')->with('servicio', $servicio);
    }

    /**
     * Update the specified Servicio in storage.
     */
    public function update($id, UpdateServicioRequest $request)
    {
        /** @var Servicio $servicio */
        $servicio = Servicio::find($id);

        if (empty($servicio)) {
            flash()->error('Servicio no encontrado');

            return redirect(route('servicios.index'));
        }

        $servicio->fill($request->all());
        $servicio->save();

        flash()->success('Servicio actualizado.');

        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified Servicio from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Servicio $servicio */
        $servicio = Servicio::find($id);

        if (empty($servicio)) {
            flash()->error('Servicio no encontrado');

            return redirect(route('servicios.index'));
        }

        $servicio->delete();

        flash()->success('Servicio eliminado.');

        return redirect(route('servicios.index'));
    }
}
