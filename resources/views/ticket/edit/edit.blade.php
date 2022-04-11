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

               <a class="btn btn-secondary text-white"  data-bs-toggle="modal" data-bs-target="#examplePago_{{$venta->id}}" style="margin-right: 3rem">
                    <i class="fa fa-money" aria-hidden="true"></i> Editar datos de Pago
                </a>

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

                            <table class="table table-striped table-responsive table-hover" id="tale_id" >
                                <thead class="thead">
                                    <tr>
                                        <th>Servicio(s)</th>
                                        <th>Rack</th>
                                        <th>Estatus Rack</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ticket as $item)
                                        <tr>
                                            <td>{{ $item->servicio_primario }}</td>
                                            <td>{{ $item->rack }}</td>

                                            @if($item->estatus == 1)
                                                <td>
                                                    <a href="#" class="btn" >
                                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            @else
                                                <td>
                                                    <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal_estatusrack">
                                                      <i class="fa fa-square-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            @endif


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
                                        @include('ticket.edit.modal_estatus')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection


