<div class="row d-flex justify-content-center">
    <div class="col-12">
                    <div class="card card_steps b-0">

                        <ul id="progressbar" class="text-center">
                            <li class="active_steps step0" id="step1"></li>
                            <li class="step0" id="step2"></li>
                            <li class="step0" id="step4"></li>
                        </ul>

                        <fieldset class="show">
                            <div class="form-card text-black">
                                <div class="row">

                                    <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                                        <label class="label_steps" for="">Cliente</label>
                                        <select class="form-select" aria-label="Default select example" name="id_user" id="id_user">
                                            <option selected>Seleccionar usuario</option>
                                            @foreach ($client as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-md-6 col-lg-6">
                                        <label class="label_steps" for="">Protector -- $55</label>
                                        <input  class="form-check-input form-control" type="checkbox" checked disabled>
                                        <input  type="hidden" value="Protector" name="servicio_primario" id="servicio_primario">
                                        <input  type="hidden" value="55" name="precio_cap" id="precio_cap">
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

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Forma de pago</label>
                                        <select class="form-select select2 select2-hidden-accessible" name="pago" id="pago">
                                                <option selected>Seleccionar forma</option>
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
                                        <input class="form-control"  type="text" name="gifcard" id="gif" disabled>
                                    </div>

                                    <div class="form-group mt-5 mb-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Por pagar</label>
                                        <select class="form-select select2 select2-hidden-accessible" name="por_pagar" id="por_pagar">
                                            <option selected>Seleccionar forma</option>
                                            <option value="2">No deja anticipo</option>
                                            <option value="1">Anticipo</option>
                                            <option value="0">Liquida la cuenta</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-5 col-6 col-md-6 col-lg-4">
                                        <label class="label_steps" for="">Anticipo</label> <br>
                                        <input class="form-control"  type="text" name="por_pagar" id="pagar" disabled>
                                    </div>

                                    <div class="form-group mt-5 col-12 col-md-12 col-lg-4">
                                        <label class="label_steps" for="">Factura</label> <br>
                                        <input class="form-control"  type="text" value="1" name="factura" id="factura">
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
