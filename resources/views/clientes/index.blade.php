@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <h1>Clientes Api</h1>
            </div>


            <div class="box box-default col-md-12" id="form_user">
                <div class="box-body">


                        <div class="col-sm-12">
                            <form @submit.prevent="save()">
                                <div class="form-row">

                                    <div class="form-group col-sm-12">
                                        <button type="button" class="btn btn-success" @click="crearItem()">
                                            <i class="fa fa-reload"></i> Limpiar
                                        </button>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="nombres">Nombre</label>
                                        <input  type="text"
                                                class="form-control"
                                                id="nombres"
                                                v-model="registroEnEdicion.nombres"
                                                @keydown.enter.prevent="save()"
                                        >
                                    </div>


                                    <div class="form-group col-sm-6">
                                        <label for="apellidos">Apellido</label>
                                        <input  type="text"
                                                class="form-control"
                                                id="apellidos"
                                                v-model="registroEnEdicion.apellidos"
                                                @keydown.enter.prevent="save()"
                                        >
                                    </div>


                                    <div class="form-group col-sm-6">
                                        <label for="dpi">dpi</label>
                                        <input  type="number"
                                                class="form-control"
                                                id="dpi"
                                                v-model="registroEnEdicion.dpi"
                                                @keydown.enter.prevent="save()"
                                        >
                                    </div>


                                    <div class="form-group col-sm-6">
                                        <label for="telefono">Telefono</label>
                                        <input  type="text"
                                                class="form-control"
                                                id="telefono"
                                                v-model="registroEnEdicion.telefono"
                                                @keydown.enter.prevent="save()"
                                        >
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="direccion">Direccion</label>
                                        <input  type="text"
                                                class="form-control"
                                                id="direccion"
                                                v-model="registroEnEdicion.direccion"
                                                @keydown.enter.prevent="save()"
                                        >
                                    </div>


                                    <div class="form-group col-sm-6">
                                        <label for="correo">Correo</label>
                                        <input  type="text"
                                                class="form-control"
                                                id="correo"
                                                v-model="registroEnEdicion.correo"
                                                @keydown.enter.prevent="save()"
                                        >
                                    </div>


                                    <div class="form-group col-sm-12 pull-right">

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-success" @click="save()">
                                            <i class="fa fa-save"></i> <span v-text="textoBotonGuardar"></span>
                                        </button>

                                    </div>
                                </div>

                            </form>
                        </div>


                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sm table-hover">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>dpi</th>
                                        <th>Telefono</th>
                                        <th>Dirección</th>
                                        <th>Correo</th>
                                        <th>Creación</th>
                                        <th width="10%">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr v-if="registros.length == 0">
                                        <td colspan="50" class="text-center">Ningún Registro agregado</td>
                                    </tr>

                                    <tr v-for="(registro,index) in registros" >
                                        <td  v-text="registro.id"></td>


                                        <td v-text="registro.nombres"></td>
                                        <td v-text="registro.apellidos"></td>
                                        <td v-text="registro.dpi"></td>
                                        <td v-text="registro.telefono"></td>
                                        <td v-text="registro.direccion"></td>
                                        <td v-text="registro.correo"></td>
                                        <td v-text="formatDate(registro.created_at)"></td>


                                        <td class="text-center">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" title="Editar" @click="editItem(registro)">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar" @click="deleteItem(registro)">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
            </div>
            <!-- /.box -->

        </div>
    </div>
@endsection


@push('scripts')
    <script>
        let vMformUser = new Vue({
            el: '#form_user',
            name: 'form_user',
            created() {

                this.getDetalles();

            },
            data: {

                registros: [],

                registroEnEdicion: {
                    id: 0,
                },

                registroPorDefecto: {
                    id: 0,
                },

                itemElimina: {},

                loading: false,
            },
            methods: {
                formatDate(dateString) {
                    if (!dateString) return ''; // Si no hay fecha, retornar un valor vacío

                    const formattedDate = moment(dateString).format('DD/MM/YYYY');
                    return formattedDate;
                },
                getId(item){
                    if(item)
                        return item.id;

                    return null
                },
                getNombre(item){
                    if(item)
                        return item.nombre;

                    return null
                },

                editItem(item) {

                    this.registroEnEdicion = Object.assign({}, item);
                    //$('#modal_form_').modal('show');

                },
                crearItem() {
                    this.registroEnEdicion = Object.assign({}, this.registroPorDefecto);
                    //$('#modal_form_').modal('show');
                },
                close () {
                    //$('#modal_form_').modal('hide');
                    this.loading = false;
                    this.registroEnEdicion = Object.assign({}, this.registroPorDefecto);
                },

                async getDetalles() {

                    try {

                        let datos = {
                            params : {
                                limit: 10,
                                ultimo_primero: 1,
                                con_media: 1,
                            }
                        }

                        let res = await axios.get(route('api.clientes.index'),datos);


                        this.registros = res.data.data;

                    } catch (e) {

                        notifyErrorApi(e)

                    }

                },

                async save () {

                    this.loading = true;



                    try {

                        let data = this.registroEnEdicion;
                        let res = null;

                        if(this.registroEnEdicion.id === 0){

                            res = await axios.post(route('api.clientes.store'),data);

                        }else {

                            res = await axios.patch(route('api.clientes.update',this.registroEnEdicion.id),data);

                        }

                        iziTs(res.data.message);

                        this.getDetalles();

                        this.close();

                    }catch (e) {
                        notifyErrorApi(e);
                        this.loading = false;
                    }

                },

                async deleteItem(item) {

                    let confirm = await Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡No podrás revertir esto!",
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, elimínalo\n!'
                    });

                    if (confirm.isConfirmed){
                        try{
                            let res = await  axios.delete(route('api.clientes.destroy',item.id))


                            iziTs(res.data.message);
                            this.getDetalles();


                        }catch (e){
                            notifyErrorApi(e);
                            this.itemElimina = {};
                        }

                    }

                },
                esExtra(detalle){

                }
            },
            computed: {
                tituloModal () {
                    return this.registroEnEdicion.id === 0 ? 'Nuevo Detalle' : 'Editar Detalle'
                },
                textoBotonGuardar () {
                    if (this.loading){
                        return this.registroEnEdicion.id === 0 ? 'Guardando...' : 'Actualizando...'

                    }else {
                        return this.registroEnEdicion.id === 0 ? 'Guardar' : 'Actualizar'

                    }
                },
            },
            watch: {
                loading(valorCambia){

                    if(valorCambia){
                        esperar();
                    }else {
                        finEspera();
                    }
                }
            }
        });
    </script>
@endpush

