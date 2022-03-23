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

                <div class="form-group col-6">
                    <label for="">Servicio Primario</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccionar servicio</option>
                            <option value="Klin Bag">Klin Bag</option>
                            <option value="Klin Purse">Klin Purse</option>
                            <option value="Klin Bag Extra">Klin Bag Extra</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Servicio secundario</label>
                    <select class="form-select select2 select2-hidden-accessible" name="grado_academico" id="grado_academico">
                        <option selected>Seleccionar tint</option>
                            <option value="Tint 1">Tint 1</option>
                            <option value="Tint 2">Tint 2</option>
                            <option value="Tint 3">Tint 3</option>
                            <option value="Tint 1">Tint 1</option>
                            <option value="4">Personalizado</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Tint personalizado</label> <br>
                    <input type="text" name="miinput" id="miinput" disabled>
                </div>

            </div>

            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
