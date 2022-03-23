<form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
    @csrf
    <div class="box box-info padding-1">
        <div class="box-body text-black">
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Cliente</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccionar usuario</option>
                        @foreach ($client as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mt-4 col-6">
                    <label for="">Protector</label>
                    <input class="form-check-input" type="checkbox" value="Protector" id="servicio_primario" selected>
                </div>
            </div>
            
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
