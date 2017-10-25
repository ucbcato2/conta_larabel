@extends('modulo_admin.layout_administrador')
@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Administrador</a>
        </li>
        <li class="breadcrumb-item active">Adicionar gestion</li>
    </ol>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col left">
                    <form>
                        <strong> BALANCE INICIAL </strong><br><br>
                        <div class="form-row">

                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Fecha Inicio</label>
                                <input class="form-control" type="date"  name="FechaI" size="18" value=""/>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Fecha Fin</label>
                                <input class="form-control" type="date"  name="FechaI" size="18" value=""/>
                            </div>

                        </div>

                        <!-- Example DataTables Card-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Balance Inicial</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre Cuenta(Activos)</th>
                                            <th>Monto</th>
                                            <th>Codigo</th>
                                            <th>Nombre Cuenta(Pasivos Patrimonio)</th>
                                            <th>Monto</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th colspan="2"><center>SALDO</center></th>
                                            <th></th>
                                            <th colspan="2"><center>SALDO</center></th>
                                            <th ></th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
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
                                        </tr>
                                        <tr>
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
                                        </tr>
                                        <tr>
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
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <input type ='button' class="btn btn-secondary"  value = 'Agregar' onclick="location.href = 'apertura'"/>
                        <button type="submit" class="btn btn-success">Guardar </button>


                        <br>
                        <br>

                    </form>

                    <div class="text-center">
                        <a class="d-block small mt-3" href="register.html"> </a>
                        <a class="d-block small" href="forgot-password.html"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop