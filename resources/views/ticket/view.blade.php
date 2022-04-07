<!-- Modal -->
<div class="modal fade" id="exampleModal_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">

        <div class="d-flex justify-content-between">
            <h2>Tickets</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <ul class="nav na_view_tickets nav-pills mb-3" id="pills-tab" role="tablist" style="">
          <li class="nav-item" role="presentation">
            <button class="nav-link btn_modal active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home_{{ $item->id }}" type="button" role="tab" aria-controls="pills-home_{{ $item->id }}" aria-selected="true">
                Administrador
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn_modal" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile_{{ $item->id }}" type="button" role="tab" aria-controls="pills-profile_{{ $item->id }}" aria-selected="false">
                Cliente
            </button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home_{{ $item->id }}" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.  </strong>: 0{{$rest}}-{{$rest2}} <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong>
                    @php
                        $matriz = explode(" ", $item->created_at);
                        $originalDate = $matriz[0];
                        $newDate = date("d/m/Y", strtotime($originalDate));
                        $entrega_estandar = date("d/m/Y",strtotime($originalDate."+ 8 days"));
                        $entrega_express = date("d/m/Y",strtotime($originalDate."+ 1 days"));
                    @endphp
                    {{$newDate}}
                    <br><br>
                    <strong> Cliente: </strong> {{ $item->Ticket->Client->name }} <br>
                    <strong> Correo electronico: </strong> {{ $item->Ticket->Client->email}} <br><br>
            @if (!empty($item->Ticket->DescripcionTicket))
                    <strong> Prenda: </strong>
                    ({{ $item->Ticket->DescripcionTicket->color1 }},
                    {{ $item->Ticket->DescripcionTicket->color2 }},
                    {{ $item->Ticket->DescripcionTicket->marca }},
                    {{ $item->Ticket->DescripcionTicket->modelo }},
                    {{ $item->Ticket->DescripcionTicket->talla }},
                    {{ $item->Ticket->DescripcionTicket->categoria }}, <br>
                    @if ($item->Ticket->tint != 0)
                    <strong> Observaciones Tint: </strong> {{ $item->Ticket->tint_descripcion }}, <br>
                    @endif
                    <strong> Observaciones del articulo: </strong> {{ $item->Ticket->DescripcionTicket->observacion }}, <br><br>

                    <strong> Rack: </strong> {{ $item->Ticket->rack }}
                        @if ($item->Ticket->DescripcionTicket->tipo_servicio == '0')
                             Servicio Estandar
                        @else
                             Servicio Express
                        @endif
                    <br>
                    <strong> Servicio: </strong> {{ $item->Ticket->servicio_primario }} <br>
                        @if ($item->Ticket->DescripcionTicket->tipo_servicio == '110')
                        <strong> Entrega: </strong> {{ $entrega_express }} <br>
                        @else
                        <strong> Entrega: </strong> {{ $entrega_estandar }} <br>
                        @endif
            @endif
                </p>
                    <table class="table table-borderless" id="Admin">
                      <thead>
                        <tr>
                          <th ></th>
                          <th ></th>
                          <th ></th>
                          <th ></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($ticket as $item2)
                        @if ($item2->id_venta == $item->id)
                        @php
                            switch($item2->servicio_primario){
                                case($item2->servicio_primario == 'Essential'):
                                    $precio_primario  = 110;
                                    break;
                                case($item2->servicio_primario == 'Plus'):
                                    $precio_primario = 160;
                                    break;
                                case($item2->servicio_primario == 'Elite'):
                                    $precio_primario = 190;
                                    break;
                                case($item2->servicio_primario == 'Pure White'):
                                    $precio_primario = 170;
                                    break;
                                case($item2->servicio_primario == 'Special Care'):
                                    $precio_primario = 160;
                                    break;
                                case($item2->servicio_primario == 'Klin Cap'):
                                    $precio_primario = 60;
                                    break;
                                case($item2->servicio_primario == 'Protector'):
                                    $precio_primario = 55;
                                    break;
                                }

                                if ($item2->tint == '1') {
                                    $nombre_tint  = 'Tint 1';
                                    $precio_tint  = 160;
                                }elseif ($item2->tint == '2') {
                                    $nombre_tint  = 'Tint 2';
                                    $precio_tint  = 300;
                                }elseif ($item2->tint == '3') {
                                    $nombre_tint  = 'Tint 3';
                                    $precio_tint  = 160;
                                }else {
                                    $nombre_tint  = 'Tint Personalizado';
                                    $precio_tint  = $item2->tint;
                                }

                                switch($item2->klin){
                                case($item2->klin == 'Klin Bag'):
                                    $precio_klin  = 160;
                                    break;
                                case($item2->klin == 'Klin Purse'):
                                    $precio_klin = 110;
                                    break;
                                case($item2->klin == 'Klin Bag Extra'):
                                    $precio_klin = 260;
                                    break;
                                }

                                $i = 1;
                                $ii = 1;

                                $anticipo = $item2->total - $item2->por_pagar;
                        @endphp


                                  @if($item2->servicio_primario != '0')
                                  <tr>
                                    <th>{{$i++}} </th>
                                    <td>{{ $item2->servicio_primario }}</td>

                                    <td>${{$precio_primario}}.00</td>
                                    <td>${{$precio_primario}}.00</td>
                                  </tr>
                                  @endif

                                    @if ($item2->unyellow == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                                Unyellow
                                        </td>
                                        <td>$80.00</td>
                                        <td>$80.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->tint != 0)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            {{$nombre_tint}}
                                        </td>
                                        <td>${{$precio_tint}}.00</td>
                                        <td>${{$precio_tint}}.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->klin_dye == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            klin dye
                                        </td>
                                        <td>$260.00</td>
                                        <td>$260.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->protector == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            Protector
                                        </td>
                                        <td>$55.00</td>
                                        <td>$55.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->klin != NULL)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            {{$item2->klin}}
                                        </td>
                                        <td>${{$precio_klin}}.00</td>
                                        <td>${{$precio_klin}}.00</td>
                                        </tr>
                                    @endif
                                    @if (!empty($item2->Fixer))

                                        @if($item2->Fixer->glue != NULL)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                @if($item2->Fixer->glue == 1)
                                                    <td>Sole Glue (Vulcanized) Media</td>
                                                    @else
                                                    <td>Sole Glue (Vulcanized) Full</td>
                                                @endif
                                                <td>$130.00</td>
                                                <td>$130.00</td>
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->sew)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                @if($item2->Fixer->sew == 1)
                                                    <td>Sole Sew 5cm</td>
                                                    <td>$130.00</td>
                                                    <td>$130.00</td>
                                                    @else
                                                    <td>Sole Sew Full</td>
                                                    <td>$240.00</td>
                                                    <td>$240.00</td>
                                                @endif
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->sole == 1)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>
                                                    Generic Sole AF1
                                                </td>
                                                <td>$520.00</td>
                                                <td>$520.00</td>
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->patch)
                                            @switch($item2->Fixer->patch)
                                                @case($item2->Fixer->patch == '1')
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Snkrs Patch (Talonera) Par </td>
                                                    <td>$240.00</td>
                                                    <td>$240.00</td>
                                                </tr>
                                                    @break
                                                @case($item2->Fixer->patch == '2')
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Snkrs Patch (Talonera) 1PZ</td>
                                                    <td>$160.00</td>
                                                    <td>$160.00</td>
                                                </tr>
                                                    @break
                                                @case($item2->Fixer->patch == '3'):
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Heel Stopper Dama</td>
                                                    <td>$160.00</td>
                                                    <td>$160.00</td>
                                                </tr>
                                                    @break
                                                @case($item2->Fixer->patch == '4'):
                                                    <tr>
                                                        <th>{{$i++}} </th>
                                                        <td>Heel Stopper Caballero</td>
                                                        <td>$240.00</td>
                                                        <td>$240.00</td>
                                                    </tr>
                                                        @break
                                            @endswitch
                                        @endif
                                        @if($item2->Fixer->invisible == 1)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>Invisible Snkers Patch</td>
                                                <td>$180.00</td>
                                                <td>$180.00</td>
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->personalizado)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>Fixer Personalizado</td>
                                                <td>${{$item2->Fixer->personalizado}}.00</td>
                                                <td>${{$item2->Fixer->personalizado}}.00</td>
                                            </tr>
                                        @endif

                                    @endif
                            @endif
                        @endforeach
                      </tbody>
                    </table>
                    @if (!empty($item->Precio))
                        <p class="text-dark text-center">
                        <strong>Subtotal</strong> -------------------- ${{$item->Precio->subtotal}}<br>
                        @if ($item->Precio->promocion != 0)
                        <strong>Descuento</strong>-------------------- ${{$item->Precio->descuento}} <br>
                        @switch($item->Precio->promocion)
                                    @case($item->Precio->promocion == 0.10)
                                            Cliente distinguido 1 <br>
                                        @break
                                    @case($item->Precio->promocion == 0.20)
                                            Cliente distinguido 2 <br>
                                        @break
                                    @case($item->Precio->promocion == 0.100):
                                            Cliente distinguido 3 <br>
                                        @break
                                @endswitch
                            @endif

                            <strong>Recolecccion</strong>---------------- ${{$item->Precio->recoleccion}} <br><br>

                            <strong>Total</strong>---------------- ${{$item->Precio->total}}
                        </p>
                        <p class="text-dark text-left">
                            <strong> Forma de pago:  </strong> {{ $item->Precio->pago }} <br>

                            <strong> Factura:  </strong> {{ $item->Precio->factura }} <br><br>

                            @switch($item->Precio->anticipo)
                                @case($item->Precio->anticipo == '2')
                                        <strong> No deja anticipo </strong> <br>
                                        <strong> Por pagar: </strong> ${{ $item->Precio->por_pagar }} <br>
                                    @break
                                @case($item->Precio->anticipo != '2' || $item->Precio->anticipo != '0')
                                        <strong> Anticipo: </strong> ${{$item->Precio->anticipo}} <br>
                                        <strong> Por pagar: </strong> ${{$item->Precio->por_pagar }} <br>
                                    @break
                                @case($item->Precio->anticipo == '0'):
                                        <strong> Liquida cuenta </strong> <br>
                                    @break
                            @endswitch
                        </p>
                    @endif

            </div>

            <div class="d-flex justify-content-center mt-5">
                <form method="POST" action="{{ route('ticket.sed_mail') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_ticket_id" id="id_ticket_id" value="{{$item->id}}">
                    <input type="hidden" name="id_user" id="id_user" value="{{$item->Ticket->Client->id}}">
                    <input type="hidden" name="email_client" id="email_client" value="{{ $item->Ticket->Client->email}}">
                    <input type="hidden" name="estatus" id="estatus" value="admin">
                      <button type="submit" class="btn btn_modal_send">
                          <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Recibo
                      </button>
                </form>
            </div>

          </div>

          <div class="tab-pane fade" id="pills-profile_{{ $item->id }}" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.:  </strong> 0{{$rest}}-{{$rest2}} <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong>
                        @php
                            $matriz = explode(" ", $item->created_at);
                            $originalDate = $matriz[0];
                            $newDate = date("d/m/Y", strtotime($originalDate));
                            $entrega_estandar = date("d/m/Y",strtotime($originalDate."+ 8 days"));
                            $entrega_express = date("d/m/Y",strtotime($originalDate."+ 1 days"));
                        @endphp
                    {{$newDate}}<br><br>
                    <strong> Cliente: </strong> {{$item->Ticket->Client->name}} <br>
                @if (!empty($item->Ticket->DescripcionTicket))
                    <strong> Prenda: </strong> {{ $item->Ticket->DescripcionTicket->marca }} <br>
                    <strong>
                        @if ($item->Ticket->DescripcionTicket->tipo_servicio == '0')
                            Servicio Estandar
                        @else
                            Servicio Express
                        @endif
                    </strong>
                    <br>
                    <strong> Servicio: </strong> {{ $item->Ticket->servicio_primario }} <br>
                        @if ($item->Ticket->DescripcionTicket->tipo_servicio == '110')
                        <strong> Entrega: </strong> {{ $entrega_express }} <br>
                        @else
                        <strong> Entrega: </strong> {{ $entrega_estandar }} <br>
                        @endif
                @endif
                </p>
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th ></th>
                          <th ></th>
                          <th ></th>
                          <th ></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($ticket as $item2)
                        @if ($item2->id_venta == $item->id)
                        @php
                            switch($item2->servicio_primario){
                                case($item2->servicio_primario == 'Essential'):
                                    $precio_primario  = 110;
                                    break;
                                case($item2->servicio_primario == 'Plus'):
                                    $precio_primario = 160;
                                    break;
                                case($item2->servicio_primario == 'Elite'):
                                    $precio_primario = 190;
                                    break;
                                case($item2->servicio_primario == 'Pure White'):
                                    $precio_primario = 170;
                                    break;
                                case($item2->servicio_primario == 'Special Care'):
                                    $precio_primario = 160;
                                    break;
                                case($item2->servicio_primario == 'Klin Cap'):
                                    $precio_primario = 60;
                                    break;
                                case($item2->servicio_primario == 'Protector'):
                                    $precio_primario = 55;
                                    break;
                                }

                                if ($item2->tint == '1') {
                                    $nombre_tint  = 'Tint 1';
                                    $precio_tint  = 160;
                                }elseif ($item2->tint == '2') {
                                    $nombre_tint  = 'Tint 2';
                                    $precio_tint  = 300;
                                }elseif ($item2->tint == '3') {
                                    $nombre_tint  = 'Tint 3';
                                    $precio_tint  = 160;
                                }else {
                                    $nombre_tint  = 'Tint Personalizado';
                                    $precio_tint  = $item2->tint;
                                }

                                switch($item2->klin){
                                case($item2->klin == 'Klin Bag'):
                                    $precio_klin  = 160;
                                    break;
                                case($item2->klin == 'Klin Purse'):
                                    $precio_klin = 110;
                                    break;
                                case($item2->klin == 'Klin Bag Extra'):
                                    $precio_klin = 260;
                                    break;
                                }

                                $i = 1;
                                $ii = 1;

                                $anticipo = $item2->total - $item2->por_pagar;
                        @endphp

                                <tr>
                                    <th>{{$i++}} </th>
                                    <td>{{ $item2->servicio_primario }}</td>

                                    <td>${{$precio_primario}}.00</td>
                                    <td>${{$precio_primario}}.00</td>
                                    </tr>
                                    @if ($item2->unyellow == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                                Unyellow
                                        </td>
                                        <td>$80.00</td>
                                        <td>$80.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->tint != 0)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            {{$nombre_tint}}
                                        </td>
                                        <td>${{$precio_tint}}.00</td>
                                        <td>${{$precio_tint}}.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->klin_dye == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            klin dye
                                        </td>
                                        <td>$260.00</td>
                                        <td>$260.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->protector == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            Protector
                                        </td>
                                        <td>$55.00</td>
                                        <td>$55.00</td>
                                        </tr>
                                    @endif
                                    @if ($item2->klin != NULL)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            {{$item2->klin}}
                                        </td>
                                        <td>${{$precio_klin}}.00</td>
                                        <td>${{$precio_klin}}.00</td>
                                        </tr>
                                    @endif
                                    @if (!empty($item2->Fixer))

                                        @if($item2->Fixer->glue != NULL)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                @if($item2->Fixer->glue == 1)
                                                    <td>Sole Glue (Vulcanized) Media</td>
                                                    @else
                                                    <td>Sole Glue (Vulcanized) Full</td>
                                                @endif
                                                <td>$130.00</td>
                                                <td>$130.00</td>
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->sew)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                @if($item2->Fixer->sew == 1)
                                                    <td>Sole Sew 5cm</td>
                                                    <td>$130.00</td>
                                                    <td>$130.00</td>
                                                    @else
                                                    <td>Sole Sew Full</td>
                                                    <td>$240.00</td>
                                                    <td>$240.00</td>
                                                @endif
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->sole == 1)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>
                                                    Generic Sole AF1
                                                </td>
                                                <td>$520.00</td>
                                                <td>$520.00</td>
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->patch)
                                            @switch($item2->Fixer->patch)
                                                @case($item2->Fixer->patch == '1')
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Snkrs Patch (Talonera) Par </td>
                                                    <td>$240.00</td>
                                                    <td>$240.00</td>
                                                </tr>
                                                    @break
                                                @case($item2->Fixer->patch == '2')
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Snkrs Patch (Talonera) 1PZ</td>
                                                    <td>$160.00</td>
                                                    <td>$160.00</td>
                                                </tr>
                                                    @break
                                                @case($item2->Fixer->patch == '3'):
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Heel Stopper Dama</td>
                                                    <td>$160.00</td>
                                                    <td>$160.00</td>
                                                </tr>
                                                    @break
                                                @case($item2->Fixer->patch == '4'):
                                                    <tr>
                                                        <th>{{$i++}} </th>
                                                        <td>Heel Stopper Caballero</td>
                                                        <td>$240.00</td>
                                                        <td>$240.00</td>
                                                    </tr>
                                                        @break
                                            @endswitch
                                        @endif
                                        @if($item2->Fixer->invisible == 1)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>Invisible Snkers Patch</td>
                                                <td>$180.00</td>
                                                <td>$180.00</td>
                                            </tr>
                                        @endif
                                        @if($item2->Fixer->personalizado)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>Fixer Personalizado</td>
                                                <td>${{$item2->Fixer->personalizado}}.00</td>
                                                <td>${{$item2->Fixer->personalizado}}.00</td>
                                            </tr>
                                        @endif

                                    @endif
                            @endif
                        @endforeach
                      </tbody>
                    </table>
                    @if (!empty($item->Precio))
                    <p class="text-dark text-center">
                        <strong>Subtotal</strong> -------------------- ${{$item->Precio->subtotal}}<br>
                        @if ($item->Precio->promocion != 0)
                        <strong>Descuento</strong>-------------------- ${{$item->Precio->descuento}} <br>
                        @switch($item->Precio->promocion)
                                 @case($item->Precio->promocion == 0.10)
                                         Cliente distinguido 1 <br>
                                     @break
                                 @case($item->Precio->promocion == 0.20)
                                         Cliente distinguido 2 <br>
                                     @break
                                 @case($item->Precio->promocion == 0.100):
                                         Cliente distinguido 3 <br>
                                     @break
                             @endswitch
                         @endif

                         <strong>Recolecccion</strong>---------------- ${{$item->Precio->recoleccion}} <br><br>

                         <strong>Total</strong>---------------- ${{$item->Precio->total}}
                     </p>
                     <p class="text-dark text-left">
                         <strong> Forma de pago:  </strong> {{ $item->Precio->pago }} <br>

                         <strong> Factura:  </strong> {{ $item->Precio->factura }} <br><br>

                         @switch($item->Precio->anticipo)
                              @case($item->Precio->anticipo == '2')
                                      <strong> No deja anticipo </strong> <br>
                                      <strong> Por pagar: </strong> ${{ $item->Precio->por_pagar }} <br>
                                  @break
                              @case($item->Precio->anticipo != '2' || $item->Precio->anticipo != '0')
                                      <strong> Anticipo: </strong> ${{$item->Precio->anticipo}} <br>
                                      <strong> Por pagar: </strong> ${{$item->Precio->por_pagar }} <br>
                                  @break
                              @case($item->Precio->anticipo == '0'):
                                      <strong> Liquida cuenta </strong> <br>
                                  @break
                          @endswitch
                     </p>
                     @endif
            </div>

            <div class="d-flex justify-content-center mt-5">
                <form method="POST" action="{{ route('ticket.sed_mail') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_ticket_id" id="id_ticket_id" value="{{$item->id}}">
                    <input type="hidden" name="id_user" id="id_user" value="{{$item->Ticket->Client->id}}">
                    <input type="hidden" name="email_client" id="email_client" value="{{ $item->Ticket->Client->email}}">
                    <input type="hidden" name="estatus" id="estatus" value="user">
                      <button type="submit" class="btn btn_modal_send">
                          <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Recibo
                      </button>
                </form>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>
</div>
