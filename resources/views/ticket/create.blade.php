@extends('layouts.app')

@section('template_title')
Crear Ventas
@endsection

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
                  <div class="card">

                    <div class="card-header">
                      <ul class="nav nav-tabs justify-content-center" style=" height: auto;flex-direction: unset;" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <i class="now-ui-icons objects_umbrella-13"></i> Snekers
                          </a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="pills-Gorras-tab" data-bs-toggle="pill" data-bs-target="#pills-Gorras" type="button" role="tab" aria-controls="pills-Gorras" aria-selected="true">
                            <i class="now-ui-icons shopping_cart-simple"></i> Gorras
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="pills-Bolsos-tab" data-bs-toggle="pill" data-bs-target="#pills-Bolsos" type="button" role="tab" aria-controls="pills-Bolsos" aria-selected="true">
                            <i class="now-ui-icons shopping_shop"></i> Bolsos
                          </a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link " id="pills-Reparacion-tab" data-bs-toggle="pill" data-bs-target="#pills-Reparacion" type="button" role="tab" aria-controls="pills-Reparacion" aria-selected="true">
                            <i class="now-ui-icons ui-2_settings-90"></i> Reparacion
                          </a>
                        </li>
                           <li class="nav-item">
                              <a class="nav-link " id="pills-Nano-tab" data-bs-toggle="pill" data-bs-target="#pills-Nano" type="button" role="tab" aria-controls="pills-Nano" aria-selected="true">
                                <i class="now-ui-icons ui-2_settings-90"></i> Nano
                              </a>
                        </li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <!-- Tab panes -->
                      <div class="tab-content text-center " id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                         @include('.ticket.form_sneakers')
                        </div>

                        <div class="tab-pane fade" id="pills-Gorras" role="tabpanel" aria-labelledby="pills-Gorras-tab">
                            <p class="text-dark mr-5">
                                @include('.ticket.form_gorros')
                            </p>
                        </div>

                        <div class="tab-pane fade" id="pills-Bolsos" role="tabpanel" aria-labelledby="pills-Bolsos-tab">
                          <p class="text-dark mr-5">Hola 3.</p>
                        </div>

                        <div class="tab-pane fade" id="pills-Reparacion" role="tabpanel" aria-labelledby="pills-Reparacion-tab">
                          <p class="text-dark mr-5">Hola 4.</p>
                        </div>

                        <div class="tab-pane fade" id="pills-Nano" role="tabpanel" aria-labelledby="pills-Nano-tab">
                            <p class="text-dark mr-5">Hola 5.</p>
                        </div>

                      </div>
                    </div>

                  </div>

            </div>
        </div>

@endsection

@section('js')

    <script src="{{ asset('js/steps.js') }}"></script>
    <script>
    $(document).ready(function () {
        $('#grado_academico').change(function (e) {
          if ($(this).val() === "4") {
            $('#miinput').prop("disabled", false);
          } else {
            $('#miinput').prop("disabled", true);
          }
        })
      });
    </script>
@endsection


