@extends('layouts.app')
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
                                        <th>No</th>

										<th>Nombre</th>
										<th>Email</th>
										<th>Apellido Paterno</th>
										<th>Telefono</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $client->email }}</td>
                                            <td>{{ $client->name }}</td>
											<td>{{ $client->apellido_pa }}</td>
											<td>{{ $client->telefono }}</td>

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
                                                    <button type="submit" class="icon_actions trash" style="border: 1px solid transparent;padding: 0px;background: transparent">
                                                        <i class="fa fa-fw fa-trash"></i>
                                                    </button>
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

@endsection

