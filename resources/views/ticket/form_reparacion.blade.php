<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card card_steps b-0">

            <ul id="progressbar" class="text-center">
                <li class="active_steps step0" id="step1"></li>
                <li class="step0" id="step2"></li>
                <li class="step0" id="step3"></li>
                <li class="step0" id="step4"></li>
            </ul>

            <fieldset class="show">
                <div class="form-card text-black">
                    <div class="row">

                        <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                            <label class="label_steps" for="">Cliente</label> <br>
                            <select class="form-select" aria-label="Default select example" name="id_user" id="mi-selector4">
                                <option selected>Seleccionar usuario</option>
                                @foreach ($client as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-xs-12 col-md-3 col-lg-3">
                            <label class="label_steps" for="">Fixer Snkrs</label>
                            <input  class="form-check-input form-control" type="checkbox" checked disabled>
                            <input  type="hidden" value="Fixer Snkrs" name="servicio_primario" id="servicio_primario">
                        </div>

                        <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                            <label class="label_steps" for="">Glue</label>
                            <select class="form-select select2 " name="glue" id="glue">
                                <option value="" selected>Seleccionar Glue</option>
                                <option value="1">Sole Glue Media</option>
                                <option value="2">Sole Glue Full</option>
                            </select>
                        </div>

                        <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                            <label class="label_steps" for="">Sew</label>
                            <select class="form-select select2 " name="sew" id="sew">
                                <option value="" selected>Seleccionar Sew</option>
                                <option value="1">Sole Sew 5cm</option>
                                <option value="2">Sole Sew Full</option>
                            </select>
                        </div>

                        <div class="form-group mt-4 col-xs-12 col-md-6 col-lg-6">
                            <label class="label_steps" for="">Generic Sole AF1</label>
                            <input  class="form-check-input form-control" type="checkbox" value="1" name="sole" id="sole">
                        </div>

                        <div class="form-group mt-4 col-xs-12 col-md-6 col-lg-6">
                            <label class="label_steps" for="">Invisible Snkers Patch</label>
                            <input  class="form-check-input form-control" type="checkbox" value="1" name="invisible" id="invisible">
                        </div>

                        <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                            <label class="label_steps" for="">Fixer Personalizado</label> <br>
                            <input  class="form-control" type="number" name="personalizado" id="personalizado" placeholder="$">
                        </div>

                        <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                            <label class="label_steps" for="">Snkrs</label>
                            <select class="form-select select2 " name="patch" id="patch">
                                <option value="" selected>Seleccionar Sew</option>
                                <option value="1">Snkrs patch par</option>
                                <option value="2">Snkrs patch 1pz</option>
                                <option value="3">Heel stopper dama</option>
                                <option value="4">Heel stopper caballero</option>
                            </select>
                        </div>

                    </div>

                    <a id="next1"  class="btn-block btn_next_tab mt-3 mb-1 next mt-4" >
                        Siguiente
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>
            </fieldset>

            <fieldset>
                            <div class="form-card text-black">
                                <div class="row">
                                    <h5 class="text-center mb-4">Descripcion</h5>

                                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Marca</label> <br>
                                        <input class="form-control"  type="text" name="marca" id="marca" placeholder="Marca de la prenda">
                                    </div>

                                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Modelo</label> <br>
                                        <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Marca de la prenda">
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                        <label class="label_steps" for="">Color 1</label> <br>
                                        <input class="form-control" type="color" name="color1" id="color1">
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                        <label class="label_steps" for="">Color 2</label> <br>
                                        <input class="form-control" type="color" name="color2" id="color2">
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Talla</label> <br>
                                        <input class="form-control" type="text" name="talla" id="talla" placeholder="S- M - LG - XL">
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Categoria</label>
                                        <select class="form-select select2 " name="categoria" id="categoria">
                                                <option selected>Seleccionar categoria</option>
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                                <option value="Niño">Niño</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Observaciones</label> <br>
                                        <textarea class="form-control" name="observacion" id="observacion" cols="30" rows="5"></textarea>
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
                <div class="form-card text-black">
                    <div class="row">
                        <div class="form-group mt-5 mb-5 col-12">
                            <label class="label_steps" for="">Tipo de servicio</label>
                            <select class="form-select select2 " name="tipo_servicio" id="tipo_servicio">
                                    <option selected>Seleccionar servicio</option>
                                    <option value="0">Estandar $0</option>
                                    <option value="110">Mujer $110</option>
                            </select>
                        </div>

                            <label class="label_steps" for="" class="mb-2">Racks para gorras</label>
                            @include('ticket.rack_reparacion')

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
                            <div class="form-card text-black">
                                <div class="row">
                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Aplicar Promocion</label>
                                        <select class="form-select select2 " name="promocion" id="promocion">
                                                <option selected>Seleccionar forma</option>
                                                <option value=".10">Cliente Distinguido 1</option>
                                                <option value=".20">Cliente Distinguido 2</option>
                                                <option value=".100">Cliente Distinguido 3</option>
                                                <option value=".10">10% Descuento Total</option>
                                                <option value=".20">20% Descuento Total</option>
                                                <option value=".100">Cortesía</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Recoleccion</label>
                                        <select class="form-select select2 " name="recoleccion" id="recoleccion4">
                                                <option value="" selected>Seleccionar recoleecion</option>
                                                <option value="2">No ---- 0%</option>
                                                <option value="1">si ----- $__</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Recoleccion $</label> <br>
                                        <input  class="form-control" type="number" name="recoleccion" id="input4" disabled>
                                    </div>

                                    <div class="form-group col-xs-6 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Direccion</label> <br>
                                        <input  class="form-control" type="number" name="recoleccion" id="rec4" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Forma de pago</label>
                                        <select class="form-select select2 " name="pago" id="pago4">
                                                <option selected>Seleccionar forma</option>
                                                <option value="Efectivo">Efectivo</option>
                                                <option value="Tarjeta de debito">Tarjeta de Débito</option>
                                                <option value="Tarjeta de credito">Tarjeta de Crédito</option>
                                                <option value="Transferencia bancaria">Transferencia Bancaria</option>
                                                <option value="Mercado pago">Mercado Pago</option>
                                                <option value="Gifcard">Gifcard</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Gifcard</label> <br>
                                        <input class="form-control"  type="text" name="gifcard" id="gif4" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Por pagar</label>
                                        <select class="form-select select2 " name="por_pagar" id="por_pagar4">
                                            <option value="" selected>Seleccionar forma</option>
                                            <option value="2">No deja anticipo</option>
                                            <option value="1">Anticipo</option>
                                            <option value="0">Liquida la cuenta</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Anticipo</label> <br>
                                        <input class="form-control"  type="text" name="por_pagar" id="pagar4" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">¿Requiere factura?</label>
                                        <select class="form-select select2 " name="factura" id="factura4">
                                            <option value="no">No</option>
                                            <option value="si">Si</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Direccion de factura</label> <br>
                                        <input class="form-control"  type="text" name="factura" id="facturacion4" disabled>
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

            <fieldset>
                <div class="form-card">
                    <h5 class="sub-heading mb-4">Success!</h5>
                    <p class="message">Thank You for choosing our website.<br>Quotation will be sent to your
                        Email ID and Contact Number.</p>
                    <div class="check">
                        <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif">
                    </div>
                </div>
            </fieldset>

        </div>
    </div>
</div>
