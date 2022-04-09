<!-- Modal -->
<div class="modal fade" id="exampleGorras_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar {{ $item->servicio_primario }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('ticket.update', $item->Venta->id) }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                    <div class="form-card text-black">
                        <div class="row">

                                <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-3">
                                            <label class="label_steps" for="">Editar/Agregar servicio</label>
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
                                                    @if ($item->protector == '1')
                                                        <input  class="form-check-input form-control" type="checkbox" value="1" name="protector" id="protector" checked>
                                                        <label class="form-check-label" for="servicio_primario1">
                                                            Protector
                                                        </label>
                                                        @else
                                                        <input  class="form-check-input form-control" type="checkbox" value="1" name="protector" id="protector">
                                                        <label class="form-check-label" for="servicio_primario1">
                                                            Protector
                                                        </label>
                                                        @endif
                                                </div>

                                                <div class="form-check">
                                                @if ($item->tint == '1')
                                                <input class="form-check-input" type="radio" name="tint" id="tint" value="1" checked>
                                                <label class="form-check-label" for="tint">
                                                    Tint 1
                                                </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="tint" id="tint" value="1">
                                                <label class="form-check-label" for="tint">
                                                    Tint 1
                                                </label>
                                                @endif
                                                </div>

                                                <div class="form-check">
                                                @if ($item->tint == '2')
                                                <input class="form-check-input" type="radio" name="tint" id="tint" value="2" checked>
                                                <label class="form-check-label" for="tint2">
                                                    Tint 2
                                                </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="tint" id="tint" value="2">
                                                <label class="form-check-label" for="tint2">
                                                    Tint 2
                                                </label>
                                                @endif
                                                </div>

                                                <div class="form-check">
                                                @if ($item->tint == '3')
                                                <input class="form-check-input" type="radio" name="tint" id="tint" value="3" checked>
                                                <label class="form-check-label" for="tint3">
                                                    Tint 3
                                                </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="tint" id="tint" value="3">
                                                <label class="form-check-label" for="tint3">
                                                    Tint 3
                                                </label>
                                                @endif
                                                </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-check  mb-3">
                                                    @if ($item->tint == '1' || $item->tint == '2' || $item->tint == '3')
                                                    <input class="form-check-input" type="radio" name="tint" id="tint" value="4" >
                                                    <label class="form-check-label" for="tint4">
                                                        Tint personalizado
                                                    </label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="tint" id="tint" value="4" checked>
                                                    <label class="form-check-label" for="tint4">
                                                        Tint personalizado
                                                    </label>
                                                    @endif
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    @if ($item->tint != '1' || $item->tint != '2' || $item->tint != '3')
                                                        <input  class="form-control" type="number" name="tint_personalizado" id="tint_personalizado" value="{{$item->tin}}">
                                                        @else
                                                        <input  class="form-control" type="number" name="tint_personalizado" id="tint_personalizado" value="0" placeholder="$">
                                                    @endif
                                                </div>
                                            </div>

                                            <label class="label_steps" for="">Descripcion del tint</label> <br>
                                            <textarea class="form-control" name="tint_descripcion" id="descripcion" cols="30" rows="4"></textarea>

                                        </div>

                            </div>
                    </div>

                    <div class="form-card text-black">
                        <div class="row">
                            <h5 class="text-center mb-4">Descripcion</h5>

                            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                <label class="label_steps" for="">Marca</label> <br>
                                <input class="form-control @error('marca') is-invalid @enderror"  type="text" name="marca" id="marca" value="{{$item->DescripcionTicket->marca}}">
                                @error('marca')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                                <label class="label_steps" for="">Modelo</label> <br>
                                <input class="form-control @error('modelo') is-invalid @enderror" type="text" name="modelo" id="modelo" value="{{$item->DescripcionTicket->modelo}}">
                                @error('modelo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                <label class="label_steps" for="">Color 1</label> <br>
                                <input class="form-control @error('color1') is-invalid @enderror" type="text" name="color1" id="color1" value="{{$item->DescripcionTicket->color1}}">
                                @error('color1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 col-6 col-md-6 col-lg-3">
                                <label class="label_steps" for="">Color 2</label> <br>
                                <input class="form-control @error('color2') is-invalid @enderror" type="text" name="color2" id="color2" value="{{$item->DescripcionTicket->color2}}">
                                @error('color2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                <label class="label_steps" for="">Numero</label> <br>
                                <input class="form-control @error('talla') is-invalid @enderror" type="text" name="talla" id="talla" value="{{$item->DescripcionTicket->talla}}">
                                @error('talla')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 col-xs-12 col-md-12 col-lg-6">
                                <label class="label_steps" for="">Categoria</label>
                                <select class="form-select select2 " name="categoria" id="categoria">
                                        <option value="{{$item->DescripcionTicket->categoria}}" selected>{{$item->DescripcionTicket->categoria}}</option>
                                        <option value="Hombre" {{ old('categoria') == "Hombre" ? 'selected' : '' }} >Hombre</option>
                                        <option value="Mujer" {{ old('categoria') == "Mujer" ? 'selected' : '' }} >Mujer</option>
                                        <option value="Niño" {{ old('categoria') == "Niño" ? 'selected' : '' }} >Niño</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    @php
                        if ($item->DescripcionTicket->tipo_servicio == '0') {
                            $tipo = 'Estandar --------- $0';
                        }else {
                            $tipo = 'Express ---------- $110';
                        }
                    @endphp
                    <div class="form-card text-black">
                        <div class="row">
                            <div class="form-group mt-5 mb-5 col-12">
                                <label class="label_steps" for="">Tipo de servicio</label>
                                <select class="form-select select2 " name="tipo_servicio" id="tipo_servicio">
                                        <option value="{{$item->DescripcionTicket->tipo_servicio}}" selected>Seleccionar servicio</option>
                                        <option value="0" {{ old('tipo_servicio') == 0 ? 'selected' : '' }}>Estandar --------- $0</option>
                                        <option value="110" {{ old('tipo_servicio') == 110 ? 'selected' : '' }}>Express ---------- $110</option>
                                </select>
                            </div>

                            <label class="label_steps" for="" class="mb-2">Racks para Gorras</label>

                            @foreach ($racks_cap as $cap)
                            @if ($cap->estatus == 1)
                                @if ($cap->num_rack == $item->rack)
                                <div class="form-group col-2">
                                    <input class="form-check-input" type="checkbox" value="{{$cap->num_rack}}" name="num_rack" id="num_rack" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                    {{$cap->num_rack}}
                                    </label>
                                </div>
                                @else
                                <div class="form-group col-2">
                                    <input class="form-check-input" type="checkbox" value="" name="num_rack" id="num_rack" checked disabled>
                                    <label class="form-check-label" for="flexCheckDefault">
                                    {{$cap->num_rack}}
                                    </label>
                                </div>
                                @endif

                            @else
                                <div class="form-group col-2">
                                    <input class="form-check-input" type="checkbox" value="{{$cap->num_rack}}" name="num_rack" id="num_rack">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    {{$cap->num_rack}}
                                    </label>
                                </div>
                            @endif
                        @endforeach

                        </div>
                    </div>

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
