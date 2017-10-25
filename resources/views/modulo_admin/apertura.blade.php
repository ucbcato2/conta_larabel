@extends('modulo_admin.layout_emergente')
@section('content')
    <div class="card-header"> Agregar Item de Ingreso </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <div class="form-row">
                    <label for="exampleConfirmPassword">Clase Cuenta</label>
                    <div class="col-md-6">

                        <p>
                            <select name="c">
                                <option>1. Activo</option>
                                <option>2. Pasivo</option>
                                <option>3. Patrimonio</option>
                                <option>4. Otros</option>
                                <option>5. Otros</option>
                                <option>6. Ingresos</option>
                                <option>7. Egresos</option>
                            </select>
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Concepto</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Monto</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Factura/Recibo</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>

            <input type="button" class="btn btn-success" onclick="location.href='adicionar_gestion'" value="Registrar">

        </form>
    </div>



    @stop