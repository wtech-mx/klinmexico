@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">
                <h1>Dashboard</h1>
            </div>

            <div class="col-12 col-md-6 col-lg-6 content_card_shadow_dash" >
                 <a href="{{ route('clients.index') }}" >
                    <div class="d-flex justify-content-between">
                        <h3 class="mt-3">
                            Clientes <br><br>
                             No. -
                        </h3>
                        <p class="font-sans-serif lh-1 mb-1 fs-4">

                        </p>
                        <img class="icon_dasboard mt-3 mb-3" src="{{ asset('icons/team.png') }}" alt="">
                    </div>
                 </a>
            </div>

           <div class="col-12 col-md-6 col-lg-6 content_card_shadow_dash_2" >
                <a href="{{ route('ticket.index') }}" >
                    <div class="d-flex justify-content-between">
                        <h3 class="mt-3">
                            Tickets <br><br>
                             No. -
                        </h3>
                        <p class="font-sans-serif lh-1 mb-1 fs-4">

                        </p>
                        <img class="icon_dasboard mt-3 mb-3" src="{{ asset('icons/recibo.png') }}" alt="">
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-6 content_card_shadow_dash">
                <a href="{{ route('users.index') }}" >
                    <div class="d-flex justify-content-between">
                        <h3 class="mt-3">
                            Usuarios <br><br>
                             No. -
                        </h3>
                        <p class="font-sans-serif lh-1 mb-1 fs-4">

                        </p>
                        <img class="icon_dasboard mt-3 mb-3" src="{{ asset('icons/roles.png') }}" alt="">
                    </div>
                </a>
            </div>

           <div class="col-12 col-md-6 col-lg-6 content_card_shadow_dash_2" >
                <a href="{{ route('roles.index') }}" >
                    <div class="d-flex justify-content-between">
                        <h3 class="mt-3">
                            Roles <br><br>
                             No. -
                        </h3>
                        <p class="font-sans-serif lh-1 mb-1 fs-4">

                        </p>
                        <img class="icon_dasboard mt-3 mb-3" src="{{ asset('icons/settings.png') }}" alt="">
                    </div>
                </a>
            </div>

        </div>
    </div>

@endsection
