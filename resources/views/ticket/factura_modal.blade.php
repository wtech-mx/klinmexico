<!-- Modal -->
<div class="modal fade" id="modal_factura" tabindex="-1" aria-labelledby="modal_factura" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="modal_factura">Factura</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Nombre o Razón soacial</label> <br>
                <input class="form-control"  type="text" name="cp_factura" id="codigo_postal" placeholder="Cp">
            </div>


            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Direccion Fiscal</label> <br>
                <input class="form-control"  type="text" name="alcaldia_factura" id="municipio" placeholder="alcaldia">
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">RFC</label> <br>
                <input class="form-control"  type="text" name="estado_factura" id="estado" placeholder="estado">
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Uso de Factura</label> <br>
                <input class="form-control"  type="text" name="calle_factura" id="calle" placeholder="calle">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Listo</button>
        </div>
      </div>
    </div>
  </div>
