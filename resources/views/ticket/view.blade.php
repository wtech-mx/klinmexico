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
                    <strong> Recibo No.  </strong>: {{ $item->Ticket->id }} <br>
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
                    <strong> Cliente: </strong> {{ $item->Ticket->Client->name }} <br><br>
                    <strong> Prenda: </strong> ({{ $item->DescripcionTicket->marca }},
                    {{ $item->DescripcionTicket->modelo }},
                    {{ $item->DescripcionTicket->talla }},
                    {{ $item->DescripcionTicket->categoria }},
                    <span class="badge rounded-pill " style="background-color: {{ $item->DescripcionTicket->color1 }}">-</span>
                    <span class="badge rounded-pill " style="background-color: {{ $item->DescripcionTicket->color2 }}">-</span>) <br>
                    @if ($item->Ticket->tint != 0)
                    <strong> Observaciones Tint: </strong> {{ $item->Ticket->tint_descripcion }}, <br>
                    @endif
                    <strong> Observaciones del articulo: </strong> {{ $item->DescripcionTicket->observacion }}, <br><br>

                    <strong> Rack: </strong> {{ $item->Ticket->rack }}
                        @if ($item->DescripcionTicket->tipo_servicio == '0')
                             Servicio Estandar
                        @else
                             Servicio Express
                        @endif
                    <br>
                    <strong> Servicio: </strong> {{ $item->Ticket->servicio_primario }} <br>
                        @if ($item->DescripcionTicket->tipo_servicio == '110')
                        <strong> Entrega: </strong> {{ $entrega_express }} <br>
                        @else
                        <strong> Entrega: </strong> {{ $entrega_estandar }} <br>
                        @endif

                </p>
                @php
                    switch($item->Ticket->servicio_primario){
                        case($item->Ticket->servicio_primario == 'Essential'):
                            $precio_primario  = 110;
                            break;
                        case($item->Ticket->servicio_primario == 'Plus'):
                            $precio_primario = 160;
                            break;
                        case($item->Ticket->servicio_primario == 'Elite'):
                            $precio_primario = 190;
                            break;
                        case($item->Ticket->servicio_primario == 'Pure White'):
                            $precio_primario = 170;
                            break;
                        case($item->Ticket->servicio_primario == 'Special Care'):
                            $precio_primario = 160;
                            break;
                        case($item->Ticket->servicio_primario == 'Klin Cap'):
                            $precio_primario = 60;
                            break;
                        case($item->Ticket->servicio_primario == 'Protector'):
                            $precio_primario = 55;
                            break;
                        }

                        if ($item->Ticket->tint == '1') {
                            $nombre_tint  = 'Tint 1';
                            $precio_tint  = 160;
                        }elseif ($item->Ticket->tint == '2') {
                            $nombre_tint  = 'Tint 2';
                            $precio_tint  = 300;
                        }elseif ($item->Ticket->tint == '3') {
                            $nombre_tint  = 'Tint 3';
                            $precio_tint  = 160;
                        }else {
                            $nombre_tint  = 'Tint Personalizado';
                            $precio_tint  = $item->Ticket->tint;
                        }

                        switch($item->Ticket->klin){
                        case($item->Ticket->klin == 'Klin Bag'):
                            $precio_klin  = 160;
                            break;
                        case($item->Ticket->klin == 'Klin Purse'):
                            $precio_klin = 110;
                            break;
                        case($item->Ticket->klin == 'Klin Bag Extra'):
                            $precio_klin = 260;
                            break;
                        }

                @endphp
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
                        <tr>
                          <th>1</th>
                          <td>{{ $item->Ticket->servicio_primario }}</td>

                          <td>${{$precio_primario}}.00</td>
                          <td>${{$precio_primario}}.00</td>
                        </tr>
                        @if ($item->Ticket->unyellow == 1)
                            <tr>
                            <th>2</th>
                            <td>
                                    Unyellow
                            </td>
                            <td>$80.00</td>
                            <td>$80.00</td>
                            </tr>
                        @endif
                        @if ($item->Ticket->tint != 0)
                            <tr>
                            <th>3</th>
                            <td>
                                {{$nombre_tint}}
                            </td>
                            <td>${{$precio_tint}}.00</td>
                            <td>${{$precio_tint}}.00</td>
                            </tr>
                        @endif
                        @if ($item->Ticket->klin_dye == 1)
                            <tr>
                            <th>4</th>
                            <td>
                                klin dye
                            </td>
                            <td>$260.00</td>
                            <td>$260.00</td>
                            </tr>
                        @endif
                        @if ($item->Ticket->protector == 1)
                            <tr>
                            <th>5</th>
                            <td>
                                Protector
                            </td>
                            <td>$55.00</td>
                            <td>$55.00</td>
                            </tr>
                        @endif
                        @if ($item->Ticket->klin != NULL)
                            <tr>
                            <th>6</th>
                            <td>
                                {{$item->Ticket->klin}}
                            </td>
                            <td>${{$precio_klin}}.00</td>
                            <td>${{$precio_klin}}.00</td>
                            </tr>
                        @endif
                            {{-- <tr>
                            <th>6</th>
                            <td>
                                {{ dd($item->Ticket->Fixer)}}
                            </td>
                            <td>${{$precio_klin}}.00</td>
                            <td>${{$precio_klin}}.00</td>
                            </tr> --}}
                      </tbody>
                    </table>
                    <p class="text-dark text-center">
                       <strong>Subtotal</strong> -------------------- ${{$item->Ticket->subtotal}}
                    </p>

            </div>
          </div>

          <div class="tab-pane fade" id="pills-profile_{{ $item->id }}" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.:  </strong> 01-0001 <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong>
                        @php
                            $matriz = explode(" ", $item->created_at);
                            $originalDate = $matriz[0];
                            $newDate = date("d/m/Y", strtotime($originalDate));
                        @endphp
                    {{$newDate}}<br>
                    <strong> Cliente: </strong> {{$item->Ticket->Client->name}} <br><br>
                    <strong> Prenda: </strong> ({{ $item->DescripcionTicket->marca }},
                    {{ $item->DescripcionTicket->modelo }},
                    {{ $item->DescripcionTicket->talla }},
                    {{ $item->DescripcionTicket->categoria }},
                    <span class="badge rounded-pill " style="background-color: {{ $item->DescripcionTicket->color1 }}">-</span>
                    <span class="badge rounded-pill " style="background-color: {{ $item->DescripcionTicket->color2 }}">-</span>) <br>
                    <strong> Observaciones: </strong> {{$item->DescripcionTicket->observacion}} <br>
                    <strong>
                        @if ($item->DescripcionTicket->tipo_servicio == '0')
                            Servicio Estandar
                        @else
                            Servicio Express
                        @endif
                    </strong>
                    <br>
                    <strong> Servicio: </strong> {{ $item->Ticket->servicio_primario }} <br>
                        @if ($item->DescripcionTicket->tipo_servicio == '110')
                        <strong> Entrega: </strong> {{ $entrega_express }} <br>
                        @else
                        <strong> Entrega: </strong> {{ $entrega_estandar }} <br>
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
                        <tr>
                          <th>1</th>
                          <td>Limpieza VIP</td>
                          <td>$160.00</td>
                          <td>$190.00</td>
                        </tr>
                        <tr>
                          <th >2</th>
                          <td>Tink 1</td>
                          <td>$160.00</td>
                          <td>$190.00</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="text-dark text-center">
                       <strong>Subtotal</strong> -------------------- ${{$item->Ticket->subtotal}} <br>
                       <strong>Descuento</strong>-------------------- $46 <br>
                        Cliente distinguido 1 <br>
                        <strong>Recolecccion</strong>---------------- ${{$item->recoleccion}} <br>
                    </p>
                    <p class="text-dark text-left">
                       <strong> Forma de pago:  </strong> {{ $item->pago }} <br>

                       <strong> Factura:  </strong> No <br><br>

                       <strong> Anticipo:  </strong> $50 <br>
                       <strong> Resta:  </strong> $100 <br><br>

                       <strong> Por pagar: </strong> ${{ $item->por_pagar }} <br>

                    </p>

            </div>
          </div>

        <div class="d-flex justify-content-center mt-5">
          <button type="button" class="btn btn_modal_send">
              <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Recibo
          </button>
        </div>

        </div>

      </div>

    </div>
  </div>
</div>
