@extends ('modulo_contador.layout_contador')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Contador</a>
        </li>
        <li class="breadcrumb-item active">Reporte Ingresos</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Ingresos</div>
        <div class="card-body">
            <div class="form-row" >
                <div class="col-md-2">
                    <label for="exampleInputName">Fecha Desde</label>
                    <input class="form-control" type="date"  name="FechaI" size="18" value=""/>
                </div>

                <div class="col-md-2">
                    <label for="exampleInputName">Fecha Hasta</label>
                    <input class="form-control" type="date"  name="FechaI" size="18" value=""/>
                </div>

            </div>

            <div class="form-row" >
                <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-info">Buscar</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <strong> LIBRO DIARIO INGRESOS</strong>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nro</th>
                        <th>Fecha</th>
                        <th>Cuenta</th>
                        <th>Concepto</th>
                        <th>Recibido de</th>
                        <th>Caja</th>
                        <th>Tipo Cambio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-outline-danger">Exportar a PDF </button>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

@stop