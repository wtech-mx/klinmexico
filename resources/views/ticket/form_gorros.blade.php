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

                                <div class="form-group col-6">
                                    <label for="">Cliente</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccionar usuario</option>
                                        @foreach ($client as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-4 col-6">
                                    <label for="">Klin Cap</label>
                                    <input class="form-check-input" type="checkbox" value="Klin Cap" id="servicio_primario" selected>
                                </div>

                                <div class="form-group mt-5 col-6">
                                    <label for="">Servicio secundario</label>
                                    <select class="form-select select2 select2-hidden-accessible" name="grado_academico" id="grado_academico">
                                        <option selected>Seleccionar tint</option>
                                            <option value="1">Tint 1</option>
                                            <option value="2">Tint 2</option>
                                            <option value="3">Tint 3</option>
                                            <option value="4">Personalizado</option>
                                    </select>
                                </div>

                                <div class="form-group mt-5 col-6">
                                    <label for="">Tint personalizado</label> <br>
                                    <input type="text" name="miinput" id="miinput" disabled>
                                </div>

                                <div class="form-group mt-3 mb-3 col-6">
                                    <label for="">Protector</label>
                                    <input class="form-check-input" type="checkbox" value="1" id="protector">
                                </div>

                            </div>

                            <button id="next1" class="btn-block text-center btn_steps mt-3 mb-1 next" style="">NEXT
                                <span class="fa fa-long-arrow-right"></span>
                            </button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <button class="btn-block btn_steps_2 mt-3 mb-1 prev">
                                <span class="fa fa-long-arrow-left"></span>PREVIOUS
                            </button>
                             <button id="next1" class="btn-block text-center btn_steps mt-3 mb-1 next" style="">NEXT
                                <span class="fa fa-long-arrow-right"></span>
                            </button>

                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <button class="btn-block btn_steps_2 mt-3 mb-1 prev">
                                <span class="fa fa-long-arrow-left"></span>PREVIOUS
                            </button>

                            <button id="next1" class="btn-block text-center btn_steps mt-3 mb-1 next" style="">NEXT
                                <span class="fa fa-long-arrow-right"></span>
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
