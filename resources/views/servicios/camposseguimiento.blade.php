
<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    <label for="tipousuario">Técnico </label>
    <multiselect v-model="tipousuario" :options="tipousuarios" label="name" placeholder="Selecciones uno" disabled >
    </multiselect >
    <input type="hidden" name="usuario_id" id="usuario_id" :value="usuarioId">
</div>


<!-- Cliente Id Field -->

<div class="form-group col-sm-6">
    <label for="tipocliente">Cliente </label>
    <multiselect v-model="tipocliente" :options="tipoclientes" label="nombre_completo" placeholder="Selecciones uno" disabled>
    </multiselect>


</div>

<!-- Equipo Id Field -->


<div class="form-group col-sm-6">
    <label for="equipo">Equipo</label>
    <multiselect v-model="equipo" :options="equipos" label="datos_equipo" placeholder="Selecciones uno" disabled>
    </multiselect>
</div>

<!-- Problema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('problema', 'Problema:') !!}
    {!! Form::textarea('problema', null, ['class' => 'form-control','rows' => 2, 'readonly']) !!}
</div>
<!-- Recomendaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control','rows' => 2]) !!}
</div>

<!-- Solucion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::textarea('solucion', null, ['class' => 'form-control','rows' => 2]) !!}
</div>

<!-- Recomendaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Recomendaciones', 'Recomendaciones:') !!}
    {!! Form::textarea('recomendaciones', null, ['class' => 'form-control','rows' => 2]) !!}
</div>

@push('scripts')

    <script>

        $(function () {
            $("input[name='q']").hide();
        });
        const app = new Vue({
            name: 'app',
            el: '#root',
            created() {
                this.usuarioId;
                this.clienteId;
                this.equipoID;

            },

            data: {
                tipousuarios: @json(\App\Models\User::all() ?? []),
                tipousuario: @json(\App\Models\User::whereId(old('usuario_id'))->first() ?? $servicio->usuario ?? null),

                tipoclientes: @json(\App\Models\Cliente::all() ?? []),
                tipocliente: @json(\App\Models\Cliente::whereId(old('cliente_id'))->first() ?? $servicio->cliente ?? null),

                equipos: @json(\App\Models\Equipo::all() ?? []),
                equipo: @json(\App\Models\Equipo::whereId(old('equipo_id'))->first() ?? $servicio->equipo ?? null),
            },

            computed: {
                usuarioId() {
                    if (this.tipousuario) {
                        return this.tipousuario.id;
                    }
                    return null;
                },
                clienteID() {
                    if (this.tipocliente) {
                        return this.tipocliente.id;
                    }
                    return null;
                },
                equipoID() {
                    if (this.equipo) {
                        return this.equipo.id;
                    }
                    return null;
                },


            }
        });
    </script>
@endpush

