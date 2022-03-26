@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('clients.index') }}">Clientes</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Crear Cliente
                    </li>
                  </ol>
                </nav>

                <h1> Clientes </h1>

            </div>

            <div class="col-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('clients.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    @include('client.form')
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js')

  <script src="{{ asset('js/intlTelInput.js') }}"></script>
  <script>
    var input = document.querySelector("#telefono");
    window.intlTelInput(input, {
       initialCountry: "mx",
       onlyCountries: [
         'ar',
         'us',
         'ad',
         'at',
         'be',
         'ca',
         'ch',
         'de',
         'ee',
         'nl',
         'es',
         'hk',
         'hr',
         'ie',
         'it',
         'mc',
         'mx',
         'pl',
         'pt',
         'qa',
         'se',
         'th',
         'ua',
         'uk',
         'za',
       ],
       placeholderNumberType: "MOBILE",
       preferredCountries: ['mx', 'us'],
       separateDialCode: true,
       utilsScript: "{{ asset('js/utils.js') }}",
    });
  </script>
@endsection
