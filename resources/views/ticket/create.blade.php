@extends('layouts.app')

@section('template_title')
Crear Ventas
@endsection

@section('active1', 'active')


@section('css')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/steps.css') }}" rel="stylesheet">
@endsection

@section('content')

    <style>
        .tab-content > .active {
            display: inline;
        }
    </style>

        <div class="row">
            <div class="col-12">

                @includeif('partials.errors')

                  <!-- Nav tabs -->
                  <div class="card" style="border:solid 1px #ccc;">

                    <div class="card-header" style="border:solid 1px #ccc;">


                        <div class="d-flex justify-content-start">
                             <p style="margin-top: 0.5rem;margin-left: 1rem;margin-right: 5rem"> Nueva Venta </p>

                            <ul class="nav nav-tabs justify-content-center" style=" height: auto;flex-direction: unset;border: 1px solid transparent;" role="tablist" id="myTab">

                              <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-Cliente-tab" data-bs-toggle="pill" data-bs-target="#pills-Cliente" type="button" role="tab" aria-controls="pills-Cliente" aria-selected="true" style="border: 1px solid transparent;">
                                   Seleccionar Cliente
                                </button>
                              </li>

                              <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-Servicios-tab" data-bs-toggle="pill" href="#pills-Servicios" type="button" role="tab" aria-controls="pills-Servicios" aria-selected="false" style="border: 1px solid transparent;">
                                    Agregar Servicios
                                </a>
                              </li>

                              <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-Pago-tab" data-bs-toggle="pill" href="#pills-Pago" type="button" role="tab" aria-controls="pills-Pago" aria-selected="false" style="border: 1px solid transparent;">
                                    Pago
                                </a>
                              </li>

                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Recibo-tab" data-bs-toggle="pill" data-bs-target="#pills-Recibo" type="button" role="tab" aria-controls="pills-Recibo" aria-selected="false" style="border: 1px solid transparent;">
                                    Recibo
                                </button>
                              </li>

                              <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-Exito-tab" data-bs-toggle="pill" href="#pills-Exito" type="button" role="tab" aria-controls="pills-Exito" aria-selected="false" style="border: 1px solid transparent;">
                                    -
                                </a>
                              </li>

                            </ul>
                         </div>

                            <div class="tab-content" id="pills-tabContent">

                              <div class="tab-pane fade show active" id="pills-Cliente" role="tabpanel" aria-labelledby="pills-Cliente-tab">

                                    <div class="form-group col-xs-12 col-md-12 col-lg-12 ">
                                        <div class="d-flex flex-row bd-highlight p-5">
                                            @if(!empty($venta))
                                                @if($venta->suma == NULL)
                                                    <p class="text-dark " for="">Cliente Seleccionado: {{$venta->Client->name}}</p>
                                                    <form action="{{ route('ticket.destroy',$venta->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn">
                                                            <i class="fa fa-fw fa-edit"></i>Cambiar cliente
                                                        </button>
                                                    </form>
                                                    @else
                                                        <form method="POST" action="{{ route('ticket.store_venta') }}"  role="form" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class=" bd-highlight">
                                                                <label class="label_steps text-dark">Busca y Selecciona al Cliente * </label> <br>
                                                                <select class="form-select" name="id_user" id="mi-selector">
                                                                    <option selected>Seleccionar usuario</option>
                                                                    @foreach ($client as $item)
                                                                        <option value="{{$item->id}}" required>{{$item->name}} / {{$item->telefono}} / {{$item->email}} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                                <button id="next1" class="btn-block btn_next_tab mt-3 mb-1 next mt-4" style="left: 80%">
                                                                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Seleccionar
                                                                </button>
                                                         </form>

                                                        <div class="contentbtn">
                                                            <label class="label_steps text-dark">-</label> <br>
                                                            <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_cliente" id="rec" style="margin-left: 2rem;">
                                                                + Registrar Cliente
                                                            </a>
                                                        </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                              </div>

                              <div class="tab-pane fade" id="pills-Exito" role="tabpanel" aria-labelledby="pills-Exito-tab">
                                  <div class="content p-5">
                                     <p class="text-dark "> Servicio agregado con ??xito</p>

                                     <button class="btn btn-secondary" class="Servicios" onclick='myTab2()'><i class="fa fa-plus" aria-hidden="true"></i> Agregar M??s Servicios</button>

                                     <button class="btn btn-secondary" class="Pago" onclick='myTab()'><i class="fa fa-plus" aria-hidden="true"></i> Ir a Pago</button>
                                  </div>
                              </div>

                              <div class="tab-pane fade" id="pills-Servicios" role="tabpanel" aria-labelledby="pills-Servicios-tab">

                                  <ul class="nav nav-tabs justify-content-center" style=" height: auto;flex-direction: unset;" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                           Sneakers & Calzado
                                      </a>

                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " id="pills-Gorras-tab" data-bs-toggle="pill" data-bs-target="#pills-Gorras" type="button" role="tab" aria-controls="pills-Gorras" aria-selected="true">
                                          Gorras
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " id="pills-Bolsos-tab" data-bs-toggle="pill" data-bs-target="#pills-Bolsos" type="button" role="tab" aria-controls="pills-Bolsos" aria-selected="true">
                                          Bolsos & Mochilas
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                     <a class="nav-link " id="pills-Reparacion-tab" data-bs-toggle="pill" data-bs-target="#pills-Reparacion" type="button" role="tab" aria-controls="pills-Reparacion" aria-selected="true">
                                          Reparacion
                                      </a>
                                    </li>
                                       <li class="nav-item">
                                          <a class="nav-link " id="pills-Nano-tab" data-bs-toggle="pill" data-bs-target="#pills-Nano" type="button" role="tab" aria-controls="pills-Nano" aria-selected="true">
                                             Nano
                                          </a>
                                    </li>
                                  </ul>

                                <div class="card-body">
                                  <!-- Tab panes -->
                                  <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <form method="POST" name="formulario" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                                            @include('ticket.form_sneakers')
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="pills-Gorras" role="tabpanel" aria-labelledby="pills-Gorras-tab">
                                        <p class="text-dark mr-5">
                                            <form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
                                                @csrf
                                                @include('ticket.form_gorros')
                                            </form>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-Bolsos" role="tabpanel" aria-labelledby="pills-Bolsos-tab">
                                        <p class="text-dark mr-5">
                                            <form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
                                                @csrf
                                                @include('ticket.form_bolsos')
                                            </form>
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-Reparacion" role="tabpanel" aria-labelledby="pills-Reparacion-tab">
                                      <p class="text-dark mr-5">
                                        <form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                                            @include('ticket.form_reparacion')
                                        </form>
                                      </p>
                                    </div>

                                    <div class="tab-pane fade" id="pills-Nano" role="tabpanel" aria-labelledby="pills-Nano-tab">
                                        <p class="text-dark mr-5">
                                            <form method="POST" action="{{ route('ticket.store_nano') }}"  role="form" enctype="multipart/form-data">
                                                @csrf
                                                @include('ticket.form_nano')
                                            </form>
                                        </p>
                                    </div>

                                  </div>
                                </div>

                              </div>

                              <div class="tab-pane fade" id="pills-Pago" role="tabpanel" aria-labelledby="pills-Pago-tab">

                                        <form method="POST" action="{{ route('ticket.store_precio') }}" name="formulario3" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-xs-12 col-md-12 col-lg-12 ">

                                                    <div class="d-flex flex-row bd-highlight p-5">
                                                        <div class="bd-highlight">
                                                            <label class="label_steps text-dark" for="">Aplicar Promocion</label>
                                                            <select class="form-select select2 " name="promocion" id="promocion">
                                                                    <option value="0" selected>Seleccionar forma</option>
                                                                    <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Cliente Distinguido 1 ---- 10% </option>
                                                                    <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Cliente Distinguido 2 ---- 20% </option>
                                                                    <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cliente Distinguido 3 ---- 100% </option>
                                                                    <option value=".10" {{ old('promocion') == .10 ? 'selected' : '' }}>Descuento Total --------- 10% </option>
                                                                    <option value=".20" {{ old('promocion') == .20 ? 'selected' : '' }}>Descuento Total --------- 20%</option>
                                                                    <option value=".100" {{ old('promocion') == .100 ? 'selected' : '' }}>Cortes??a ------------------ 100%</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-6">
                                                        <div class="row text-dark p-4">

                                                            <label class="label_steps" for="">Recolecci??n</label> <br>
                                                            <div class="col-3">
                                                                    <div class="form-check  mb-3">
                                                                    <input class="form-check-input" type="radio" name="recoleccion" id="recoleccion" value="0">
                                                                    <label class="form-check-label">
                                                                        No
                                                                    </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="recoleccion" id="recoleccion" value="1">
                                                                    <label class="form-check-label">
                                                                        si
                                                                    </label>
                                                                </div>
                                                                </div>

                                                            <div class="col-6">
                                                                    <input  class="form-control" type="number" name="recoleccion" id="input" >
                                                            </div>

                                                            <div class="col-12 mt-5">
                                                                <label class="label_steps" for="">Forma de Pago</label> <br>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pago" id="pago" value="Efectivo">
                                                                        <label class="form-check-label">
                                                                            Efectivo
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-12">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pago" id="pago" value="Tarjeta de debito">
                                                                        <label class="form-check-label">
                                                                            Tarjeta de D??bito
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-12">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pago" id="pago" value="Tarjeta de credito">
                                                                        <label class="form-check-label">
                                                                            Tarjeta de Cr??dito
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-12">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pago" id="pago" value="Transferencia bancaria">
                                                                        <label class="form-check-label">
                                                                            Transferencia Bancaria
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pago" id="pago" value="Mercado pago">
                                                                        <label class="form-check-label">
                                                                            Mercado Pago
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                    <div class="form-check  mb-3">
                                                                        <input class="form-check-input" type="checkbox" name="gif" id="gif"  onclick="funcion3()" />
                                                                        <label class="form-check-label" for="tint4">
                                                                        Gifcard
                                                                        </label>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <input class="form-control"  type="text" name="gifcard" id="gifcard" disabled>
                                                                    </div>
                                                                </div>

                                                            <label class="label_steps mt-5" for="">Factura</label> <br>
                                                                <div class="col-3">
                                                                    <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="factura" id="factura" value="no">
                                                                            <label class="form-check-label">
                                                                                No
                                                                            </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-3">
                                                                    <div class="form-check  mb-3">
                                                                            <input class="form-check-input" type="radio" name="factura" id="factura" value="si">
                                                                            <label class="form-check-label">
                                                                                S??
                                                                            </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <label class="form-check-label">
                                                                        Datos Factura
                                                                    </label>
                                                                    <div class="form-check">
                                                                        @if(!empty($venta))
                                                                            @if ($client_factura->cp == Null)

                                                                            @else
                                                                                <input class="form-check-input" type="radio" name="factura" id="factura" value="{{$client_factura->id}}">
                                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                                    {{$client_factura->calle}}, {{$client_factura->colonia}}, {{$client_factura->alcaldia}}, {{$client_factura->estado}}, {{$client_factura->cp}}
                                                                                </label>
                                                                            @endif
                                                                             <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_factura" id="rec" style="margin-left: 2rem;">
                                                                                +
                                                                            </a>
                                                                        @endif
                                                                     </div>
                                                                </div>
                                                            </div>
                                                </div>

                                                <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-6">
                                                        <div class="row text-dark p-4">
                                                            <label class="label_steps" for="">Direcci??n de Recolecci??n</label> <br>

                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    @if (!empty($direccion))
                                                                        @foreach ($direccion as $item)
                                                                        @if ($item->calle == Null)
                                                                        <strong class="label_steps" for="">No tiene direccion registrada</strong>
                                                                                @else
                                                                                <input class="form-check-input" type="radio" name="id_direccion" id="id_direccion" value="{{$item->id}}">
                                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                                    {{$item->calle}}, {{$item->colonia}},<br> {{$item->alcaldia}}, {{$item->estado}}, {{$item->cp}}
                                                                                </label>
                                                                                @endif
                                                                        @endforeach
                                                                        @else
                                                                         <strong class="label_steps" for="">No tiene direccion registrada</strong>
                                                                    @endif
                                                                 </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_direccion" id="rec" disabled>
                                                                    Registrar
                                                                </a>
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="label_steps mt-5" for="">Por Pagar</label> <br>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="2">
                                                                        <label class="form-check-label">
                                                                        Sin Anticipo
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                            <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="0">
                                                                        <label class="form-check-label">
                                                                        Liquida Cuenta
                                                                        </label>
                                                                    </div>
                                                            </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                    <div class="form-check  mb-3">
                                                                        <input class="form-check-input" type="radio" name="anticipo" id="anticipo" value="1">
                                                                        <label class="form-check-label" for="tint4">
                                                                        Anticipo
                                                                        </label>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <input class="form-control"  type="text" name="por_pagar" id="pagar" >
                                                                    </div>
                                                                </div>


                                                        </div>
                                                </div>

                                                <div class="form-group col-xs-12 col-md-12 col-lg-12">
                                                    <button id="next1" class="btn-block btn_next_tab mt-3 mb-1 next mt-4" style="left: 80%">
                                                        <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar
                                                    </button>
                                                </div>
                                            </div>
                                            @include('ticket.direccion_modal')
                                            @include('ticket.factura_modal')
                                        </form>

                              </div>

                              <div class="tab-pane fade" id="pills-Recibo" role="tabpanel" aria-labelledby="pills-Recibo-tab">

                              </div>
                            </div>



                    </div>

                  </div>
                  @include('ticket.cliente_modal')
            </div>
        </div>

@endsection

@section('js')
    @include('ticket.script_inputs')

  <script>
    function informacion_cp(){
        $.ajax({
            url : 'https://api.copomex.com/query/info_cp/' + $("#codigo_postal").val(), //aqui va el endpoint de la api de copomex, con el m??todo de info_cp, se deber?? concatenar el CP ya que se recibe como parametro en la url, no como variable GET
            data : {
              token : $("#token").val(), //aqui va tu token. Crea una cuenta gratuita para obtener tu token en https://api.copomex.com/panel
              type : 'simplified'
            },
            type : 'GET', //el m??todo http que se usar??, COPOMEX solo ocupa m??todo get
            dataType : 'json', // el tipo de informaci??n que se espera de respuesta
            success : function(copomex) { // c??digo a ejecutar si la petici??n es satisfactoria, dentro ir?? el c??digo personalizado
                if(!copomex.error){ //si NO hubo un error

                $("#cp_response").val(copomex.response.cp); //ingresamos la respuesta del cp, en el input destino
                $("#tipo_asentamiento").val(copomex.response.tipo_asentamiento); //ingresamos la respuesta del tipo de asentamiento, en el input destino
                $("#municipio").val(copomex.response.municipio); //ingresamos la respuesta del municipio, en el input destino
                $("#estado").val(copomex.response.estado); //ingresamos la respuesta del estado, en el input destino
                $("#ciudad").val(copomex.response.ciudad); //ingresamos la respuesta de la ciudad, en el input destino
                $("#pais").val(copomex.response.pais); //ingresamos la respuesta del pais, en el input destino

                $("#list_colonias").html(''); //reseteamos el input select para que no se concatene a los nuevos resultados
                for(var i = 0; i<copomex.response.asentamiento.length; i++){ //iteramos el resultado en un for
                $("#list_colonias").append('<option>'+copomex.response.asentamiento[i]+'</option>'); //agregamos el item al listado de colonias
                }

                }else{ //si hubo error
                console.log('error: ' + copomex.error_message);
                }


            },
            error : function(jqXHR, status, error) { //si ocurri?? un error en el request al endpoint de COPOMEX

                if(jqXHR.status==400){ //el c??digo http 400 significa que algo se mand?? mal (Bad Request)
                  copomex = jqXHR.responseJSON;
                  alert(copomex.error_message); //mostramos en un alerta, el error recibido
                }

            },
            complete : function(jqXHR, status) { // c??digo a ejecutar sin importar si la petici??n fall?? o no
                console.log('Petici??n a COPOMEX terminada');
            }
          });


    }
  </script>
@endsection


