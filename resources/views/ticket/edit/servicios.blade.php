@switch($ticket)
    @case($ticket->Ticket->servicio_primario == 'Plus')
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
        @break
    @case($ticket->Ticket->servicio_primario == 'Klin Cap')
        <div class="form-card text-black">
            <div class="row">

                <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                    <label class="label_steps" for="">Cliente</label> <br>
                    <select class="form-select "  name="id_user" id="mi-selector2">
                        <option selected>Seleccionar usuario</option>
                        @foreach ($client as $item)
                            <option value="{{$item->id}}">{{$item->name}} / {{$item->telefono}} / {{$item->email}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-3">
                    <label class="label_steps" for="">Klin Cap</label>
                    <input  class="form-check-input form-control" type="checkbox" checked disabled>
                    <input  type="hidden" value="Klin Cap" name="servicio_primario" id="servicio_primario">
                    <input  type="hidden" value="60" name="precio_cap" id="precio_cap">
                </div>

                <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-3">
                    <label class="label_steps" for="">Protector - $55</label>
                    <input  class="form-check-input form-control" type="checkbox" value="1" name="protector" id="protector">
                </div>

                <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                    <label class="label_steps" for="">Servicio secundario</label>
                    <select class="form-select select2 " name="tint" id="tint2">
                        <option value="0" selected>Seleccionar tint</option>
                            <option value="1">Tint 1 ----------- $160</option>
                            <option value="2">Tint 2 ----------- $300</option>
                            <option value="3">Tint 3 ----------- $450</option>
                            <option value="4">Personalizado -- $____</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                    <label class="label_steps" for="">Tint personalizado $$</label> <br>
                    <input  class="form-control" type="text" name="tint" id="miinput2" disabled>
                </div>

                <div class="form-group mt-4 mb-3 col-xs-12 col-md-12 col-lg-6">
                    <label class="label_steps" for="">Descripcion del tint</label> <br>
                    <textarea class="form-control" name="tint_descripcion" id="descripcion2" cols="30" rows="5" disabled></textarea>
                </div>


            </div>

                <a id="next1"  class="btn-block btn_next_tab mt-3 mb-1 next mt-4" >
                    Siguiente
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

        </div>
    @break
    @case($ticket->Ticket->servicio_primario == 'Klin Bag')
        <div class="form-card text-black">
            <div class="row">

                <div class="form-group col-xs-12 col-md-6 col-lg-6 ">
                    <label class="label_steps" for="">Cliente</label> <br>
                    <select class="form-select " aria-label="Default select example" name="id_user" id="mi-selector3">
                        <option selected>Seleccionar usuario</option>
                        @foreach ($client as $item)
                            <option value="{{$item->id}}">{{$item->name}}  / {{$item->telefono}} / {{$item->email}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-xs-12 col-md-2 col-lg-2">
                    <label class="label_steps" for="">Klin Bag</label>
                    <input  class="form-check-input form-control" type="checkbox" checked disabled>
                    <input  type="hidden" value="Klin Bag" name="servicio_primario" id="servicio_primario">
                </div>

                <div class="form-group col-xs-12 col-md-4 col-lg-4 ">
                    <label class="label_steps" for="">Bolsos & backpacks *</label>
                    <select class="form-select select2 " name="klin" id="klin" required>
                        <option value="">Selecciona klin</option>
                            <option value="Klin Bag">Klin Bag ------------- $160 </option>
                            <option value="Klin Purse">Klin Purse ----------- $110</option>
                            <option value="Klin Bag Extra">Klin Bag Extra ------- $260</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                    <label class="label_steps" for="">Servicio secundario</label>
                    <select class="form-select select2 " name="tint" id="tint3">
                        <option value="0" selected>Seleccionar tint</option>
                            <option value="1">Tint 1 ----------- $160</option>
                            <option value="2">Tint 2 ----------- $300</option>
                            <option value="3">Tint 3 ----------- $450</option>
                            <option value="4">Personalizado -- $____</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-xs-12 col-md-6 col-lg-6 ">
                    <label class="label_steps" for="">Tint personalizado $$</label> <br>
                    <input  class="form-control" type="text" name="tint" id="miinput3" disabled>
                </div>

                <div class="form-group mt-4 mb-3 col-xs-12 col-md-12 col-lg-12">
                    <label class="label_steps" for="">Descripcion del tint</label> <br>
                    <textarea class="form-control" name="tint_descripcion" id="descripcion3" cols="30" rows="5" disabled></textarea>
                </div>


            </div>

                <a id="next1"  class="btn-block btn_next_tab mt-3 mb-1 next mt-4" >
                    Siguiente
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

        </div>
    @break
    @case($ticket->Ticket->servicio_primario == 'Fixer Snkrs')
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
    @break
@endswitch
