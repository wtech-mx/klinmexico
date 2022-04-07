<!-- Modal -->
<div class="modal fade" id="modal_factura" tabindex="-1" aria-labelledby="modal_factura" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_factura">Factura</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">

            {{-- value="8095d78e-190d-46aa-b793-75830d857d5e" --}}
            <input type="hidden" class="form-control" placeholder="pruebas" value="8095d78e-190d-46aa-b793-75830d857d5e" id="token">
            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Codigo Postal</label> <br>
                <input class="form-control"  type="text" name="cp_factura" id="codigo_postal" placeholder="Cp">
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                {{ Form::label('Consultar') }}
                <a href="javascript:void(0)" onclick="informacion_cp()" class="btn btn-secondary form-control">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                </a>
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Colonia</label> <br>
                <select class="form-control" name="colonia_factura" id="list_colonias" >
                    <option>Seleccione</option>
                  </select>
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Alcaldia</label> <br>
                <input class="form-control"  type="text" name="alcaldia_factura" id="municipio" placeholder="alcaldia">
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Estado</label> <br>
                <input class="form-control"  type="text" name="estado_factura" id="estado" placeholder="estado">
            </div>

            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">Calle</label> <br>
                <input class="form-control"  type="text" name="calle_factura" id="calle" placeholder="calle">
            </div>
            
            <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                <label class="label_steps" for="">RFC</label> <br>
                <input class="form-control"  type="text" name="rfc" id="rfc" placeholder="RFC">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Listo</button>
        </div>
      </div>
    </div>
  </div>
