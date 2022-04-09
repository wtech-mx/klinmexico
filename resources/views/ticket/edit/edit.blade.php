@extends('layouts.app')

@section('template_title')
Editar Venta
@endsection

@section('css')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/steps.css') }}" rel="stylesheet">
@endsection

@section('content')

    <style>
        .tab-content > .active {
            display: inline;
        }
    </style>
        <?php
            $rest = substr($venta->id, 0, -4);
            $rest2 = substr($venta->id, 1);
        ?>
@include('ticket.edit.edit_pago')
        <div class="row">
            <div class="d-flex justify-content-between mt-5">
                <h1> Editar Venta ID: 0{{$rest}}-{{$rest2}}</h1>
            </div>

            <div class="card-body">
                <div class="content container-fluid p-3">
                    <div class="row">

                        <div class="col-12 mt-5">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <a class="btn icon_actions eye"  data-bs-toggle="modal" data-bs-target="#examplePago_{{$venta->id}}">
                                <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Pago
                            </a>

                            <table class="table table-striped table-responsive table-hover" id="tale_id" >
                                <thead class="thead">
                                    <tr>
                                        <th>Servicio(s)</th>
                                        <th>Rack</th>
                                        <th>Estatus</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($ticket as $item)

                                        <tr>
                                            <td>{{ $item->servicio_primario }}</td>
                                            <td>{{ $item->rack }}</td>

                                            <td>
                                                <input data-id="{{ $item->id }}" class="toggle-class" type="checkbox"
                                        data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                        data-on="Active" data-off="InActive" {{ $item->estatus ? 'checked disabled' : '' }}>
                                            </td>


                                            <td>
                                                    @if ($item->servicio_primario == 'Essential' || $item->servicio_primario == 'Plus' || $item->servicio_primario == 'Elite' || $item->servicio_primario == 'Pure White' || $item->servicio_primario == 'Special Care')
                                                        <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleSneakers_{{$item->id}}">
                                                            <i class="fa fa-fw fa-eye"></i>
                                                        </a>
                                                    @elseif ($item->servicio_primario == 'Klin Cap')
                                                        <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleGorras_{{$item->id}}">
                                                            <i class="fa fa-fw fa-eye"></i>
                                                        </a>
                                                    @elseif ($item->servicio_primario == 'Bolsos')
                                                        <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleBolsos_{{$item->id}}">
                                                            <i class="fa fa-fw fa-eye"></i>
                                                        </a>
                                                    @elseif ($item->servicio_primario == 'Fixer Snkrs')
                                                        <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleReparacion_{{$item->id}}">
                                                            <i class="fa fa-fw fa-eye"></i>
                                                        </a>
                                                    @elseif ($item->servicio_primario == 'Protector')
                                                        <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleNano_{{$item->id}}">
                                                            <i class="fa fa-fw fa-eye"></i>
                                                        </a>
                                                    @endif

                                                {{-- <a class="icon_actions edit" href="{{ route('ticket.edit', $item->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i>
                                                </a>
                                                <a type="submit" class="icon_actions trash">
                                                    <i class="fa fa-fw fa-trash"></i>
                                                </a> --}}
                                            </td>

                                        </tr>
@include('ticket.edit.edit_sneakers')
@include('ticket.edit.edit_gorras')
@include('ticket.edit.edit_bolsos')
@include('ticket.edit.edit_reparacion')
@include('ticket.edit.edit_nano')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection


