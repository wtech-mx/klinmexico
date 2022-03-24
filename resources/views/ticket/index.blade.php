@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                  </ol>
                </nav>

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

                                            @if ($item->Ticket->estatus == 0)
                                                <td>Pendiente</td>
                                            @else
                                                <td>Terminado</td>
                                            @endif


                                            <td>
                                                <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleModal_{{$item->id}}">
                                                    <i class="fa fa-fw fa-eye"></i>
                                                </a>
                                                <a class="icon_actions edit" href="#">
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

