<div class="row">
    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">Código Postal:</span>
        </div>
        <input type="text" class="form-control" name="codigo_postal" id="codigo_postal">
      </div>
      <a href="javascript:void(0)" onclick="informacion_cp()" class="btn btn-primary">Obtener información Código Postal</a>
      <br/>


      <label for="cp_response">Código Postal Respuesta:</label>
      <input type="text" name="cp_response" id="cp_response" class="form-control" disabled readonly>
      <br>

      <label for="list_colonias">Colonias:</label>
      <select name="list_colonias" id="list_colonias" class="form-control">
        <option>Seleccione</option>
      </select>
      <br>

      <label for="tipo_asentamiento">Tipo Asentamiento:</label>
      <input type="text" name="tipo_asentamiento" id="tipo_asentamiento" class="form-control" disabled readonly>
      <br>

      <label for="municipio">Municipio:</label>
      <input type="text" name="municipio" id="municipio" class="form-control" disabled readonly>
      <br>

      <label for="estado">Estado:</label>
      <input type="text" name="estado" id="estado" class="form-control" disabled readonly>
      <br>

      <label for="ciudad">Ciudad:</label>
      <input type="text" name="ciudad" id="ciudad" class="form-control" disabled readonly>
      <br>

      <label for="pais">País:</label>
      <input type="text" name="pais" id="pais" class="form-control" disabled readonly>
      <br>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Token: <a href="javascript:void(0)" onclick="alert('Registrate y obtén tu token en https://api.copomex.com/panel')"> [?] </a></span>
        </div>
        <input type="text" class="form-control" placeholder="pruebas" value="pruebas" id="token">
      </div>

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

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('cp') }}
                {{ Form::number('cp', $client->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : '')]) }}
                {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('estado') }}
                {{ Form::text('estado', $client->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('alcaldia') }}
                {{ Form::text('alcaldia', $client->alcaldia, ['class' => 'form-control' . ($errors->has('alcaldia') ? ' is-invalid' : '')]) }}
                {!! $errors->first('alcaldia', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('colonia') }}
                {{ Form::text('colonia', $client->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : '')]) }}
                {!! $errors->first('colonia', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-12 col-md-12 col-lg-12">
                {{ Form::label('calle') }}
                {{ Form::text('calle', $client->calle, ['class' => 'form-control' . ($errors->has('calle') ? ' is-invalid' : '')]) }}
                {!! $errors->first('calle', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="col-12 mb-5">
                <button type="submit" class=" btn_next_tab mt-3 mb-1 next mt-4" style="border: 1px solid;">
                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar Datos
                </button>
            </div>
 </div>





