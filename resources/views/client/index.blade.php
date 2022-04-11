@extends('layouts.app')

@section('active6', 'active')

@section('content')

    <div class="container-fluid ">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">
                <h1> Clientes </h1>
            </div>

            <div class="col-12 mt-5 ">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-striped table-responsive table-hover " id="tale_id" >
                                <thead class="thead">
                                    <tr>
                                        <th>ID Cliente</th>
                                        <th>Nombre y Apellidos</th>
										<th>Número de Contacto</th>
                                        <th>Correo Electrónico</th>
                                        <th>Dirección Completa</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                    <?php
                                        $rest = substr($client->id, 0, -4);
                                        $rest2 = substr($client->id, 1);
                                    ?>
                                        <tr>
                                            <td>S1-00-{{$rest2}}</td>
                                            <td>{{ $client->name }} <br> {{$client->apellido_pa }} {{$client->apellido_ma }}</td>
											<td>{{ $client->telefono }}</td>
                                            <td>{{ $client->email }}</td>
                                            <td>Direccion</td>
                                            <td>{{ $client->fecha_nacimiento }}</td>

                                            <td>
                                                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                                    <a type="button" class="icon_actions eye" data-bs-toggle="modal" data-bs-target="#exampleModal{{$client->id}}">
                                                        <i class="fa fa-fw fa-eye"></i>
                                                    </a>
                                                    <a class="icon_actions edit" href="{{ route('clients.edit',$client->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <input name="_method" type="hidden" value="DELETE">
                                                     <button  class="icon_actions trash delete-confirm  show_confirm"  style="border: 1px solid transparent;padding: 0px;background: transparent">
                                                          <i class="fa fa-fw fa-trash"></i>
                                                    </button>
                                                     <button type="submit" id="delete_client" style="border: 1px solid transparent;background: transparent;"></button>

                                                </form>
                                            </td>

                                        </tr>
                                        @include('client.modal_view')
                                    @endforeach
                                </tbody>
                            </table>
            </div>

        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
   $('.delete-confirm').on('click', function (event) {
      event.preventDefault();
      swal({
          title: '¿Estas seguro?',
          text: '¡Borrarás todos sus datos del cliente permanentemente!',
          icon: 'warning',
          buttons: ["Cancelar", "¡Si!"],
          }).then(function(value) {
          if (value) {
           $("#delete_client").click();
        }
      });
     });
</script>
@endsection
