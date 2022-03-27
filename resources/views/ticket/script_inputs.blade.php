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
</script>
