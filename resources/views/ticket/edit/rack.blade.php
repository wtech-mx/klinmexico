@switch($ticket)
    @case($ticket->Ticket->servicio_primario == 'Plus' || $ticket->Ticket->servicio_primario == 'Essential' || $ticket->Ticket->servicio_primario == 'Elite' || $ticket->Ticket->servicio_primario == 'Pure White' || $ticket->Ticket->servicio_primario == 'Special Care')
        @php
            if ($ticket->Ticket->DescripcionTicket->tipo_servicio == '0'){
                $servicio = 'Servicio Estandar';
            }else{
                $servicio = 'Servicio Express';
            }
        @endphp
        <div class="form-card text-black">
                <div class="row">
                    <div class="form-group mt-5 mb-5 col-12">
                        <label class="label_steps" for="">Tipo de servicio</label>
                        <select class="form-select select2 " name="tipo_servicio" id="tipo_servicio">
                                <option value="{{$ticket->Ticket->DescripcionTicket->tipo_servicio}}" selected>{{$servicio}}</option>
                                <option value="0" >Estandar --------- $0</option>
                                <option value="110" >Express ---------- $110</option>
                        </select>
                    </div>

                    <label class="label_steps" for="" class="mb-2">Racks para sneakers o calzado</label>

                    @foreach ($racks2 as $item)
                        @if ($item->estatus == 1)
                            @if ($item->num_rack == $ticket->Ticket->rack)
                            <div class="form-group col-2">
                                <input class="form-check-input" type="checkbox" value="{{$item->num_rack}}" name="num_rack" id="num_rack" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                {{$item->num_rack}}
                                </label>
                            </div>
                            @else
                            <div class="form-group col-2">
                                <input class="form-check-input" type="checkbox" value="" name="num_rack" id="num_rack" checked disabled>
                                <label class="form-check-label" for="flexCheckDefault">
                                {{$item->num_rack}}
                                </label>
                            </div>
                            @endif

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
    @break
    @case($ticket->Ticket->servicio_primario == 'Klin Cap')
        <h1>racks 1</h1>
    @break
    @case($ticket->Ticket->servicio_primario == 'Klin Bag')
        <h1>racks 2</h1>
    @break
    @case($ticket->Ticket->servicio_primario == 'Fixer Snkrs')
        <h1>racks 3</h1>
    @break
@endswitch
