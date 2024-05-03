<?php

namespace App\DataTables;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Services\DataTable;

class EquipoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->addColumn('action', function(Equipo $equipo){
                $id = $equipo->id;
                return view('equipos.datatables_actions',compact('equipo','id'));
            })

            ->editColumn('id',function (Equipo $equipo){

                return $equipo->id;

            })
            ->editColumn('fotoEquipo',function (Equipo $equipo){

                return "<img src='{$equipo->thumb}'>";
            })
            ->rawColumns(['action','fotoEquipo'])
            ->editColumn('tipo.nombre', function(Equipo $equipo){
              return $equipo->tipo->nombre ?? null;
            })
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Equipo $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Equipo $model): QueryBuilder
    {
        return $model->newQuery()->select($model->getTable().'.*')
        ->with(['tipo:id,nombre'])
        ->with(['marca:id,nombre'])
        ->with(['media']);
        // ->whereIn('tipo_id',function ($q){
        //     $q->select('id')->from('soporte_equipo_tipos')->whereNull('deleted_at');
        //     });
        //return $model->newQuery()->select($model->getTable().'.*');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                ->columns($this->getColumns())
                ->minifiedAjax()
                ->ajax([
                'data' => "function(data) { formatDataDataTables($('#formFiltersDatatables').serializeArray(), data);   }"
                ])
                ->info(true)
                ->language(['url' => asset('js/SpanishDataTables.json')])
                ->responsive(true)
                ->stateSave(false)
                ->dom('
                    <"row mb-2"
                    <"col-sm-12 col-md-6" B>
                    <"col-sm-12 col-md-6" f>
                    >
                    rt
                    <"row"
                    <"col-sm-6 order-2 order-sm-1" ip>
                    <"col-sm-6 order-1 order-sm-2 text-right" l>
                    >
                ')
                ->buttons(

                    Button::make('reset')
                        ->addClass('')
                        ->text('<i class="fa fa-undo"></i> <span class="d-none d-sm-inline">Reiniciar</span>'),

                    Button::make('export')
                        ->extend('collection')
                        ->addClass('')
                        ->text('<i class="fa fa-download"></i> <span class="d-none d-sm-inline">Exportar</span>')
                        ->buttons([
                            Button::make('print')
                                ->addClass('dropdown-item')
                                ->text('<i class="fa fa-print"></i> <span class="d-none d-sm-inline"> Imprimir</span>'),
                            Button::make('csv')
                                ->addClass('dropdown-item')
                                ->text('<i class="fa fa-file-csv"></i> <span class="d-none d-sm-inline"> Csv</span>'),
                            Button::make('pdf')
                                ->addClass('dropdown-item')
                                ->text('<i class="fa fa-file-pdf"></i> <span class="d-none d-sm-inline"> Pdf</span>'),
                            Button::make('excel')
                                ->addClass('dropdown-item')
                                ->text('<i class="fa fa-file-excel"></i> <span class="d-none d-sm-inline"> Excel</span>'),
                        ]),
                );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('tipo.nombre')->searchable(true)->orderable(true)->title('Tipo'),
            Column::make('marca.nombre')->searchable(true)->orderable(true)->title('Marca'),
            Column::make('numero_serie'),
            Column::make('imei'),
            Column::make('observaciones'),
            Column::make('fotoEquipo')->orderable(false)->searchable(false)->printable(false)->exportable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width('20%')
                ->addClass('text-center')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'equipos_datatable_' . time();
    }
}
