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
                    <label for="">Fixer Snkrs</label>
                    <input class="form-check-input" type="checkbox" value="Fixer Snkrs" id="servicio_primario" selected>
                </div>

                <div class="form-group col-6">
                    <label for="">Glue</label>
                    <select class="form-select" name="fixer" id="fixer">
                        <option selected>Seleccione Glue</option>
                            <option value="Sole Glue Media">Sole Glue Media</option>
                            <option value="Sole Glue Full">Sole Glue Full</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="">Sew</label>
                    <select class="form-select" name="fixer" id="fixer">
                        <option selected>Seleccione Sew</option>
                            <option value="Sole Sew 5cm">Sole Sew 5cm</option>
                            <option value="Sole Sew Full">Sole Sew Full</option>
                    </select>
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Generic Sole AF1</label>
                    <input class="form-check-input" type="checkbox" value="Unyellow" name="sole" id="sole">
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Invisible Snkers Patch</label>
                    <input class="form-check-input" type="checkbox" value="Klin Dye" name="invisible" id="invisible">
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Personalizado</label> <br>
                    <input type="number" name="personalizado" id="personalizado" placeholder="$">
                    </select>
                </div>

                <div class="form-group mt-5 col-6">
                    <label for="">Snkrs</label>
                    <select class="form-select" name="fixer" id="fixer">
                        <option selected>Seleccione Snkrs</option>
                            <option value="Snkrs patch par">Snkrs patch par</option>
                            <option value="Snkrs patch 1pz">Snkrs patch 1pz</option>
                            <option value="Heel stopper dama">Heel stopper dama</option>
                            <option value="Heel stopper caballero">Heel stopper caballero</option>
                    </select>
                </div>

            </div>

            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
