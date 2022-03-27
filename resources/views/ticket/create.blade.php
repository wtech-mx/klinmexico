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
            <div class="d-flex justify-content-between mt-5">
                <h1> Nueva Venta </h1>
            </div>

            <div class="col-12">

                @includeif('partials.errors')

                  <!-- Nav tabs -->
                  <div class="card">

                    <div class="card-header">
                      <ul class="nav nav-tabs justify-content-center" style=" height: auto;flex-direction: unset;" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                              <img src="{{ asset('icons/sneakers.png') }}" style="width: 30px"> Snekers
                          </a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="pills-Gorras-tab" data-bs-toggle="pill" data-bs-target="#pills-Gorras" type="button" role="tab" aria-controls="pills-Gorras" aria-selected="true">
                             <img src="{{ asset('icons/cap.png') }}" style="width: 30px"> Gorras
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="pills-Bolsos-tab" data-bs-toggle="pill" data-bs-target="#pills-Bolsos" type="button" role="tab" aria-controls="pills-Bolsos" aria-selected="true">
                             <img src="{{ asset('icons/handbag.png') }}" style="width: 30px"> Bolsos
                          </a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link " id="pills-Reparacion-tab" data-bs-toggle="pill" data-bs-target="#pills-Reparacion" type="button" role="tab" aria-controls="pills-Reparacion" aria-selected="true">
                             <img src="{{ asset('icons/repair.png') }}" style="width: 30px"> Reparacion
                          </a>
                        </li>
                           <li class="nav-item">
                              <a class="nav-link " id="pills-Nano-tab" data-bs-toggle="pill" data-bs-target="#pills-Nano" type="button" role="tab" aria-controls="pills-Nano" aria-selected="true">
                                <img src="{{ asset('icons/spray.png') }}" style="width: 30px"> Nano
                              </a>
                        </li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <!-- Tab panes -->
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
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
                                <form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf
                                    @include('ticket.form_nano')
                                </form>
                            </p>
                        </div>

                      </div>
                    </div>

                  </div>

            </div>
        </div>

@endsection

@section('js')
    @include('ticket.script_inputs')
@endsection


