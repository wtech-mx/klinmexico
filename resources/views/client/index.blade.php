@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                  </ol>
                </nav>

                <h1> Clientes </h1>

                <a href="{{ route('clients.create') }}" class="btn btn_create">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Crear cliente
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

										<th>Name</th>
										<th>Email</th>
										<th>Apellido Ma</th>
										<th>Apellido Pa</th>
										<th>Telefono</th>
										<th>Num Compras</th>
										<th>Calle</th>
										<th>Cp</th>
										<th>Estado</th>
										<th>Alcaldia</th>
										<th>Colonia</th>
										<th>Fecha Nacimiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $client->name }}</td>
											<td>{{ $client->email }}</td>
											<td>{{ $client->apellido_ma }}</td>
											<td>{{ $client->apellido_pa }}</td>
											<td>{{ $client->telefono }}</td>
											<td>{{ $client->num_compras }}</td>
											<td>{{ $client->calle }}</td>
											<td>{{ $client->cp }}</td>
											<td>{{ $client->estado }}</td>
											<td>{{ $client->alcaldia }}</td>
											<td>{{ $client->colonia }}</td>
											<td>{{ $client->fecha_nacimiento }}</td>

                                            <td>
                                                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                                    <a class="icon_actions eye" href="{{ route('clients.show',$client->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i>
                                                    </a>
                                                    <a class="icon_actions edit" href="{{ route('clients.edit',$client->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="icon_actions trash" style="border: 1px solid transparent;padding: 0px;background: transparent">
                                                        <i class="fa fa-fw fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

            </div>
        </div>
    </div>

@endsection

