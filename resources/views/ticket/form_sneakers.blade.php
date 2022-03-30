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
                                        <label class="label_steps" for="">Cliente *</label> <br>
                                        <select class="form-select" name="id_user" id="mi-selector">
                                            <option selected>Seleccionar usuario</option>
                                            @foreach ($client as $item)
                                                <option value="{{$item->id}}" {{ old($item->id) == "id_user" ? 'selected' : '' }}>{{$item->name}} / {{$item->telefono}} / {{$item->email}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                                        <label class="label_steps" for="">Sneakers y calzado *</label>
                                        <select class="form-select select2" name="servicio_primario" id="servicio_primario" @error('servicio_primario') is-invalid @enderror">
                                            <option value="0" selected>Servicio primario</option>
                                                <option value="Essential" {{ old('servicio_primario') == "Essential" ? 'selected' : '' }}>Essential ----------- $110</option>
                                                <option value="Plus" {{ old('servicio_primario') == "Plus" ? 'selected' : '' }}>Plus ----------- $160</option>
                                                <option value="Elite" {{ old('servicio_primario') == "Elite" ? 'selected' : '' }}>Elite ----------- $190</option>
                                                <option value="Pure White" {{ old('servicio_primario') == "Pure White" ? 'selected' : '' }}>Pure White ----------- $170</option>
                                                <option value="Special Care" {{ old('servicio_primario') == "Special Care" ? 'selected' : '' }}>Special Care ----------- $160</option>
                                        </select>
                                            @error('servicio_primario')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group col-md-12 col-lg-12 mt-5 mb-2">
                                        <h4 class="label_steps">Serivicios secundarios</h4>
                                    </div>

                                    <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                                        <label class="label_steps" for="">Unyellow - $80</label>
                                        <input  class="form-check-input form-control" type="checkbox" value="1" name="unyellow" id="unyellow" >
                                    </div>

                                    <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                                        <label class="label_steps" for="">Klin Dye - $260</label>
                                        <input  class="form-check-input form-control" type="checkbox" value="1" name="klin_dye" id="klin_dye" >
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-3 col-lg-3 ">
                                        <label class="label_steps" for="">Tint</label>
                                        <select class="form-select select2 " name="tint" id="tint">
                                            <option value="0" selected>Seleccionar tint</option>
                                                <option value="1"{{ old('tint') == 1 ? 'selected' : '' }}>Tint 1 ----------- $160</option>
                                                <option value="2"{{ old('tint') == 2 ? 'selected' : '' }}>Tint 2 ----------- $300</option>
                                                <option value="3"{{ old('tint') == 3 ? 'selected' : '' }}>Tint 3 ----------- $450</option>
                                                <option value="4"{{ old('tint') == 4 ? 'selected' : '' }}>Personalizado -- $____</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-3 col-lg-3 ">
                                        <label class="label_steps" for="">Tint personalizado $$</label> <br>
                                        <input  class="form-control" type="text" name="tint" id="miinput" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-3 col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Descripcion del tint</label> <br>
                                        <textarea class="form-control" name="tint_descripcion" id="descripcion" cols="30" rows="4" disabled></textarea>
                                    </div>

                                    <h4 class="label_steps mt-3">Fixer</h4>

                                    <div class="form-group col-xs-12 col-md-3 col-lg-3">
                                        <label class="label_steps" for="">Glue</label>
                                        <select class="form-select" name="glue" id="glue">
                                            <option value="" selected>Seleccione Glue</option>
                                                <option value="1"{{ old('glue') == 1 ? 'selected' : '' }}>Sole Glue Media ----------- $130</option>
                                                <option value="2"{{ old('glue') == 2 ? 'selected' : '' }}>Sole Glue Full ----------- $130</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-md-3 col-lg-3">
                                        <label class="label_steps" for="">Sew</label>
                                        <select class="form-select" name="sew" id="sew">
                                            <option value="" selected>Seleccione Sew</option>
                                                <option value="1" {{ old('glue') == 1 ? 'selected' : '' }}>Sole Sew 5cm ----------- $130</option>
                                                <option value="2" {{ old('glue') == 2 ? 'selected' : '' }}>Sole Sew Full ----------- $240</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-md-3 col-lg-3">
                                        <label class="label_steps" for="">Generic Sole AF1 --- $520</label>
                                        <input  class="form-check-input form-control" type="checkbox" value="1" name="sole" id="sole">
                                    </div>

                                    <div class="form-group col-xs-12 col-md-3 col-lg-3">
                                        <label class="label_steps" for="">Invisible Snkers Patch --- $180</label>
                                        <input  class="form-check-input form-control" type="checkbox" value="1" name="invisible" id="invisible">
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Fixer Personalizado</label>
                                        <input class="form-control" type="number" name="personalizado" id="personalizado" placeholder="$">
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Snkrs</label>
                                        <select class="form-select" name="patch" id="patch">
                                            <option value="" selected>Seleccione Snkrs</option>
                                                <option value="1" {{ old('patch') == 1 ? 'selected' : '' }}>Snkrs patch par ----------- $240</option>
                                                <option value="2" {{ old('patch') == 2 ? 'selected' : '' }}>Snkrs patch 1pz ----------- $160</option>
                                                <option value="3" {{ old('patch') == 3 ? 'selected' : '' }}>Heel stopper dama ----------- $160</option>
                                                <option value="4" {{ old('patch') == 4 ? 'selected' : '' }}>Heel stopper caballero ----------- $240</option>
                                        </select>
                                    </div>


                                </div>

                                    <a id="next1" class="btn-block btn_next_tab mt-3 mb-1 next mt-4" >
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
                                        <input class="form-control @error('marca') is-invalid @enderror"  type="text" name="marca" id="marca" placeholder="Marca de la prenda" value="{{ old('marca') }}">
                                        @error('marca')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Modelo</label> <br>
                                        <input class="form-control @error('modelo') is-invalid @enderror" type="text" name="modelo" id="modelo" placeholder="Marca de la prenda" value="{{ old('modelo') }}">
                                        @error('modelo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                        <label class="label_steps" for="">Color 1</label> <br>
                                        <input class="form-control @error('color1') is-invalid @enderror" type="color" name="color1" id="color1" value="{{ old('color1') }}">
                                        @error('color1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                        <label class="label_steps" for="">Color 2</label> <br>
                                        <input class="form-control @error('color2') is-invalid @enderror" type="color" name="color2" id="color2" value="{{ old('color2') }}">
                                        @error('color2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Talla</label> <br>
                                        <input class="form-control @error('talla') is-invalid @enderror" type="text" name="talla" id="talla" placeholder="S- M - LG - XL" value="{{ old('talla') }}">
                                        @error('talla')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Categoria</label>
                                        <select class="form-select select2 " name="categoria" id="categoria">
                                                <option selected>Seleccionar categoria</option>
                                                <option value="Hombre" {{ old('categoria') == "Hombre" ? 'selected' : '' }} >Hombre</option>
                                                <option value="Mujer" {{ old('categoria') == "Mujer" ? 'selected' : '' }} >Mujer</option>
                                                <option value="Niño" {{ old('categoria') == "Niño" ? 'selected' : '' }} >Niño</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                        <label class="label_steps" for="">Observaciones</label> <br>
                                        <textarea class="form-control" name="observacion" id="observacion" cols="30" rows="5">
                                           {{ old('observacion') }}
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
                            <div class="form-card text-black">
                                <div class="row">
                                    <div class="form-group mt-5 mb-5 col-12">
                                        <label class="label_steps" for="">Tipo de servicio</label>
                                        <select class="form-select select2 " name="tipo_servicio" id="tipo_servicio">
                                                <option selected>Seleccionar servicio</option>
                                                <option value="0" {{ old('tipo_servicio') == 0 ? 'selected' : '' }}>Estandar --------- $0</option>
                                                <option value="110" {{ old('tipo_servicio') == 110 ? 'selected' : '' }}>Express ---------- $110</option>
                                        </select>
                                    </div>

                                    <label class="label_steps" for="" class="mb-2">Racks para sneakers o calzado</label>

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
                                                <option value="0" selected>Seleccionar forma</option>
                                                <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Cliente Distinguido 1 ---- 10% </option>
                                                <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Cliente Distinguido 2 ---- 20% </option>
                                                <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cliente Distinguido 3 ---- 100% </option>
                                                <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Descuento Total --------- 10% </option>
                                                <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Descuento Total --------- 20%</option>
                                                <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cortesía ------------------ 100%</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Recoleccion</label>
                                        <select class="form-select select2 " name="recoleccion" id="recoleccio">
                                                <option value="" selected>Seleccionar recoleecion</option>
                                                <option value="0" {{ old('recoleccion') == 0 ? 'selected' : '' }}>No ---- 0%</option>
                                                <option value="1" {{ old('recoleccion') == 1 ? 'selected' : '' }}>Si ----- $__</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Recoleccion $</label> <br>
                                        <input  class="form-control" type="number" name="recoleccion" id="input" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-xs-6 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Direccion</label> <br>
                                        <input  class="form-control" type="text" name="recoleccion" id="rec" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Forma de pago</label>
                                        <select class="form-select select2 " name="pago" id="pago">
                                                <option selected>Seleccionar forma</option>
                                                <option value="Efectivo" {{ old('pago') == "Efectivo" ? 'selected' : '' }}>Efectivo</option>
                                                <option value="Tarjeta de debito" {{ old('pago') == "Tarjeta de debito" ? 'selected' : '' }}>Tarjeta de Débito</option>
                                                <option value="Tarjeta de credito" {{ old('pago') == "Tarjeta de credito" ? 'selected' : '' }}>Tarjeta de Crédito</option>
                                                <option value="Transferencia bancaria" {{ old('pago') == "Transferencia bancaria" ? 'selected' : '' }}>Transferencia Bancaria</option>
                                                <option value="Mercado pago" {{ old('pago') == "Mercado pago" ? 'selected' : '' }}>Mercado Pago</option>
                                                <option value="Gifcard" {{ old('pago') == "Gifcard" ? 'selected' : '' }}>Gifcard --------------- $___</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Gifcard</label> <br>
                                        <input class="form-control"  type="text" name="gifcard" id="gif" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Por pagar</label>
                                        <select class="form-select select2 " name="por_pagar" id="por_pagar">
                                            <option value="" selected>Seleccionar forma</option>
                                            <option value="2" {{ old('por_pagar') == 2 ? 'selected' : '' }}>No deja anticipo</option>
                                            <option value="1" {{ old('por_pagar') == 1 ? 'selected' : '' }}>Anticipo</option>
                                            <option value="0" {{ old('por_pagar') == 0 ? 'selected' : '' }}>Liquida la cuenta</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Anticipo</label> <br>
                                        <input class="form-control"  type="text" name="por_pagar" id="pagar" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">¿Requiere factura?</label>
                                        <select class="form-select select2 " name="factura" id="factura">
                                            <option value="no" {{ old('factura') == "no" ? 'selected' : '' }}>No</option>
                                            <option value="si" {{ old('factura') == "si" ? 'selected' : '' }}>Si</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Direccion de factura</label> <br>
                                        <input class="form-control"  type="text" name="factura" id="facturacion" disabled>
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

                    </div>
                </div>
    </div>
