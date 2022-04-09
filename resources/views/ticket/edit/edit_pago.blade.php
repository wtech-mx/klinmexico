<!-- Modal -->
<div class="modal fade" id="examplePago_{{ $venta->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $venta->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar 0{{$rest}}-{{$rest2}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('ticket.update_precio', $venta->id) }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-xs-12 col-md-12 col-lg-12 ">

                            <div class="d-flex flex-row bd-highlight p-5">
                            <div class="bd-highlight">
                                <label class="label_steps text-dark" for="">Aplicar Promocion</label>
                                <select class="form-select select2 " name="promocion" id="promocion">
                                        <option value="{{$venta->Precio->promocion}}" selected>Promocion de {{$venta->Precio->promocion}}</option>
                                        <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Cliente Distinguido 1 ---- 10% </option>
                                        <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Cliente Distinguido 2 ---- 20% </option>
                                        <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cliente Distinguido 3 ---- 100% </option>
                                        <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Descuento Total --------- 10% </option>
                                        <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Descuento Total --------- 20%</option>
                                        <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cortesía ------------------ 100%</option>
                                </select>
                            </div>
                            </div>

                        </div>

                        <div class="form-group mt-4 col-xs-12 col-md-12 col-lg-12">
                                <div class="row text-dark p-4">

                                    <label class="label_steps" for="">Recolección</label> <br>
                                    @if ($venta->Precio->recoleccion == NULL)
                                        <div class="col-3">
                                            <div class="form-check  mb-3">
                                            <input class="form-check-input" type="radio" name="recoleccion" id="recoleccion" value="0" checked>
                                            <label class="form-check-label">
                                                No
                                            </label>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-3">
                                            <div class="form-check  mb-3">
                                            <input class="form-check-input" type="radio" name="recoleccion" id="recoleccion" value="0">
                                            <label class="form-check-label">
                                                No
                                            </label>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($venta->Precio->recoleccion != NULL)
                                        <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="recoleccion" id="recoleccion" value="1" checked>
                                            <label class="form-check-label">
                                                si
                                            </label>
                                        </div>
                                        </div>
                                        @else
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="recoleccion" id="recoleccion" value="1">
                                                <label class="form-check-label">
                                                    si
                                                </label>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-6">
                                            <input  class="form-control" type="number" name="recoleccion" id="input" value="{{$venta->Precio->recoleccion}}">
                                    </div>

                                    @if ($venta->Precio->pago == 'Efectivo')
                                    <div class="col-12 mt-5">
                                        <label class="label_steps" for="">Forma de Pago</label> <br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pago" id="pago" value="Efectivo" checked>
                                                <label class="form-check-label">
                                                    Efectivo
                                                </label>
                                            </div>
                                    </div>
                                    @else
                                    <div class="col-12 mt-5">
                                        <label class="label_steps" for="">Forma de Pago</label> <br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pago" id="pago" value="Efectivo">
                                                <label class="form-check-label">
                                                    Efectivo
                                                </label>
                                            </div>
                                    </div>
                                    @endif

                                    @if ($venta->Precio->pago == 'Tarjeta de debito')
                                    <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pago" id="pago" value="Tarjeta de debito" checked>
                                                <label class="form-check-label">
                                                    Tarjeta de Débito
                                                </label>
                                            </div>
                                    </div>
                                    @else
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pago" id="pago" value="Tarjeta de debito">
                                            <label class="form-check-label">
                                                Tarjeta de Débito
                                            </label>
                                        </div>
                                    </div>
                                    @endif

                                    @if ($venta->Precio->pago == 'Tarjeta de credito')
                                    <div class="col-12">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pago" id="pago" value="Tarjeta de credito" checked>
                                                <label class="form-check-label">
                                                    Tarjeta de Crédito
                                                </label>
                                            </div>
                                    </div>
                                    @else
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pago" id="pago" value="Tarjeta de credito">
                                            <label class="form-check-label">
                                                Tarjeta de Crédito
                                            </label>
                                        </div>
                                    </div>
                                    @endif

                                    @if ($venta->Precio->pago == 'Transferencia bancaria')
                                    <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pago" id="pago" value="Transferencia bancaria" checked>
                                                <label class="form-check-label">
                                                    Transferencia Bancaria
                                                </label>
                                            </div>
                                    </div>
                                    @else
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pago" id="pago" value="Transferencia bancaria">
                                            <label class="form-check-label">
                                                Transferencia Bancaria
                                            </label>
                                        </div>
                                    </div>
                                    @endif

                                    @if ($venta->Precio->pago == 'Mercado pago')
                                    <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pago" id="pago" value="Mercado pago" checked>
                                                <label class="form-check-label">
                                                    Mercado Pago
                                                </label>
                                            </div>
                                    </div>
                                    @else
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pago" id="pago" value="Mercado pago">
                                            <label class="form-check-label">
                                                Mercado Pago
                                            </label>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="row">
                                        @if ($venta->Precio->gifcard != NULL)
                                        <div class="col-6">
                                            <div class="form-check  mb-3">
                                                <input class="form-check-input" type="checkbox" name="gif" id="gif" checked>
                                                <label class="form-check-label" for="tint4">
                                                Gifcard
                                                </label>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-6">
                                            <div class="form-check  mb-3">
                                                <input class="form-check-input" type="checkbox" name="gif" id="gif" >
                                                <label class="form-check-label" for="tint4">
                                                Gifcard
                                                </label>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="col-12">
                                            <input class="form-control" type="number" name="gifcard" id="gifcard" value="{{$venta->Precio->gifcard}}">
                                        </div>
                                    </div>

                                    <label class="label_steps mt-5" for="">Factura</label> <br>
                                        <div class="col-3">
                                            <div class="form-check">
                                                @if ($venta->Precio->factura == 'no')
                                                    <input class="form-check-input" type="radio" name="factura" id="factura" value="no" checked>
                                                    <label class="form-check-label">
                                                        No
                                                    </label>
                                                @else
                                                    <input class="form-check-input" type="radio" name="factura" id="factura" value="no">
                                                    <label class="form-check-label">
                                                        No
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-check  mb-3">
                                                @if ($venta->Precio->factura != 'no')
                                                    <input class="form-check-input" type="radio" name="factura" id="factura" value="si" checked>
                                                    <label class="form-check-label">
                                                        Sí
                                                    </label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="factura" id="factura" value="si">
                                                    <label class="form-check-label">
                                                        Sí
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-check-label">
                                                Datos Factura
                                            </label>
                                            <div class="form-check">
                                                @if(!empty($venta))
                                                            <input class="form-check-input" type="radio" name="factura" id="factura" value="{{$client_factura->id}}">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{$client_factura->calle}} {{$client_factura->colonia}} {{$client_factura->alcaldia}} {{$client_factura->estado}} {{$client_factura->cp}}
                                                            </label>
                                                    <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_factura" id="rec" style="margin-left: 2rem;">
                                                        +
                                                    </a>
                                                @endif
                                            </div>
                                        </div>




                                    </div>
                        </div>

                        <div class="form-group mt-4 col-xs-12 col-md-12 col-lg-12">
                                <div class="row text-dark p-4">
                                    <label class="label_steps" for="">Dirección de Recolección</label> <br>

                                    <div class="col-6">
                                        <div class="form-check">
                                            @if (!empty($direccion))
                                                @foreach ($direccion as $item)
                                                        <input class="form-check-input" type="radio" name="id_direccion" id="id_direccion" value="{{$item->id}}">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            {{$item->calle}}, {{$item->colonia}}, {{$item->alcaldia}}, {{$item->estado}}, {{$item->cp}}
                                                        </label>
                                                @endforeach
                                                @else
                                                <strong class="label_steps" for="">No tiene direccion registrada</strong>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_direccion" id="rec" disabled>
                                            Registrar
                                        </a>
                                    </div>

                                    <div class="col-12">
                                        <label class="label_steps" for="">Por Pagar</label> <br>
                                        @if ($venta->Precio->anticipo == '2')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="2" checked>
                                                <label class="form-check-label">
                                                Sin Anticipo
                                                </label>
                                            </div>
                                        @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="2">
                                                <label class="form-check-label">
                                                Sin Anticipo
                                                </label>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        @if ($venta->Precio->anticipo == '0')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="0" checked>
                                                <label class="form-check-label">
                                                Liquida Cuenta
                                                </label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="0">
                                                <label class="form-check-label">
                                                Liquida Cuenta
                                                </label>
                                            </div>
                                        @endif
                                    </div>

                                        <div class="row">
                                            <div class="col-6">
                                        @if ($venta->Precio->anticipo != '0')
                                            <div class="form-check  mb-3">
                                                <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="1" >
                                                <label class="form-check-label" for="tint4">
                                                Anticipo
                                                </label>
                                            </div>
                                            @else
                                            <div class="form-check  mb-3">
                                                <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="1" checked>
                                                <label class="form-check-label" for="tint4">
                                                Anticipo
                                                </label>
                                            </div>
                                        @endif
                                            </div>

                                            @if ($venta->Precio->anticipo == '2' || $venta->Precio->anticipo == '0')
                                            <div class="col-6">
                                                <input class="form-control" type="text" name="por_pagar" id="por_pagar">
                                            </div>
                                            @else
                                            <div class="col-6">
                                                <input class="form-control" type="text" name="por_pagar" id="por_pagar" value="{{$venta->Precio->anticipo}}" >
                                            </div>
                                            @endif
                                        </div>


                                </div>
                        </div>
                    </div>
                    @include('ticket.direccion_modal')
                    @include('ticket.factura_modal')

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn">
                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar
                </button>
            </div>
        </form>
     </div>
    </div>
</div>

