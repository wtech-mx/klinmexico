<div class="row">
        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('name') }}
            {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('apellido_ma') }}
            {{ Form::text('apellido_ma', $client->apellido_ma, ['class' => 'form-control' . ($errors->has('apellido_ma') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Ma']) }}
            {!! $errors->first('apellido_ma', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('apellido_pa') }}
            {{ Form::text('apellido_pa', $client->apellido_pa, ['class' => 'form-control' . ($errors->has('apellido_pa') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Pa']) }}
            {!! $errors->first('apellido_pa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('email') }}
            {{ Form::email('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email', 'type' => 'email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('telefono') }}
            {{ Form::number('telefono', $client->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => '123-45-678','type' => 'tel','pattern' => '[0-9]{3}-[0-9]{2}-[0-9]{3}']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('num_compras') }}
            {{ Form::number('num_compras', $client->num_compras, ['class' => 'form-control' . ($errors->has('num_compras') ? ' is-invalid' : ''), 'placeholder' => 'Num Compras']) }}
            {!! $errors->first('num_compras', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('calle') }}
            {{ Form::text('calle', $client->calle, ['class' => 'form-control' . ($errors->has('calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('calle', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('cp') }}
            {{ Form::number('cp', $client->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $client->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('alcaldia') }}
            {{ Form::text('alcaldia', $client->alcaldia, ['class' => 'form-control' . ($errors->has('alcaldia') ? ' is-invalid' : ''), 'placeholder' => 'Alcaldia']) }}
            {!! $errors->first('alcaldia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('colonia') }}
            {{ Form::text('colonia', $client->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('colonia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::date('fecha_nacimiento', $client->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="col-12">
            <button type="submit" class=" btn_next_tab mt-3 mb-1 next mt-4" style="border: 1px solid;">
                <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar
            </button>
        </div>



</div>

