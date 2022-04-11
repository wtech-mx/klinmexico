<!-- Modal -->
<div class="modal fade" id="modal_estatusrack_{{ $item->id }}" tabindex="-1" aria-labelledby="modal_estatusracklLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modal_estatusracklLabel">Estatus del rack</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
          <h3>Seleciona si el rack ya esta liberado </h3>

           <form method="POST" action="{{ route('rack.update_rack',$item->rack) }}"  role="form" enctype="multipart/form-data">
               @csrf
             <p class="text-center"> El rack ya esat liberado? </p>

            <input type="hidden" name="ticker_id" value="{{$item->id}}">
            <input type="hidden" name="rack" value="{{$item->rack}}">

            <div class="d-flex justify-content-center">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="estatus_rack" value="1">
                  <label class="form-check-label">SI</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="estatus_rack"  value="2">
                  <label class="form-check-label">NO</label>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-3">
                <button  class="btn btn-secondary text-center">
                   Guardar
                </button>
            </div>

          </form>

      </div>

    </div>
  </div>
</div>
