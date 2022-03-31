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

        <div class="row">
            <div class="d-flex justify-content-between mt-5">
                <h1> Editar Venta </h1>
            </div>

            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card card_steps b-0">

                            <ul id="progressbar" class="text-center">
                                <li class="active_steps step0" id="step1"></li>
                                <li class="step0" id="step2"></li>
                                <li class="step0" id="step3"></li>
                                <li class="step0" id="step4"></li>
                            </ul>
                            <form method="POST" action="{{route('ticket.update', $ticket->id)}}" enctype="multipart/form-data" role="form">
                                @csrf
                                <fieldset class="show">
                                    @include('ticket.edit.servicios')
                                </fieldset>

                                <fieldset>
                                    <div class="form-card text-black">
                                        <div class="row">
                                            <h5 class="text-center mb-4">Descripcion</h5>

                                            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                                <label class="label_steps" for="">Marca</label> <br>
                                                <input class="form-control @error('marca') is-invalid @enderror"  type="text" name="marca" id="marca" value="{{$ticket->DescripcionTicket->marca}}">
                                                @error('marca')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                                <label class="label_steps" for="">Modelo</label> <br>
                                                <input class="form-control @error('modelo') is-invalid @enderror" type="text" name="modelo" id="modelo" value="{{$ticket->DescripcionTicket->modelo}}">
                                                @error('modelo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                                <label class="label_steps" for="">Color 1</label> <br>
                                                <input class="form-control @error('color1') is-invalid @enderror" type="color" name="color1" id="color1" value="{{$ticket->DescripcionTicket->color1}}">
                                                @error('color1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                                <label class="label_steps" for="">Color 2</label> <br>
                                                <input class="form-control @error('color2') is-invalid @enderror" type="color" name="color2" id="color2" value="{{$ticket->DescripcionTicket->color2}}">
                                                @error('color2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                                <label class="label_steps" for="">Talla</label> <br>
                                                <input class="form-control @error('talla') is-invalid @enderror" type="text" name="talla" id="talla" placeholder="S- M - LG - XL" value="{{$ticket->DescripcionTicket->talla}}">
                                                @error('talla')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                                <label class="label_steps" for="">Categoria</label>
                                                <select class="form-select select2 " name="categoria" id="categoria">
                                                        <option value="{{$ticket->DescripcionTicket->categoria}}" selected>{{$ticket->DescripcionTicket->categoria}}</option>
                                                        <option value="Hombre" {{ old('categoria') == "Hombre" ? 'selected' : '' }} >Hombre</option>
                                                        <option value="Mujer" {{ old('categoria') == "Mujer" ? 'selected' : '' }} >Mujer</option>
                                                        <option value="Niño" {{ old('categoria') == "Niño" ? 'selected' : '' }} >Niño</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                                <label class="label_steps" for="">Observaciones</label> <br>
                                                <textarea class="form-control" name="observacion" id="observacion" cols="30" rows="5">
                                                    {{$ticket->DescripcionTicket->observacion}}
                                                </textarea>
                                            </div>
                                        </div>

                                            <a class="btn-block btn_prev_tab mt-3 mb-1 prev">
                                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                Anterior
                                            </a>
                                            <a id="next1"  class="btn-block btn_next_tab mt-3 mb-1 next mt-4" >
                                                Siguiente
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>

                                    </div>
                                </fieldset>

                                <fieldset>
                                    @include('ticket.edit.rack')
                                </fieldset>

                                <fieldset>
                                    @php
                                        switch($ticket->promocion){
                                            case($ticket->promocion == 0.10):
                                                $promocion = 'Cliente distinguido 1';
                                                break;
                                            case($ticket->promocion == 0.20):
                                                $promocion = 'Cliente distinguido 2';
                                                break;
                                            case($ticket->promocion == 0.100):
                                                $promocion = 'Cliente distinguido 3';
                                                break;
                                        }

                                        switch($ticket->por_pagar){
                                            case($ticket->por_pagar == '2'):
                                                $por_pagar = 'No deja anticipo';
                                                break;
                                            case($ticket->por_pagar != '2' || $ticket->por_pagar != '0'):
                                                $por_pagar = 'Anticipo';
                                                break;
                                            case($ticket->por_pagar == '0'):
                                                $por_pagar = 'Liquida cuenta';
                                                break;
                                        }

                                        if ($ticket->recoleccion == 0) {
                                            $recoleccion = 'No';
                                            $cantidad = "";
                                        }else {
                                            $recoleccion = 'Si';
                                            $cantidad = $ticket->recoleccion;
                                        }
                                    @endphp
                                    <div class="form-card text-black">
                                        <div class="row">
                                            <div class="form-group mt-5 mb-5 col-6 col-md-4 col-lg-4">
                                                <label class="label_steps" for="">Aplicar Promocion</label>
                                                <select class="form-select select2 " name="promocion" id="promocion">
                                                        <option value="{{$ticket->promocion}}" selected>{{$promocion}}</option>
                                                        <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Cliente Distinguido 1 ---- 10% </option>
                                                        <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Cliente Distinguido 2 ---- 20% </option>
                                                        <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cliente Distinguido 3 ---- 100% </option>
                                                        <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Descuento Total --------- 10% </option>
                                                        <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Descuento Total --------- 20%</option>
                                                        <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cortesía ------------------ 100%</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-5 mb-5 col-6 col-md-3 col-lg-3">
                                                <label class="label_steps" for="">Recoleccion</label>
                                                <select class="form-select select2 " name="recoleccion" id="recoleccio">
                                                        <option value="{{$ticket->recoleccion}}" selected>{{$recoleccion}}</option>
                                                        <option value="0" >No ---- 0%</option>
                                                        <option value="1" >Si ----- $__</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                                                <label class="label_steps" for="">Recoleccion $</label> <br>
                                                <input  class="form-control" type="number" value="{{$cantidad}}" name="recoleccion" id="input" disabled>
                                            </div>

                                            <div class="form-group mt-5 col-xs-6 col-md-2 col-lg-2">
                                                <label class="label_steps" for="">Direccion</label> <br>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="rec" disabled>
                                                    +
                                                </button>
                                            </div>

                                            <div class="form-group mt-5 mb-5 col-6 col-md-3 col-lg-3">
                                                <label class="label_steps" for="">Forma de pago</label>
                                                <select class="form-select select2 " name="pago" id="pago">
                                                        <option value="{{$ticket->pago}}" selected>{{$ticket->pago}}</option>
                                                        <option value="Efectivo" {{ old('pago') == "Efectivo" ? 'selected' : '' }}>Efectivo</option>
                                                        <option value="Tarjeta de debito" {{ old('pago') == "Tarjeta de debito" ? 'selected' : '' }}>Tarjeta de Débito</option>
                                                        <option value="Tarjeta de credito" {{ old('pago') == "Tarjeta de credito" ? 'selected' : '' }}>Tarjeta de Crédito</option>
                                                        <option value="Transferencia bancaria" {{ old('pago') == "Transferencia bancaria" ? 'selected' : '' }}>Transferencia Bancaria</option>
                                                        <option value="Mercado pago" {{ old('pago') == "Mercado pago" ? 'selected' : '' }}>Mercado Pago</option>
                                                        <option value="Gifcard" {{ old('pago') == "Gifcard" ? 'selected' : '' }}>Gifcard --------------- $___</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                                                <label class="label_steps" for="">Gifcard</label> <br>
                                                <input class="form-control"  type="text" value="{{$ticket->gifcard}}" name="gifcard" id="gif" disabled>
                                            </div>

                                            <div class="form-group mt-5 mb-5 col-6 col-md-3 col-lg-3">
                                                <label class="label_steps" for="">Por pagar</label>
                                                <select class="form-select select2 " name="por_pagar" id="por_pagar">
                                                    <option value="{{$ticket->por_pagar}}" selected>{{$por_pagar}}</option>
                                                    <option value="2">No deja anticipo</option>
                                                    <option value="1">Anticipo</option>
                                                    <option value="0">Liquida la cuenta</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-5 col-6 col-md-3 col-lg-3">
                                                <label class="label_steps" for="">Anticipo</label> <br>
                                                <input class="form-control" type="text" name="por_pagar" id="pagar" value="{{$ticket->anticipo}}" disabled>
                                            </div>

                                            <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6">
                                                <label class="label_steps" for="">¿Requiere factura?</label>
                                                <select class="form-select select2 " name="factura" id="factura">
                                                    <option value="{{$ticket->Ticket->factura}}">{{$ticket->Ticket->factura}}</option>
                                                    <option value="no" {{ old('factura') == "no" ? 'selected' : '' }}>No</option>
                                                    <option value="si" {{ old('factura') == "si" ? 'selected' : '' }}>Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                                <label class="label_steps" for="">Direccion de factura</label> <br>
                                                <select class="form-select select2 " name="factura" id="facturacion" disabled>
                                                    <option value="no">Direccion 1</option>
                                                    <option value="si">Direccion 2</option>
                                                </select>
                                            </div>

                                            </div>

                                            <a class="btn-block btn_prev_tab mt-3 mb-1 prev">
                                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                Anterior
                                            </a>

                                        <button id="next1" class="btn-block btn_next_tab mt-3 mb-1 next mt-4">
                                                <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar
                                        </button>

                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')
    @include('ticket.script_inputs')
@endsection


