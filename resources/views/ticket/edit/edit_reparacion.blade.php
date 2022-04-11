<!-- Modal -->
<div class="modal fade" id="exampleReparacion_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
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
                            <div class="form-group mt-4 col-12">
                                        <label class="label_steps" for="">Editar servicio</label><br><br>
                                        <input  type="hidden" value="Fixer Snkrs" name="servicio_primario" id="servicio_primario">

                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->glue == '1')
                                        <input class="form-check-input" type="radio" name="glue" id="glue" value="1" checked>
                                        <label class="form-check-label" for="glue">
                                            Sole Glue Media
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="glue" id="glue" value="1">
                                        <label class="form-check-label" for="glue">
                                            Sole Glue Media
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check mb-3">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->glue == '2')
                                        <input class="form-check-input" type="radio" name="glue" id="glue2" value="2" checked>
                                        <label class="form-check-label" for="glue2">
                                            Sole Glue Full
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="glue" id="glue2" value="2">
                                        <label class="form-check-label" for="glue2">
                                            Sole Glue Full
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->sew == '1')
                                        <input class="form-check-input" type="radio" name="sew" id="sew" value="1" checked>
                                        <label class="form-check-label" for="sew">
                                            Sole Sew 5cm
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="sew" id="sew" value="1">
                                        <label class="form-check-label" for="sew">
                                            Sole Sew 5cm
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check mb-3">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->sew == '2')
                                        <input class="form-check-input" type="radio" name="sew" id="sew2" value="2" checked>
                                        <label class="form-check-label" for="sew2">
                                            Sole Sew Full
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="sew" id="sew2" value="2">
                                        <label class="form-check-label" for="sew2">
                                            Sole Sew Full
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check mb-3">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->sole == '1')
                                        <input class="form-check-input" type="radio" name="sole" id="sole" value="1" checked>
                                        <label class="form-check-label" for="sole">
                                            Generic Sole AF1
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="sole" id="sole" value="1">
                                        <label class="form-check-label" for="sole">
                                            Generic Sole AF1
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->patch == '1')
                                        <input class="form-check-input" type="radio" name="patch" id="patch" value="1" checked>
                                        <label class="form-check-label" for="patch">
                                            Snkrs patch par
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="patch" id="patch" value="1">
                                        <label class="form-check-label" for="patch">
                                            Snkrs patch par
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->patch == '2')
                                        <input class="form-check-input" type="radio" name="patch" id="patch2" value="2" checked>
                                        <label class="form-check-label" for="patch2">
                                            Snkrs patch 1pz
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="patch" id="patch2" value="2">
                                        <label class="form-check-label" for="patch2">
                                            Snkrs patch 1pz
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->patch == '3')
                                        <input class="form-check-input" type="radio" name="patch" id="patch3" value="3" checked>
                                        <label class="form-check-label" for="patch3">
                                            Heel stopper dama
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="patch" id="patch3" value="3">
                                        <label class="form-check-label" for="patch3">
                                            Heel stopper dama
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check mb-3">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->patch == '4')
                                        <input class="form-check-input" type="radio" name="patch" id="patch4" value="4" checked>
                                        <label class="form-check-label" for="patch4">
                                            Heel stopper caballero
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="radio" name="patch" id="patch4" value="4">
                                        <label class="form-check-label" for="patch4">
                                            Heel stopper caballero
                                        </label>
                                    @endif
                                        </div>

                                        <div class="form-check mb-3">
                                    @if (!empty($item->Fixer))
                                        @if ($item->Fixer->invisible == '1')
                                        <input class="form-check-input" type="checkbox" name="invisible" id="invisible" value="1" checked>
                                        <label class="form-check-label" for="invisible">
                                            Invisible Snkers Patch
                                        </label>
                                        @endif
                                        @else
                                        <input class="form-check-input" type="checkbox" name="invisible" id="invisible" value="1">
                                        <label class="form-check-label" for="invisible">
                                            Invisible Snkers Patch
                                        </label>
                                    @endif
                                        </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check  mb-3">
                                                @if (!empty($item->Fixer))
                                                    @if ($item->Fixer->personalizado != NULL)
                                                    <input class="form-check-input" type="checkbox" name="personalizado" id="personalizado" value="1" checked>
                                                    <label class="form-check-label" for="personalizado">
                                                        Fixer Personalizado
                                                    </label>
                                                    @endif
                                                    @else
                                                    <input class="form-check-input" type="checkbox" name="personalizado" id="personalizado" value="1">
                                                    <label class="form-check-label" for="personalizado">
                                                        Fixer Personalizado
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                            @if (!empty($item->Fixer))
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="personalizado" id="personalizado" value="{{$item->Fixer->personalizado}}">
                                            </div>
                                            @else
                                            <div class="col-6">
                                            <input class="form-control" type="number" name="personalizado" id="personalizado" >
                                        </div>
                                            @endif

                                            <div class="col-6">
                                            <label class="label_steps" for="">Descripcion de Fixer</label> <br>
                                            <textarea class="form-control" name="observacion" id="observacion" cols="15" rows="4">
                                            {{$item->DescripcionTicket->observacion}}
                                            </textarea>
                                            </div>
                                    </div>
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
                                <input class="form-control @error('talla') is-invalid @enderror" type="number" name="talla" id="talla" value="{{$item->DescripcionTicket->talla}}">
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

                            <label class="label_steps" for="" class="mb-2">Racks para sneakers o calzado</label>

                            @foreach ($racks2 as $racks)
                                @if ($racks->estatus == 1)
                                    @if ($racks->num_rack == $item->rack)
                                    <div class="form-group col-2">
                                        <input class="form-check-input" type="checkbox" value="{{$racks->num_rack}}" name="num_rack" id="num_rack" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$racks->num_rack}}
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-group col-2">
                                        <input class="form-check-input" type="checkbox" value="" name="num_rack" id="num_rack" checked disabled>
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$racks->num_rack}}
                                        </label>
                                    </div>
                                    @endif

                                @else
                                    <div class="form-group col-2">
                                        <input class="form-check-input" type="checkbox" value="{{$racks->num_rack}}" name="num_rack" id="num_rack">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$racks->num_rack}}
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
