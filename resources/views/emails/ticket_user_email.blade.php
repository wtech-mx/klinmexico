@extends('layouts.email_template')
@section('template_email')

    <div class="d-flex justify-content-center">
        <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.:  </strong> 0 <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong>
                        @php
                            $matriz = explode(" ", $venta->created_at);
                            $originalDate = $matriz[0];
                            $newDate = date("d/m/Y", strtotime($originalDate));
                            $entrega_estandar = date("d/m/Y",strtotime($originalDate."+ 8 days"));
                            $entrega_express = date("d/m/Y",strtotime($originalDate."+ 1 days"));
                        @endphp
                    {{$newDate}}<br><br>
                    <strong> Cliente: </strong> {{$venta->Ticket->Client->name}} <br>
                @if (!empty($venta->Ticket->DescripcionTicket))
                    <strong> Prenda: </strong> {{ $venta->Ticket->DescripcionTicket->marca }} <br>
                    <strong>
                        @if ($venta->Ticket->DescripcionTicket->tipo_servicio == '0')
                            Servicio Estandar
                        @else
                            Servicio Express
                        @endif
                    </strong>
                    <br>
                    <strong> Servicio: </strong> {{ $venta->Ticket->servicio_primario }} <br>
                        @if ($venta->Ticket->DescripcionTicket->tipo_servicio == '110')
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
                        @foreach ($ticket as $venta2)
                        @if ($venta2->id_venta == $venta->id)
                        @php
                            switch($venta2->servicio_primario){
                                case($venta2->servicio_primario == 'Essential'):
                                    $precio_primario  = 110;
                                    break;
                                case($venta2->servicio_primario == 'Plus'):
                                    $precio_primario = 160;
                                    break;
                                case($venta2->servicio_primario == 'Elite'):
                                    $precio_primario = 190;
                                    break;
                                case($venta2->servicio_primario == 'Pure White'):
                                    $precio_primario = 170;
                                    break;
                                case($venta2->servicio_primario == 'Special Care'):
                                    $precio_primario = 160;
                                    break;
                                case($venta2->servicio_primario == 'Klin Cap'):
                                    $precio_primario = 60;
                                    break;
                                case($venta2->servicio_primario == 'Protector'):
                                    $precio_primario = 55;
                                    break;
                                case($venta2->servicio_primario == 'Klin Bag'):
                                    $precio_primario = 160;
                                    break;
                                case($venta2->servicio_primario == 'Klin Purse'):
                                    $precio_primario = 110;
                                    break;
                                case($venta2->servicio_primario == 'Klin Bag Extra'):
                                    $precio_primario = 260;
                                    break;
                                }

                                if ($venta2->tint == '1') {
                                    $nombre_tint  = 'Tint 1';
                                    $precio_tint  = 160;
                                }elseif ($venta2->tint == '2') {
                                    $nombre_tint  = 'Tint 2';
                                    $precio_tint  = 300;
                                }elseif ($venta2->tint == '3') {
                                    $nombre_tint  = 'Tint 3';
                                    $precio_tint  = 160;
                                }else {
                                    $nombre_tint  = 'Tint Personalizado';
                                    $precio_tint  = $venta2->tint;
                                }

                                switch($venta2->klin){
                                case($venta2->klin == 'Klin Bag'):
                                    $precio_klin  = 160;
                                    break;
                                case($venta2->klin == 'Klin Purse'):
                                    $precio_klin = 110;
                                    break;
                                case($venta2->klin == 'Klin Bag Extra'):
                                    $precio_klin = 260;
                                    break;
                                }

                                $i = 1;
                                $ii = 1;

                                $anticipo = $venta2->total - $venta2->por_pagar;
                        @endphp

                                <tr>
                                    <th>{{$i++}} </th>
                                    <td>{{ $venta2->servicio_primario }}</td>

                                    <td>${{$precio_primario}}.00</td>
                                    <td>${{$precio_primario}}.00</td>
                                    </tr>
                                    @if ($venta2->unyellow == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                                Unyellow
                                        </td>
                                        <td>$80.00</td>
                                        <td>$80.00</td>
                                        </tr>
                                    @endif
                                    @if ($venta2->tint != 0)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            {{$nombre_tint}}
                                        </td>
                                        <td>${{$precio_tint}}.00</td>
                                        <td>${{$precio_tint}}.00</td>
                                        </tr>
                                    @endif
                                    @if ($venta2->klin_dye == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            klin dye
                                        </td>
                                        <td>$260.00</td>
                                        <td>$260.00</td>
                                        </tr>
                                    @endif
                                    @if ($venta2->protector == 1)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            Protector
                                        </td>
                                        <td>$55.00</td>
                                        <td>$55.00</td>
                                        </tr>
                                    @endif
                                    @if ($venta2->klin != NULL)
                                        <tr>
                                        <th>{{$i++}} </th>
                                        <td>
                                            {{$venta2->klin}}
                                        </td>
                                        <td>${{$precio_klin}}.00</td>
                                        <td>${{$precio_klin}}.00</td>
                                        </tr>
                                    @endif
                                    @if (!empty($venta2->Fixer))

                                        @if($venta2->Fixer->glue != NULL)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                @if($venta2->Fixer->glue == 1)
                                                    <td>Sole Glue (Vulcanized) Media</td>
                                                    @else
                                                    <td>Sole Glue (Vulcanized) Full</td>
                                                @endif
                                                <td>$130.00</td>
                                                <td>$130.00</td>
                                            </tr>
                                        @endif
                                        @if($venta2->Fixer->sew)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                @if($venta2->Fixer->sew == 1)
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
                                        @if($venta2->Fixer->sole == 1)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>
                                                    Generic Sole AF1
                                                </td>
                                                <td>$520.00</td>
                                                <td>$520.00</td>
                                            </tr>
                                        @endif
                                        @if($venta2->Fixer->patch)
                                            @switch($venta2->Fixer->patch)
                                                @case($venta2->Fixer->patch == '1')
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Snkrs Patch (Talonera) Par </td>
                                                    <td>$240.00</td>
                                                    <td>$240.00</td>
                                                </tr>
                                                    @break
                                                @case($venta2->Fixer->patch == '2')
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Snkrs Patch (Talonera) 1PZ</td>
                                                    <td>$160.00</td>
                                                    <td>$160.00</td>
                                                </tr>
                                                    @break
                                                @case($venta2->Fixer->patch == '3'):
                                                <tr>
                                                    <th>{{$i++}} </th>
                                                    <td>Heel Stopper Dama</td>
                                                    <td>$160.00</td>
                                                    <td>$160.00</td>
                                                </tr>
                                                    @break
                                                @case($venta2->Fixer->patch == '4'):
                                                    <tr>
                                                        <th>{{$i++}} </th>
                                                        <td>Heel Stopper Caballero</td>
                                                        <td>$240.00</td>
                                                        <td>$240.00</td>
                                                    </tr>
                                                        @break
                                            @endswitch
                                        @endif
                                        @if($venta2->Fixer->invisible == 1)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>Invisible Snkers Patch</td>
                                                <td>$180.00</td>
                                                <td>$180.00</td>
                                            </tr>
                                        @endif
                                        @if($venta2->Fixer->personalizado)
                                            <tr>
                                                <th>{{$i++}} </th>
                                                <td>Fixer Personalizado</td>
                                                <td>${{$venta2->Fixer->personalizado}}.00</td>
                                                <td>${{$venta2->Fixer->personalizado}}.00</td>
                                            </tr>
                                        @endif

                                    @endif
                            @endif
                        @endforeach
                      </tbody>
                    </table>
                    @if (!empty($venta->Precio))
                    <p class="text-dark text-center">
                        <strong>Subtotal</strong> -------------------- ${{$venta->Precio->subtotal}}<br>
                        @if ($venta->Precio->promocion != 0)
                        <strong>Descuento</strong>-------------------- ${{$venta->Precio->descuento}} <br>
                        @switch($venta->Precio->promocion)
                                 @case($venta->Precio->promocion == 0.10)
                                         Cliente distinguido 1 <br>
                                     @break
                                 @case($venta->Precio->promocion == 0.20)
                                         Cliente distinguido 2 <br>
                                     @break
                                 @case($venta->Precio->promocion == 0.100):
                                         Cliente distinguido 3 <br>
                                     @break
                             @endswitch
                         @endif

                         <strong>Recolecccion</strong>---------------- ${{$venta->Precio->recoleccion}} <br><br>

                         <strong>Total</strong>---------------- ${{$venta->Precio->total}}
                     </p>
                     <p class="text-dark text-left">
                         <strong> Forma de pago:  </strong> {{ $venta->Precio->pago }} <br>

                         <strong> Factura:  </strong> {{ $venta->Precio->factura }} <br><br>

                         @switch($venta->Precio->anticipo)
                              @case($venta->Precio->anticipo == '2')
                                      <strong> No deja anticipo </strong> <br>
                                      <strong> Por pagar: </strong> ${{ $venta->Precio->por_pagar }} <br>
                                  @break
                              @case($venta->Precio->anticipo != '2' || $venta->Precio->anticipo != '0')
                                      <strong> Anticipo: </strong> ${{$venta->Precio->anticipo}} <br>
                                      <strong> Por pagar: </strong> ${{$venta->Precio->por_pagar }} <br>
                                  @break
                              @case($venta->Precio->anticipo == '0'):
                                      <strong> Liquida cuenta </strong> <br>
                                  @break
                          @endswitch
                     </p>
                     @endif
            </div>
    </div>

@endsection

