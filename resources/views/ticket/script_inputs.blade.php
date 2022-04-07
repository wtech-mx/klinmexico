<script src="{{ asset('js/steps.js') }}"></script>
<script>
// input para tint Snekers
$(document).ready(function () {
    $('#tint').change(function (e) {
      if ($(this).val() === "4") {
        $('#miinput').prop("disabled", false);
      } else {
        $('#miinput').prop("disabled", true);
      }
    })
  });
// input para descripcion del tint Snekers
$(document).ready(function () {
    $('#tint').change(function (e) {
      if ($(this).val() === "1" || $(this).val() === "2" || $(this).val() === "3" || $(this).val() === "4") {
        $('#descripcion').prop("disabled", false);
      } else {
        $('#descripcion').prop("disabled", true);
      }
    })
  });
$(document).ready(function () {
    $('#tint45').change(function (e) {
      if ($(this).val() === "2" || $(this).val() === "3" || $(this).val() === "4") {
        $('#descripcion').prop("disabled", false);
      } else {
        $('#descripcion').prop("disabled", true);
      }
    })
  });

// input para tint Gorras
$(document).ready(function () {
    $('#tint2').change(function (e) {
      if ($(this).val() === "4") {
        $('#miinput2').prop("disabled", false);
      } else {
        $('#miinput2').prop("disabled", true);
      }
    })
  });
// input para descripcion del tint Gorras
$(document).ready(function () {
    $('#tint2').change(function (e) {
      if ($(this).val() === "1" || $(this).val() === "2" || $(this).val() === "3" || $(this).val() === "4") {
        $('#descripcion2').prop("disabled", false);
      } else {
        $('#descripcion2').prop("disabled", true);
      }
    })
  });

// input para tint Bolsos
$(document).ready(function () {
    $('#tint3').change(function (e) {
      if ($(this).val() === "4") {
        $('#miinput3').prop("disabled", false);
      } else {
        $('#miinput3').prop("disabled", true);
      }
    })
  });
// input para descripcion del tint Bolsos
$(document).ready(function () {
    $('#tint3').change(function (e) {
      if ($(this).val() === "1" || $(this).val() === "2" || $(this).val() === "3" || $(this).val() === "4") {
        $('#descripcion3').prop("disabled", false);
      } else {
        $('#descripcion3').prop("disabled", true);
      }
    })
  });

  // input para recoloeccion
  $(document).ready(function () {
    $('#recoleccio').change(function (e) {
      if ($(this).val() === "1") {
        $('#input').prop("disabled", false);
      } else {
        $('#input').prop("disabled", true);
      }
    })
  });
// input para direccion de recoloeccion
   $(document).ready(function () {
    $('#recoleccio').change(function (e) {
      if ($(this).val() === "1") {
        $('#rec').prop("disabled", false);
      } else {
        $('#rec').prop("disabled", true);
      }
    })
  });

  // input para recoloeccion Gorras
  $(document).ready(function () {
    $('#recoleccion2').change(function (e) {
      if ($(this).val() === "1") {
        $('#input2').prop("disabled", false);
      } else {
        $('#input2').prop("disabled", true);
      }
    })
  });
// input para direccion de recoloeccion Gorras
   $(document).ready(function () {
    $('#recoleccion2').change(function (e) {
      if ($(this).val() === "1") {
        $('#rec2').prop("disabled", false);
      } else {
        $('#rec2').prop("disabled", true);
      }
    })
  });

// input para recoloeccion Bolsos
$(document).ready(function () {
    $('#recoleccion3').change(function (e) {
      if ($(this).val() === "1") {
        $('#input3').prop("disabled", false);
      } else {
        $('#input3').prop("disabled", true);
      }
    })
  });
// input para direccion de recoloeccion Bolsos
   $(document).ready(function () {
    $('#recoleccion3').change(function (e) {
      if ($(this).val() === "1") {
        $('#rec3').prop("disabled", false);
      } else {
        $('#rec3').prop("disabled", true);
      }
    })
  });

// input para recoloeccion Reparacion
$(document).ready(function () {
    $('#recoleccion4').change(function (e) {
      if ($(this).val() === "1") {
        $('#input4').prop("disabled", false);
      } else {
        $('#input4').prop("disabled", true);
      }
    })
  });
