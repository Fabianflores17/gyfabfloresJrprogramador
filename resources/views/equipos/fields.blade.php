<div class="row" id="root">

<!-- Tipo Equipo Id Field -->

  <div class="form-group col-sm-6" >
      <label for="tipoequipo">Tipo </label>
      <multiselect v-model="tipoequipo" :options="tipoequipos" label="nombre" placeholder="Selecciones uno" >
      </multiselect>
      <input type="hidden" name="tipo_id" id="tipo_id" :value="tipoId">
    </div>


    <div class="form-group col-sm-6" id="root">
        <label for="tipoequipo">Marca </label>
        <multiselect v-model="marca" :options="marcas" label="nombre" placeholder="Selecciones uno" >
        </multiselect>
        <input type="hidden" name="marca_id" id="marca_id" :value="marcaId">
    </div>


<!-- Numero Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_serie', 'Numero Serie:') !!}
    {!! Form::text('numero_serie', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Imei Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imei', 'Imei:') !!}
    {!! Form::text('imei', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Foto Equipo:') !!}
    <div class="custom-file">
        <input type="file" name="imagen" id="imagen" class="form-control" >
    </div>
</div>

</div>

@push('scripts')

    <script>

        $(function () {



            $("#imagen").fileinput({
                language: "es",
                initialPreview: '',
                dropZoneEnabled: true,
                maxFileCount: 1,
                maxFileSize: 2000,
                showUpload: false,
                initialPreviewAsData: true,
                showBrowse: true,
                showRemove: true,
                theme: "fa",
                browseOnZoneClick: true,
                allowedPreviewTypes: ["image"],
                allowedFileTypes: ["image"],
                initialPreviewFileType: 'image',
            });

            $("input[name='q']").hide();

        });

        const app = new Vue({
            name:'app',
            el: '#root',
            created() {

                this.tipoId;
                this.tipoName;
                this.marcaId;

            },


            data: {

                tipoequipos: @json(\App\Models\TipoEquipo::all() ?? []),
                tipoequipo: @json(\App\Models\TipoEquipo::whereId(old('tipo_id'))->first() ?? $equipo->tipo ?? null),


                marcas: @json(\App\Models\EquipoMarca::all() ?? []),
                marca: @json(\App\Models\EquipoMarca::whereId(old('marca_id'))->first() ?? $equipo->marca ?? null),


            },

            computed: {

                tipoId() {
                    if (this.tipoequipo) {
                        return this.tipoequipo.id;
                    }
                    return null;

                },
                marcaId() {
                    if (this.marca) {
                        return this.marca.id;
                    }
                    return null;

                },

                tipoName(){

                    if (this.tipoequipo){
                        return this.tipoequipo.nombre;

                    }
                    return null

                },

            }




        });

    </script>

@endpush
