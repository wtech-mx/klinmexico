<form method="POST" action="{{ route('ticket.store') }}"  role="form" enctype="multipart/form-data">
    @csrf
    <div class="box box-info padding-1">
        <div class="box-body text-black">
            <div class="row">

                <div class="form-group col-xs-6 col-sm-4 col-lg-4">
                    <label for="">Cliente</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccionar usuario</option>
                        @foreach ($client as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-xs-6 col-sm-4 col-lg-4">
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

                <div class="form-group col-xs-6 col-sm-4 col-lg-4">
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
                    <input class="form-control" type="number" name="miinput" id="miinput" placeholder="$" disabled>
                </div>

                <div class="form-group mt-5 col-6">
                    <div class="form-check form-check-inline  mt-4">
                      <input class="form-check-input" type="checkbox" value="Unyellow" id="flexCheckDefault">
                      <label class="form-check-label" for="inlineRadio1">Unyellow</label>
                    </div>

                    <div class="form-check form-check-inline  mt-4">
                      <input class="form-check-input" type="checkbox" value="Klin Dye" name="personalizado" id="personalizado">
                      <label class="form-check-label" for="inlineRadio2">Klin Dye</label>
                    </div>
                </div>

                <h2 class="mt-5">Fixer</h2>

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

                <div class="form-group mt-5 col-xs-6 col-sm-4 col-lg-4">
                    <div class="form-check form-check-inline  mt-4">
                      <input class="form-check-input" type="checkbox" value="Unyellow" name="sole" id="sole">
                      <label class="form-check-label" for="inlineRadio1">Generic Sole AF1</label>
                    </div>

                    <div class="form-check form-check-inline  mt-4">
                      <input class="form-check-input" type="checkbox" value="Klin Dye" name="invisible" id="invisible">
                      <label class="form-check-label" for="inlineRadio2">Invisible Snkers Patch</label>
                    </div>
                </div>

                <div class="form-group mt-5 col-xs-6 col-sm-4 col-lg-4">
                    <label for="">Personalizado</label> <br>
                    <input class="form-control" type="number" name="personalizado" id="personalizado" placeholder="$">

                </div>

                <div class="form-group mt-5 col-xs-6 col-sm-4 col-lg-4">
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
        </div>

        <div class="d-flex flex-row-reverse bd-highlight mt-5">
          <div class="p-2 bd-highlight">
               <button type="submit" class="btn btn-save">
                   <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
               </button>
          </div>
        </div>

    </div>
</form>
