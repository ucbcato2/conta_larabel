@extends ('modulo_contador.layout_contador')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Contador</a>
        </li>
        <li class="breadcrumb-item active">Libro Mayor</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Reporte Libro Mayor Mes-Año</div>
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


                    <div class="col-md-4">
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

            <div class="form-row" >
                <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-info">Buscar</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <strong> REPORTE LIBRO DIARIO MES-AÑO</strong>
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
                        <th>Debe </th>
                        <th>Haber</th>
                        <th>Saldo</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
                <button type="submit" class="btn btn-outline-danger">Exportar a PDF </button>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

@stop