<!-- Modal -->
<div class="modal fade" id="modal_cliente" tabindex="-1" aria-labelledby="modal_cliente" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_cliente">Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('clients.store_venta') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                    <div class="row">
                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                        <label class="label_steps" for="">Nombre(s)</label> <br>
                        <input class="form-control"  type="text" name="name" id="name">
                    </div>

                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                        <label class="label_steps" for="">Apellido paterno</label> <br>
                        <input class="form-control"  type="text" name="apellido_pa" id="apellido_pa">
                    </div>

                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                        <label class="label_steps" for="">Apellido materno</label> <br>
                        <input class="form-control"  type="text" name="apellido_ma" id="apellido_ma">
                    </div>

                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                        <label class="label_steps" for="">Correo</label> <br>
                        <input class="form-control"  type="text" name="email" id="email">
                    </div>

                    <div class="form-group mt-3 col-6 col-md-6 col-lg-6">
                        <label class="label_steps" for="">Telefono</label> <br>
                        <input class="form-control"  type="tel" name="telefono" id="telefono" maxlength="10">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn mt-3 mb-1 next mt-4" style="left: 80%">
                    <i class="fa fa-floppy-o mr-3" aria-hidden="true"></i> Guardar
               </button>
            </div>
        </form>
      </div>
    </div>
  </div>
