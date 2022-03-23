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
                    <label for="">Klin Cap</label>
                    <input class="form-check-input" type="checkbox" value="Klin Cap" id="servicio_primario" selected>
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Servicio secundario</label>
                    <select class="form-select select2 select2-hidden-accessible" name="grado_academico" id="grado_academico">
                        <option selected>Seleccionar tint</option>
                            <option value="1">Tint 1</option>
                            <option value="2">Tint 2</option>
                            <option value="3">Tint 3</option>
                            <option value="4">Personalizado</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Tint personalizado</label> <br>
                    <input type="text" name="miinput" id="miinput" disabled>
                </div>

                <div class="form-group mt-3 mb-3 col-6">
                    <label for="">Protector</label>
                    <input class="form-check-input" type="checkbox" value="1" id="protector">
                </div>

            </div>
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
