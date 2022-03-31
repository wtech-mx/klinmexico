@extends('layouts.app')
@section('content')

    <div class="content container-fluid content_card_shadow p-3">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">
                <h1> Tickets </h1>
                <a href="{{ route('ticket.create') }}" class="btn btn_create">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Crear Ticket
                </a>
            </div>

            <div class="col-12 mt-5">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-striped table-responsive table-hover" id="tale_id" >
                                <thead class="thead">
                                    <tr>
										<th>Cliente</th>
										<th>Servicio</th>
										<th>Por pagar</th>
                                        <th>Rack</th>
										<th>Estatus</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($precio_ticket as $item)
                                        <tr>

											<td>{{ $item->Ticket->Client->name }}</td>
											<td>{{ $item->Ticket->servicio_primario }}</td>
											<td>{{ $item->por_pagar }}</td>
                                            <td>{{ $item->Ticket->rack }}</td>

                                            @if ($item->Ticket->estatus == 0)
                                                <td>Pendiente</td>
                                            @else
                                                <td>Terminado</td>
                                            @endif


                                            <td>
                                                <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleModal_{{$item->id}}">
                                                    <i class="fa fa-fw fa-eye"></i>
                                                </a>
                                                <a class="icon_actions edit" href="{{ route('ticket.edit', $item->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i>
                                                </a>
                                                <a type="submit" class="icon_actions trash">
                                                    <i class="fa fa-fw fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
            </div>
                 @foreach ($precio_ticket as $item)
                    @include('.ticket.view')
                 @endforeach
        </div>
    </div>

@endsection
