@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
@endsection

@section('active5', 'active')

@section('content')
    <section class="content container-fluid  p-3">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">
                <h1> Ingresar los datos del cliente </h1>
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

    // Campo numeros
    var numeros = document.getElementById('telefono');

    // Poner cursor en el campo numeros
    numeros.focus();

    numeros.onkeydown = function(e){
        // Permitir la tecla para borrar
        if (e.key == 'Backspace') return true;

        // Permitir flecha izquierda
        if (e.key == 'ArrowLeft') return true;

        // Permitir flecha derecha
        if (e.key == 'ArrowRight') return true;

        // Bloquear tecla de espacio
        if (e.key == ' ') return false;

        // Bloquear tecla si no es un numero
        if (isNaN(e.key)) return false;
    };

    numeros.onkeyup = function(){
        numeros.value = numeros.value
            // Borrar todos los espacios
            .replace(/\s/g, '')

            // Agregar un espacio cada dos numeros
            .replace(/([0-9]{2})/g, '$1 ')

            // Borrar espacio al final
            .trim();
    };

    function informacion_cp(){
        $.ajax({
            url : 'https://api.copomex.com/query/info_cp/' + $("#codigo_postal").val(), //aqui va el endpoint de la api de copomex, con el método de info_cp, se deberá concatenar el CP ya que se recibe como parametro en la url, no como variable GET
            data : {
              token : $("#token").val(), //aqui va tu token. Crea una cuenta gratuita para obtener tu token en https://api.copomex.com/panel
              type : 'simplified'
            },
            type : 'GET', //el método http que se usará, COPOMEX solo ocupa método get
            dataType : 'json', // el tipo de información que se espera de respuesta
            success : function(copomex) { // código a ejecutar si la petición es satisfactoria, dentro irá el código personalizado
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
            error : function(jqXHR, status, error) { //si ocurrió un error en el request al endpoint de COPOMEX

                if(jqXHR.status==400){ //el código http 400 significa que algo se mandó mal (Bad Request)
                  copomex = jqXHR.responseJSON;
                  alert(copomex.error_message); //mostramos en un alerta, el error recibido
                }

            },
            complete : function(jqXHR, status) { // código a ejecutar sin importar si la petición falló o no
                console.log('Petición a COPOMEX terminada');
            }
          });


    }
  </script>
@endsection
