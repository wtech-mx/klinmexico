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
            <button class="nav-link btn_modal active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                Administrador
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn_modal" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                Cliente
            </button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.  </strong>: {{ $item->Ticket->id }} <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong> Martes 22 Febrero 2022 <br><br>
                    <strong> Cliente: </strong> {{ $item->Ticket->Client->name }} <br><br>
                    <strong> Prenda: </strong> ({{ $item->Ticket->DescripcionTicket->marca }},
                    {{ $item->Ticket->DescripcionTicket->modelo }},
                    {{ $item->Ticket->DescripcionTicket->talla }},
                    {{ $item->Ticket->DescripcionTicket->categoria }},
                    <span class="badge rounded-pill " style="background-color: {{ $item->Ticket->DescripcionTicket->color1 }}">-</span>
                    <span class="badge rounded-pill " style="background-color: {{ $item->Ticket->DescripcionTicket->color2 }}">-</span>) <br>
                    <strong> Observaciones: </strong> {{ $item->Ticket->DescripcionTicket->observacion }}, <br><br>
                    <strong> Rack: </strong> {{ $item->Ticket->rack }} <br>
                    <strong> Servicio: </strong> Estandar <br>
                    <strong> Comentarios: </strong> .... <br>
                    <strong> Entrega: </strong> .... <br>
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
                          <td>{{ $item->Ticket->servicio_primario }}</td>
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
                       <strong>Subtotal</strong> -------------------- $460
                    </p>

            </div>
          </div>

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="limit_ticket">
                <p class="text-dark">
                    <strong> Recibo No.:  </strong> 01-0001 <br>
                    <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
                    <strong> Fecha: </strong> Martes 22 Febrero 2022 <br><br>
                    <strong> Cliente: </strong> Josue Adrian Ramirez Hernandez <br><br>
                    <strong> Prenda: </strong> Nike Air Max (Azul, Blanco, No 8 Hombre) <br>
                    <strong> Observaciones: </strong> Tinta Azuk <br>
                    <strong> Rack: </strong> 01 <br>
                    <strong> Servicio: </strong> Estandar <br>
                    <strong> Comentarios: </strong> .... <br>
                    <strong> Entrega: </strong> .... <br>
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
                       <strong>Subtotal</strong> -------------------- $460 <br>
                       <strong>Descuento</strong>-------------------- $46 <br>
                        Cliente distinguido 1 <br>
                        <strong>Recolecccion</strong>---------------- $100 <br>
                    </p>
                    <p class="text-dark text-left">
                       <strong> Forma de pago:  </strong> {{ $item->pago }} <br>

                       <strong> Factura:  </strong> No <br><br>

                       <strong> Anticipo:  </strong> $50 <br>
                       <strong> Resta:  </strong> $100 <br><br>

                       <strong> Por pagar: </strong> $350 <br>

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
