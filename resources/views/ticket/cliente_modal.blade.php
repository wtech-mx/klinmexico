<!-- Modal -->
<div class="modal fade" id="modal_cliente" tabindex="-1" aria-labelledby="modal_cliente" aria-hidden="true">
    <div class="modal-dialog  modal-lg">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_cliente">Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
         <form method="POST" action="{{ route('clients.store_venta') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

<div class="row">

            <input type="hidden" class="form-control" placeholder="pruebas" value="8095d78e-190d-46aa-b793-75830d857d5e" id="token">

            <div class="form-group mt-5 col-12 col-md-6 col-lg-6">
                {{ Form::label('Nombre(s)') }}
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('apellido paterno') }}
                 <input type="text" name="apellido_pa" class="form-control">
                {!! $errors->first('apellido_pa', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                {{ Form::label('apellido materno') }}
                 <input type="text" name="apellido_ma" class="form-control">
                {!! $errors->first('apellido_ma', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('Número de contacto ') }} <br>
                <input type="tel" name="telefono" class="form-control"placeholder="00-00-00-00-00" >

            </div>

            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('Correo Electronico') }}
                <input type="email" name="email" class="form-control">
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>


            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('fecha_nacimiento') }}
                <input type="date" name="fecha_nacimiento" class="form-control">
                {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group mt-5 col-12 col-md-3 col-lg-3">
                {{ Form::label('Genero') }}
                <input type="text" name="genero" class="form-control">
                {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <input type="hidden" name="num_compras" class="form-control">


            <div class="col-12 mb-5">
                <button type="submit" class=" btn_next_tab mt-3 mb-1 next mt-4" style="border: 1px solid;">
                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar Datos
                </button>
            </div>
 </div>

            </div>

            <div class="modal-footer">
                <button class="btn mt-3 mb-1 next mt-4" style="left: 80%">
                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar
               </button>
            </div>
        </form>
      </div>
    </div>
  </div>


