<div class="modal fade" id="exampleModal{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos de <strong>{{ $client->name }}</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">

                <div class="form-group mt-4 col-6 col-md-4 col-lg-4">
                    <label style="font-weight: bold; color: #0a10e9;">Nombre</label> <br>
                    {{ $client->name }}
                </div>

                <div class="form-group mt-4 col-6 col-md-4 col-lg-4">
                    <label style="font-weight: bold; color: #0a10e9;">Apellido paterno</label> <br>
                    {{ $client->apellido_pa }}
                </div>

                <div class="form-group mt-4 col-6 col-md-4 col-lg-4">
                    <label style="font-weight: bold; color: #0a10e9;">Apellido materno</label> <br>
                    {{ $client->apellido_ma }}
                </div>

                <div class="form-group mt-4 col-6 col-md-4 col-lg-4">
                    <label style="font-weight: bold; color: #0a10e9;">Correo</label> <br>
                    {{ $client->email }}
                </div>

                <div class="form-group mt-4 col-6 col-md-4 col-lg-4">
                    <label style="font-weight: bold; color: #0a10e9;">Teléfono</label> <br>
                    {{ $client->telefono }}
                </div>

                <div class="form-group mt-4 col-6 col-md-4 col-lg-4">
                    <label style="font-weight: bold; color: #0a10e9;">Fecha Nacimiento</label> <br>
                    {{ $client->fecha_nacimiento }}
                </div>

                <div class="form-group mt-4 col-6 col-md-12 col-lg-12">
                    <label style="font-weight: bold; color: #0a10e9;">Tipo de cliente</label> <br>
                    Distinguido 1
                </div>

                <div class="form-group mt-4 col-6 col-md-12 col-lg-12">
                    <label style="font-weight: bold; color: #0a10e9;">Dirección(es)</label> <br><br>
                    @foreach ($direccion as $item)
                        @if($item->id_user == $client->id)
                            {{ $item->calle }}, {{ $item->colonia }}, {{ $item->alcaldia }}, {{ $item->estado }}, {{ $item->cp }}<br><br>
                        @endif
                    @endforeach

                </div>

                <div class="form-group mt-4 col-6 col-md-12 col-lg-12">
                    <label style="font-weight: bold; color: #0a10e9;">Datos Factura</label> <br>
                    <label style="font-weight: bold; color: #0a10e9;">RFC:</label> {{ $client->rfc }}<br>
                    <label style="font-weight: bold; color: #0a10e9;">Dirección:</label> {{ $client->calle }}, {{ $client->colonia }}, {{ $client->alcaldia }}, {{ $client->estado }}, {{ $client->cp }}
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
