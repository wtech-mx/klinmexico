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

                <a href="{{ route('ticket.create') }}" class="btn btn-primary">
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
                                        <th>No</th>

										<th>Cliente</th>
										<th>Servicio</th>
										<th>Total</th>
										<th>Estatus</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ticket as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $item->Client->name }}</td>
											<td>{{ $item->servicio_primario }}</td>
											<td>{{ $item->total }}</td>

                                            @if ($item->estatus == 0)
                                                <td>Pendiente</td>
                                            @else
                                                <td>Terminado</td>
                                            @endif


                                            <td>
                                                    <a class="btn btn-sm btn-primary " href="#"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="#"><i class="fa fa-fw fa-edit"></i> Edit</a>

                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


            </div>
        </div>
    </div>

@endsection

