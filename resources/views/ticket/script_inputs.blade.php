<script src="{{ asset('js/steps.js') }}"></script>

<script>

function funcion(){
    if(document.formulario.tint.checked == true){
        document.formulario.tint_personalizado.disabled = false;
        console.log('hola')
    }
    else{
        document.formulario.tint_personalizado.disabled = false;
        console.log('hola 2')
    }
}

function funcion2(){
    if(document.formulario2.personalizado.checked == true){
        document.formulario2.personalizado.disabled = false;
    }
    else{
        document.formulario2.personalizado.disabled = false;
    }
}

function funcion3(){
    if(document.formulario3.gif.checked == true){
        document.formulario3.gifcard.disabled = false;
    }
    else{
        document.formulario3.gifcard.disabled = false;
        console.log('hola 4')
    }
}

  $(document).ready(() => {
  let url = location.href.replace(/\/$/, "");

  if (location.hash) {
    const hash = url.split("#");
    $('#myTab a[href="#'+hash[1]+'"]').tab("show");
    url = location.href.replace(/\/#/, "#");
    history.replaceState(null, null, url);
    setTimeout(() => {
      $(window).scrollTop(0);
    }, 400);
  }

 $('a[data-toggle="tab"]').on("click", function() {
    let newUrl;
    const hash = $(this).attr("href");
    if(hash == "#pills-Pago") {

      newUrl = url.split("#")[0];

    }else if (hash == "#pills-Servicios") {

        newUrl = url.split("#")[0];
    }else if (hash == "#pills-Exito") {

        newUrl = url.split("#")[0];
    }else {

      newUrl = url.split("#")[0] + hash;
    }
    newUrl += "/";
    history.replaceState(null, null, newUrl);
  });

});

    $(document).ready(function(){
       $(".Pago").click();
    });

    $(document).ready(function(){
       $(".Servicios").click();
    });

    function myTab(){
       window.location.assign("/klinmexico/ticket/crear#pills-Pago");
       location.reload();
    }

    function myTab2(){
       window.location.assign("/klinmexico/ticket/crear#pills-Servicios");
       location.reload();
    }

</script>

<script>
    jQuery(document).ready(function($){
    $(document).ready(function() {
            $('#mi-selector').select2();
        });
    });

    jQuery(document).ready(function($){
    $(document).ready(function() {
            $('#mi-selector2').select2();
        });
    });

    jQuery(document).ready(function($){
    $(document).ready(function() {
            $('#mi-selector3').select2();
        });
    });

    jQuery(document).ready(function($){
    $(document).ready(function() {
            $('#mi-selector4').select2();
        });
    });

    jQuery(document).ready(function($){
    $(document).ready(function() {
            $('#mi-selector5').select2();
        });
    });

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
