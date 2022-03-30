@extends('layouts.app')

@section('template_title')
Editar Venta
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
                <h1> Editar Venta </h1>
            </div>

            <div class="col-12">

                    <div class="card-body">
                      

                    </div>

            </div>
        </div>

@endsection

@section('js')
    @include('ticket.script_inputs')
@endsection


