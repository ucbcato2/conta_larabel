@extends('modulo_secretaria.layout_emergente')
@section('content')
    <div class="card-header">Agregar Item de Inversion </div>
    <div class="card-body">
        <form>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Codigo</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Cuenta</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
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
                        <label for="exampleInputName">Costo Total</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Monto Periodico</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Tiempo de Amortizacion</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>

            <input type="button" class="btn btn-success" onclick="location.href='registrar_inversion'" value="Guardar">
        </form>

    </div>


    @stop