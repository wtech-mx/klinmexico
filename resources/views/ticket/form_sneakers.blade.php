<form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
    @csrf
    <div class="box box-info padding-1">
        <div class="box-body text-black">

            <div class="form-group">
                <label for="">Cliente</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccionar usuario</option>
                    @foreach ($client as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Servicio Primario</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccionar servicio</option>
                        <option value="Essential">Essential</option>
                        <option value="Plus">Plus</option>
                        <option value="Elite">Elite</option>
                        <option value="Pure White">Pure White</option>
                        <option value="Special Care">Special Care</option>
                </select>
            </div>

            <br>

                <div class="form-group">
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
                <div class="form-group">
                    <label for="">Ingrese monto para tint personalizado</label>
                    <input type="text" name="miinput" id="miinput" disabled>
                </div>


                <br>

                <div class="form-group">
                    <label for="">Unyellow</label>
                    <input class="form-check-input" type="checkbox" value="Unyellow" id="flexCheckDefault">
                </div>

                <div class="form-group">
                    <label for="">Klin Dye</label>
                    <input class="form-check-input" type="checkbox" value="Klin Dye" name="personalizado" id="personalizado">
                </div>

                <hr>
                <h5>Fixer</h5>

                <div class="form-group">
                    <label for="">Glue</label>
                    <select class="form-select" name="fixer" id="fixer">
                        <option selected>Seleccione Glue</option>
                            <option value="Sole Glue Media">Sole Glue Media</option>
                            <option value="Sole Glue Full">Sole Glue Full</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Sew</label>
                    <select class="form-select" name="fixer" id="fixer">
                        <option selected>Seleccione Sew</option>
                            <option value="Sole Sew 5cm">Sole Sew 5cm</option>
                            <option value="Sole Sew Full">Sole Sew Full</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Generic Sole AF1</label>
                    <input class="form-check-input" type="checkbox" value="Unyellow" name="sole" id="sole">
                </div>

                <div class="form-group">
                    <label for="">Invisible Snkers Patch</label>
                    <input class="form-check-input" type="checkbox" value="Klin Dye" name="invisible" id="invisible">
                </div>


                <div class="form-group">
                    <label for="">Personalizado</label>
                    <input type="number" name="personalizado" id="personalizado" placeholder="$">
                    </select>
                </div>

                <div class="form-group">
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
</form>
