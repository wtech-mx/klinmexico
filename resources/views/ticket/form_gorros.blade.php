<div class="row d-flex justify-content-center">
    <div class="col-12">
                    <div class="card card_steps b-0">

                        <fieldset class="show">
                            <div class="form-card text-black">
                                <div class="row">

                                        <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-3">
                                                    <label class="label_steps" for="">Agregar servicio</label>
                                                    <div class="form-check">
                                                        <input  class="form-check-input form-control" type="checkbox" checked >
                                                        <input  type="hidden" value="Klin Cap" name="servicio_primario" id="servicio_primario">
                                                            <label class="form-check-label" for="servicio_primario1">
                                                                Klin Cap
                                                            </label>
                                                      </div>
                                                </div>

                                        <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-3">
                                                    <label class="label_steps" for="">Agregar Extra</label>
                                                        <div class="form-check mb-3">
                                                            <input  class="form-check-input form-control" type="checkbox" value="1" name="protector" id="protector">
                                                                <label class="form-check-label" for="servicio_primario1">
                                                                    Protector
                                                                </label>
                                                        </div>

                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tint" id="tint" value="1">
                                                        <label class="form-check-label" for="tint">
                                                            Tint 1
                                                        </label>
                                                      </div>

                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tint" id="tint" value="2">
                                                        <label class="form-check-label" for="tint2">
                                                            Tint 2
                                                        </label>
                                                      </div>

                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tint" id="tint" value="3">
                                                        <label class="form-check-label" for="tint3">
                                                            Tint 3
                                                        </label>
                                                      </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                          <div class="form-check  mb-3">
                                                            <input class="form-check-input" type="radio" name="tint" id="tint" value="4">
                                                            <label class="form-check-label" for="tint4">
                                                                Tint personalizado
                                                            </label>
                                                          </div>
                                                        </div>

                                                        <div class="col-6">
                                                              <input  class="form-control" type="number" name="tint_personalizado" id="tint_personalizado" value="0" placeholder="$">
                                                        </div>
                                                    </div>

                                                    <label class="label_steps" for="">Descripcion del tint</label> <br>
                                                    <textarea class="form-control" name="tint_descripcion" id="descripcion" cols="30" rows="4"></textarea>

                                                </div>

                                    </div>

                                <a id="next1"  class="btn-block btn_next_tab mt-3 mb-1 next mt-4" >
                                    Siguiente<i class="fa fa-arrow-right" aria-hidden="true"></i>
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
                                        <input class="form-control" type="text" name="color1" id="color1">
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                        <label class="label_steps" for="">Color 2</label> <br>
                                        <input class="form-control" type="text" name="color2" id="color2">
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Talla</label> <br>
                                        <input class="form-control" type="text" name="talla" id="talla" placeholder="S- M - LG - XL">
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Categoria</label>
                                        <select class="form-select select2 " name="categoria" id="categoria">
                                                <option value="" selected>Seleccionar categoria</option>
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
                                                <option value="0" selected>Estandar --------- $0</option>
                                                <option value="110">Express ---------- $110</option>
                                        </select>
                                    </div>

                                    <label class="label_steps" for="" class="mb-2">Racks para gorras</label>

                                    @foreach ($racks2 as $item)
                                    @if ($item->estatus == 1)

                                    <div class="form-group col-2">
                                        <input class="form-check-input" type="checkbox" value="" name="num_rack" id="num_rack" checked disabled>
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$item->num_rack}}
                                        </label>
                                    </div>
                                        @else
                                        <div class="form-group col-2">
                                            <input class="form-check-input" type="checkbox" value="{{$item->num_rack}}" name="num_rack" id="num_rack">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            {{$item->num_rack}}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

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

                        {{-- <fieldset>
                            <div class="form-card text-black">
                                <div class="row">
                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Aplicar Promocion</label>
                                        <select class="form-select select2 " name="promocion" id="promocion">
                                                <option value="0" selected>Seleccionar forma</option>
                                                <option value=".10">Cliente Distinguido 1 ---- 10% </option>
                                                <option value=".20">Cliente Distinguido 2 ---- 20% </option>
                                                <option value=".100">Cliente Distinguido 3 ---- 100% </option>
                                                <option value=".10">Descuento Total --------- 10% </option>
                                                <option value=".20">Descuento Total --------- 20%</option>
                                                <option value=".100">Cortesía ------------------ 100%</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Recoleccion</label>
                                        <select class="form-select select2 " name="recoleccion" id="recoleccion2">
                                                <option value="" selected>Seleccionar recoleecion</option>
                                                <option value="0">No ---- 0%</option>
                                                <option value="1">Si ----- $__</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Recoleccion $</label> <br>
                                        <input  class="form-control" type="number" name="recoleccion" id="input2" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-xs-6 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Direccion</label> <br>
                                        <input  class="form-control" type="text" name="recoleccion" id="rec2" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Forma de pago</label>
                                        <select class="form-select select2 " name="pago" id="pago2">
                                                <option value="" selected>Seleccionar forma</option>
                                                <option value="Efectivo">Efectivo</option>
                                                <option value="Tarjeta de debito">Tarjeta de Débito</option>
                                                <option value="Tarjeta de credito">Tarjeta de Crédito</option>
                                                <option value="Transferencia bancaria">Transferencia Bancaria</option>
                                                <option value="Mercado pago">Mercado Pago</option>
                                                <option value="Gifcard">Gifcard --------------- $___</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Gifcard</label> <br>
                                        <input class="form-control"  type="text" name="gifcard" id="gif2" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Por pagar</label>
                                        <select class="form-select select2 " name="por_pagar" id="por_pagar2">
                                            <option value="" selected>Seleccionar forma</option>
                                            <option value="2">No deja anticipo</option>
                                            <option value="1">Anticipo</option>
                                            <option value="0">Liquida la cuenta</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Anticipo</label> <br>
                                        <input class="form-control"  type="text" name="por_pagar" id="pagar2" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">¿Requiere factura?</label>
                                        <select class="form-select select2 " name="factura" id="factura2">
                                            <option value="no">No</option>
                                            <option value="si">Si</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Direccion de factura</label> <br>
                                        <input class="form-control"  type="text" name="factura" id="facturacion2" disabled>
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
                        </fieldset> --}}

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
