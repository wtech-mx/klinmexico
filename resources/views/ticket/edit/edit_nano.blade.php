<!-- Modal -->
<div class="modal fade" id="exampleNano_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <form method="POST" action="{{ route('ticket.update', $item->Venta->id) }}"  role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-card text-black">
                    <div class="row">

                        <div class="form-group mt-4 col-xs-12 col-md-3 col-lg-3">
                                    <label class="label_steps" for="">Agregar servicio</label>

                                    <div class="form-check">
                                        @if ($item->servicio_primario == 'Protector')
                                        <label class="label_steps" for="">Protector -- $55</label>
                                        <input  class="form-check-input form-control" type="checkbox" value="Protector" name="servicio_primario" id="servicio_primario" checked disabled>
                                        @else
                                        <label class="label_steps" for="">Protector -- $55</label>
                                        <input  class="form-check-input form-control" type="checkbox" value="Protector" name="servicio_primario" id="servicio_primario"  disabled>
                                        @endif
                                    </div>

                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
