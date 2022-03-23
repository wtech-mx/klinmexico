@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('client.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Ma:</strong>
                            {{ $client->apellido_ma }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Pa:</strong>
                            {{ $client->apellido_pa }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $client->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Num Compras:</strong>
                            {{ $client->num_compras }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $client->calle }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $client->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $client->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Alcaldia:</strong>
                            {{ $client->alcaldia }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $client->colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $client->fecha_nacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
