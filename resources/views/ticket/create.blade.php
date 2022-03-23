@extends('layouts.app')

@section('template_title')
Crear Ventas
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Venta</span>
                    </div>
                    <div class="card-body">

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-sneackers-tab" data-bs-toggle="pill" data-bs-target="#pills-sneackers" role="tab" aria-controls="pills-sneackers" aria-selected="true">Sneackers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-gorras-tab" data-bs-toggle="pill" data-bs-target="#pills-gorras" role="tab" aria-controls="pills-gorras" aria-selected="false">Gorras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-bolsos-tab" data-bs-toggle="pill" data-bs-target="#pills-bolsos" role="tab" aria-controls="pills-bolsos" aria-selected="false">bolsos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-reparacion-tab" data-bs-toggle="pill" data-bs-target="#pills-reparacion" role="tab" aria-controls="pills-reparacion" aria-selected="false">reparacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-nano-tab" data-bs-toggle="pill" data-bs-target="#pills-nano" role="tab" aria-controls="pills-nano" aria-selected="false">nano</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-sneackers" role="tabpanel" aria-labelledby="pills-sneackers-tab"">
                                @include('ticket.form_sneakers')
                            </div>
                            <div class="tab-pane fade" id="pills-gorras" role="tabpanel" aria-labelledby="pills-gorras-tab">
                                <h1>Hola</h1>
                            </div>
                            <div class="tab-pane fade" id="pills-bolsos" role="tabpanel" aria-labelledby="pills-bolsos-tab">
                                <h1>Hola1</h1>
                            </div>
                            <div class="tab-pane fade" id="pills-reparacion" role="tabpanel" aria-labelledby="pills-reparacion-tab">
                                <h1>Hola2</h1>
                            </div>
                            <div class="tab-pane fade" id="pills-nano" role="tabpanel" aria-labelledby="pills-nano-tab">
                                <h1>Hola3</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script
src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