// input para direccion de recoloeccion Reparacion
   $(document).ready(function () {
    $('#recoleccion4').change(function (e) {
      if ($(this).val() === "1") {
        $('#rec4').prop("disabled", false);
      } else {
        $('#rec4').prop("disabled", true);
      }
    })
  });

// input para Gifcard
  $(document).ready(function () {
    $('#pago').change(function (e) {
      if ($(this).val() === "Gifcard") {
        $('#gif').prop("disabled", false);
      } else {
        $('#gif').prop("disabled", true);
      }
    })
  });

// input para Gifcard Gorras
  $(document).ready(function () {
    $('#pago2').change(function (e) {
      if ($(this).val() === "Gifcard") {
        $('#gif2').prop("disabled", false);
      } else {
        $('#gif2').prop("disabled", true);
      }
    })
  });

// input para Gifcard Bolsos
  $(document).ready(function () {
    $('#pago3').change(function (e) {
      if ($(this).val() === "Gifcard") {
        $('#gif3').prop("disabled", false);
      } else {
        $('#gif3').prop("disabled", true);
      }
    })
  });

// input para Gifcard Reparacion
  $(document).ready(function () {
    $('#pago4').change(function (e) {
      if ($(this).val() === "Gifcard") {
        $('#gif4').prop("disabled", false);
      } else {
        $('#gif4').prop("disabled", true);
      }
    })
  });

  // input para Gifcard Nano
  $(document).ready(function () {
    $('#pago5').change(function (e) {
      if ($(this).val() === "Gifcard") {
        $('#gif5').prop("disabled", false);
      } else {
        $('#gif5').prop("disabled", true);
      }
    })
  });

// input para por_pagar
  $(document).ready(function () {
    $('#por_pagar').change(function (e) {
      if ($(this).val() === "1") {
        $('#pagar').prop("disabled", false);
      } else {
        $('#pagar').prop("disabled", true);
      }
    })
  });

// input para por_pagar Gorros
    $(document).ready(function () {
    $('#por_pagar2').change(function (e) {
      if ($(this).val() === "1") {
        $('#pagar2').prop("disabled", false);
      } else {
        $('#pagar2').prop("disabled", true);
      }
    })
  });

// input para por_pagar Bolsos
  $(document).ready(function () {
    $('#por_pagar3').change(function (e) {
      if ($(this).val() === "1") {
        $('#pagar3').prop("disabled", false);
      } else {
        $('#pagar3').prop("disabled", true);
      }
    })
  });

// input para por_pagar Reparacion
  $(document).ready(function () {
    $('#por_pagar4').change(function (e) {
      if ($(this).val() === "1") {
        $('#pagar4').prop("disabled", false);
      } else {
        $('#pagar4').prop("disabled", true);
      }
    })
  });

// input para por_pagar Nani
  $(document).ready(function () {
    $('#por_pagar5').change(function (e) {
      if ($(this).val() === "1") {
        $('#pagar5').prop("disabled", false);
      } else {
        $('#pagar5').prop("disabled", true);
      }
    })
  });

// input para Facturacion
  $(document).ready(function () {
    $('#factura').change(function (e) {
      if ($(this).val() === "si") {
        $('#facturacion').prop("disabled", false);
      } else {
        $('#facturacion').prop("disabled", true);
      }
    })
  });

// input para Facturacion Gorras
  $(document).ready(function () {
    $('#factura2').change(function (e) {
      if ($(this).val() === "si") {
        $('#facturacion2').prop("disabled", false);
      } else {
        $('#facturacion2').prop("disabled", true);
      }
    })
  });

// input para Facturacion Bolsos
$(document).ready(function () {
    $('#factura3').change(function (e) {
      if ($(this).val() === "si") {
        $('#facturacion3').prop("disabled", false);
      } else {
        $('#facturacion3').prop("disabled", true);
      }
    })
  });

// input para Facturacion Reparacion
$(document).ready(function () {
    $('#factura4').change(function (e) {
      if ($(this).val() === "si") {
        $('#facturacion4').prop("disabled", false);
      } else {
        $('#facturacion4').prop("disabled", true);
      }
    })
  });

// input para Facturacion Reparacion
$(document).ready(function () {
    $('#factura5').change(function (e) {
      if ($(this).val() === "si") {
        $('#facturacion5').prop("disabled", false);
      } else {
        $('#facturacion5').prop("disabled", true);
      }
    })
  });

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
