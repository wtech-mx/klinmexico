<div class="row">

            <input type="hidden" class="form-control" placeholder="pruebas" value="8095d78e-190d-46aa-b793-75830d857d5e" id="token">

            <div class="form-group mt-5 col-12 col-md-6 col-lg-6">
                {{ Form::label('Nombre(s)') }}
                {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('apellido materno') }}
                {{ Form::text('apellido_ma', $client->apellido_ma, ['class' => 'form-control' . ($errors->has('apellido_ma') ? ' is-invalid' : '')]) }}
                {!! $errors->first('apellido_ma', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('apellido paterno') }}
                {{ Form::text('apellido_pa', $client->apellido_pa, ['class' => 'form-control' . ($errors->has('apellido_pa') ? ' is-invalid' : '')]) }}
                {!! $errors->first('apellido_pa', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('Número de contacto ') }} <br>
                {{ Form::tel('telefono', $client->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''),'id' => 'telefono','placeholder' => '00-00-00-00-00','maxlength' => '14']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('Correo Electronico') }}
                {{ Form::email('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>


            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('fecha_nacimiento') }}
                {{ Form::date('fecha_nacimiento', $client->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : '')]) }}
                {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('Genero') }}
                {{ Form::text('genero', $client->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : '')]) }}
                {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            {{ Form::number('num_compras', $client->num_compras, ['class' => 'form-control' . ($errors->has('num_compras') ? ' is-invalid' : ''),'hidden']) }}

            <div class="d-flex justify-content-between mt-5">
                <h3> Dirección cliente </h3>
            </div>

            <div class="row">
                {{-- value="8095d78e-190d-46aa-b793-75830d857d5e" --}}
                <input type="hidden" class="form-control" placeholder="pruebas" value="pruebas" id="token">
                <div class="form-group mt-5 col-6 col-md-2 col-lg-2">
                    <label class="label_steps" for="">Codigo Postal</label> <br>
                    <input class="form-control"  type="text" name="cp_cliente" id="codigo_postal" >
                </div>

                <div class="form-group mt-5 col-1 col-md-1 col-lg-1">
                    {{ Form::label('Consultar') }}
                    <a href="javascript:void(0)" onclick="informacion_cp()" class="btn btn-secondary form-control">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                    <label class="label_steps" for="">Colonia</label> <br>
                    <select class="form-control" name="colonia_cliente" id="list_colonias" >
                        <option>Seleccione</option>
                      </select>
                </div>

                <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                    <label class="label_steps" for="">Alcaldia</label> <br>
                    <input class="form-control"  type="text" name="alcaldia_cliente" id="municipio">
                </div>

                <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                    <label class="label_steps" for="">Estado</label> <br>
                    <input class="form-control"  type="text" name="estado_cliente" id="estado">
                </div>

                <div class="form-group mt-5 col-6 col-md-12 col-lg-12">
                    <label class="label_steps" for="">Calle y numero</label> <br>
                    <input class="form-control"  type="text" name="calle_cliente" id="calle">
                </div>


              </div>

            <div class="d-flex justify-content-between mt-5">
                <h3> Datos de Factura </h3>
            </div>

            <div class="form-group mt-5 col-6 col-md-2 col-lg-2">
                {{ Form::label('cp') }}
                {{ Form::number('cp', $client->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''),'id' => 'codigo_postal',]) }}
                {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-1 col-md-1 col-lg-1">
                    {{ Form::label('Consultar') }}
                    <a href="javascript:void(0)" onclick="informacion_cp()" class="btn btn-secondary form-control">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('estado') }}
                {{ Form::text('estado', $client->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''),'id' => 'estado',]) }}
                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('alcaldia/Municipio') }}
                {{ Form::text('alcaldia', $client->alcaldia, ['class' => 'form-control' . ($errors->has('alcaldia') ? ' is-invalid' : ''),'id' => 'municipio',]) }}
                {!! $errors->first('alcaldia', '<div class="invalid-feedback">:message</div>') !!}
            </div>



            @if($client->colonia == null)
                <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                    {{ Form::label('colonia') }}
                      <select class="form-control" name="colonia" id="list_colonias" >
                        <option>Seleccione</option>
                      </select>
                </div>
            @else
                <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                    {{ Form::label('colonia') }}
                    {{ Form::text('colonia', $client->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : ''),'id' => 'colonia',]) }}
                    {!! $errors->first('colonia', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            @endif
{{--            <div class="form-group mt-5 col-3 col-md-3 col-lg-3">--}}
{{--                {{ Form::label('Ciudad:') }}--}}
{{--                  <input type="text" name="ciudad" id="ciudad" class="form-control" disabled readonly>--}}
{{--            </div>--}}

{{--            <div class="form-group mt-5 col-3 col-md-3 col-lg-3">--}}
{{--                {{ Form::label('País:') }}--}}
{{--                <input type="text" name="pais" id="pais" class="form-control" disabled readonly>--}}
{{--            </div>--}}

            <div class="form-group mt-5 col-6 col-md-6 col-lg-6">
                {{ Form::label('Calle y numero') }}
                {{ Form::text('calle', $client->calle, ['class' => 'form-control' . ($errors->has('calle') ? ' is-invalid' : '')]) }}
                {!! $errors->first('calle', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-6 col-lg-6">
                {{ Form::label('RFC') }}
                {{ Form::text('rfc', $client->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : '')]) }}
                {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="col-12 mb-5">
                <button type="submit" class=" btn_next_tab mt-3 mb-1 next mt-4" style="border: 1px solid;">
                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar Datos
                </button>
            </div>
 </div>





