@extends('layouts.email_template')
@section('template_email')

    <div class="d-flex justify-content-center">
        <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.:  </strong> 01-0001 <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong>
                        @php
                            $matriz = explode(" ", $precio_ticket->created_at);
                            $originalDate = $matriz[0];
                            $newDate = date("d/m/Y", strtotime($originalDate));
                            $entrega_estandar = date("d/m/Y",strtotime($originalDate."+ 8 days"));
                            $entrega_express = date("d/m/Y",strtotime($originalDate."+ 1 days"));
                        @endphp
                    {{$newDate}}<br>
                    <strong> Cliente: </strong> {{$precio_ticket->Ticket->Client->name}} <br><br>
                    <strong> Prenda: </strong> ({{ $precio_ticket->DescripcionTicket->marca }},
                    {{ $precio_ticket->DescripcionTicket->modelo }},
                    {{ $precio_ticket->DescripcionTicket->talla }},
                    {{ $precio_ticket->DescripcionTicket->categoria }},
                    <span class="badge rounded-pill " style="background-color: {{ $precio_ticket->DescripcionTicket->color1 }}">-</span>
                    <span class="badge rounded-pill " style="background-color: {{ $precio_ticket->DescripcionTicket->color2 }}">-</span>) <br>
                    <strong> Observaciones: </strong> {{$precio_ticket->DescripcionTicket->observacion}} <br>
                    <strong>
                        @if ($precio_ticket->DescripcionTicket->tipo_servicio == '0')
                            Servicio Estandar
                        @else
                            Servicio Express
                        @endif
                    </strong>
                    <br>
                    <strong> Servicio: </strong> {{ $precio_ticket->Ticket->servicio_primario }} <br>
                        @if ($precio_ticket->DescripcionTicket->tipo_servicio == '110')
                        <strong> Entrega: </strong> {{ $entrega_express }} <br>
                        @else
                        <strong> Entrega: </strong> {{ $entrega_estandar }} <br>
                        @endif
                </p>
                    @php
                        switch($precio_ticket->Ticket->servicio_primario){
                            case($precio_ticket->Ticket->servicio_primario == 'Essential'):
                                $precio_primario  = 110;
                                break;
                            case($precio_ticket->Ticket->servicio_primario == 'Plus'):
                                $precio_primario = 160;
                                break;
                            case($precio_ticket->Ticket->servicio_primario == 'Elite'):
                                $precio_primario = 190;
                                break;
                            case($precio_ticket->Ticket->servicio_primario == 'Pure White'):
                                $precio_primario = 170;
                                break;
                            case($precio_ticket->Ticket->servicio_primario == 'Special Care'):
                                $precio_primario = 160;
                                break;
                            case($precio_ticket->Ticket->servicio_primario == 'Klin Cap'):
                                $precio_primario = 60;
                                break;
                            case($precio_ticket->Ticket->servicio_primario == 'Protector'):
                                $precio_primario = 55;
                                break;
                            }

                            if ($precio_ticket->Ticket->tint == '1') {
                                $nombre_tint  = 'Tint 1';
                                $precio_tint  = 160;
                            }elseif ($precio_ticket->Ticket->tint == '2') {
                                $nombre_tint  = 'Tint 2';
                                $precio_tint  = 300;
                            }elseif ($precio_ticket->Ticket->tint == '3') {
                                $nombre_tint  = 'Tint 3';
                                $precio_tint  = 160;
                            }else {
                                $nombre_tint  = 'Tint Personalizado';
                                $precio_tint  = $precio_ticket->Ticket->tint;
                            }

                            switch($precio_ticket->Ticket->klin){
                            case($precio_ticket->Ticket->klin == 'Klin Bag'):
                                $precio_klin  = 160;
                                break;
                            case($precio_ticket->Ticket->klin == 'Klin Purse'):
                                $precio_klin = 110;
                                break;
                            case($precio_ticket->Ticket->klin == 'Klin Bag Extra'):
                                $precio_klin = 260;
                                break;
                            }

                            $i = 1;
                            $ii = 1;

                            $anticipo = $precio_ticket->Ticket->total - $precio_ticket->por_pagar;
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
                            <th>{{$ii++}} </th>
                            <td>{{ $precio_ticket->Ticket->servicio_primario }}</td>

                            <td>${{$precio_primario}}.00</td>
                            <td>${{$precio_primario}}.00</td>
                          </tr>
                          @if ($precio_ticket->Ticket->unyellow == 1)
                              <tr>
                              <th>{{$ii++}} </th>
                              <td>
                                      Unyellow
                              </td>
                              <td>$80.00</td>
                              <td>$80.00</td>
                              </tr>
                          @endif
                          @if ($precio_ticket->Ticket->tint != 0)
                              <tr>
                              <th>{{$ii++}} </th>
                              <td>
                                  {{$nombre_tint}}
                              </td>
                              <td>${{$precio_tint}}.00</td>
                              <td>${{$precio_tint}}.00</td>
                              </tr>
                          @endif
                          @if ($precio_ticket->Ticket->klin_dye == 1)
                              <tr>
                              <th>{{$ii++}} </th>
                              <td>
                                  klin dye
                              </td>
                              <td>$260.00</td>
                              <td>$260.00</td>
                              </tr>
                          @endif
                          @if ($precio_ticket->Ticket->protector == 1)
                              <tr>
                              <th>{{$ii++}} </th>
                              <td>
                                  Protector
                              </td>
                              <td>$55.00</td>
                              <td>$55.00</td>
                              </tr>
                          @endif
                          @if ($precio_ticket->Ticket->klin != NULL)
                              <tr>
                              <th>{{$ii++}} </th>
                              <td>
                                  {{$precio_ticket->Ticket->klin}}
                              </td>
                              <td>${{$precio_klin}}.00</td>
                              <td>${{$precio_klin}}.00</td>
                              </tr>
                          @endif
                          @if($precio_ticket->Fixer->glue)
                              <tr>
                                  <th>{{$ii++}} </th>
                                  @if($precio_ticket->Fixer->glue == 1)
                                      <td>Sole Glue (Vulcanized) Media</td>
                                      @else
                                      <td>Sole Glue (Vulcanized) Full</td>
                                  @endif
                                  <td>$130.00</td>
                                  <td>$130.00</td>
                              </tr>
                          @endif
                          @if($precio_ticket->Fixer->sew)
                              <tr>
                                  <th>{{$ii++}} </th>
                                  @if($precio_ticket->Fixer->sew == 1)
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
                          @if($precio_ticket->Fixer->sole == 1)
                              <tr>
                                  <th>{{$ii++}} </th>
                                  <td>
                                      Generic Sole AF1
                                  </td>
                                  <td>$520.00</td>
                                  <td>$520.00</td>
                              </tr>
                          @endif
                          @if($precio_ticket->Fixer->patch)
                              @switch($precio_ticket->Fixer->patch)
                                  @case($precio_ticket->Fixer->patch == '1')
                                  <tr>
                                      <th>{{$ii++}} </th>
                                      <td>Snkrs Patch (Talonera) Par </td>
                                      <td>$240.00</td>
                                      <td>$240.00</td>
                                  </tr>
                                      @break
                                  @case($precio_ticket->Fixer->patch == '2')
                                  <tr>
                                      <th>{{$ii++}} </th>
                                      <td>Snkrs Patch (Talonera) 1PZ</td>
                                      <td>$160.00</td>
                                      <td>$160.00</td>
                                  </tr>
                                      @break
                                  @case($precio_ticket->Fixer->patch == '3'):
                                  <tr>
                                      <th>{{$ii++}} </th>
                                      <td>Heel Stopper Dama</td>
                                      <td>$160.00</td>
                                      <td>$160.00</td>
                                  </tr>
                                      @break
                                  @case($precio_ticket->Fixer->patch == '4'):
                                      <tr>
                                          <th>{{$ii++}} </th>
                                          <td>Heel Stopper Caballero</td>
                                          <td>$240.00</td>
                                          <td>$240.00</td>
                                      </tr>
                                          @break
                              @endswitch
                          @endif
                          @if($precio_ticket->Fixer->invisible == 1)
                              <tr>
                                  <th>{{$ii++}} </th>
                                  <td>Invisible Snkers Patch</td>
                                  <td>$180.00</td>
                                  <td>$180.00</td>
                              </tr>
                          @endif
                          @if($precio_ticket->Fixer->personalizado)
                              <tr>
                                  <th>{{$ii++}} </th>
                                  <td>Fixer Personalizado</td>
                                  <td>${{$precio_ticket->Fixer->personalizado}}.00</td>
                                  <td>${{$precio_ticket->Fixer->personalizado}}.00</td>
                              </tr>
                          @endif
                      </tbody>
                    </table>
                    <p class="text-dark text-center">
                       <strong>Subtotal</strong> -------------------- ${{$precio_ticket->Ticket->subtotal}} <br>
                       @if ($precio_ticket->promocion != 0)
                            <strong>Descuento</strong>-------------------- ${{$precio_ticket->descuento}} <br>
                            @switch($precio_ticket->promocion)
                                @case($precio_ticket->promocion == 0.10)
                                        Cliente distinguido 1 <br>
                                    @break
                                @case($precio_ticket->promocion == 0.20)
                                        Cliente distinguido 2 <br>
                                    @break
                                @case($precio_ticket->promocion == 0.100):
                                        Cliente distinguido 3 <br>
                                    @break
                            @endswitch
                       @endif

                        <strong>Recolecccion</strong>---------------- ${{$precio_ticket->recoleccion}} <br>
                    </p>
                    <p class="text-dark text-left">
                       <strong> Forma de pago:  </strong> {{ $precio_ticket->pago }} <br>

                       <strong> Factura:  </strong> No <br><br>

                       @switch($precio_ticket->por_pagar)
                            @case($precio_ticket->por_pagar == '2')
                                    <strong> No deja anticipo </strong> <br>
                                    <strong> Por pagar: </strong> ${{ $precio_ticket->por_pagar }} <br>
                                @break
                            @case($precio_ticket->por_pagar != '2' || $precio_ticket->por_pagar != '0')
                                    <strong> Anticipo: </strong> ${{$precio_ticket->anticipo}} <br>
                                    <strong> Por pagar: </strong> ${{$precio_ticket->por_pagar }} <br>
                                @break
                            @case($precio_ticket->por_pagar == '0'):
                                    <strong> Liquida cuenta </strong> <br>
                                @break
                        @endswitch

                    </p>

        </div>
    </div>

@endsection

