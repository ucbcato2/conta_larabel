 @extends('modulo_admin.layout_administrador')
@section('content')

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Administrador</a>
    </li>
    <li class="breadcrumb-item active">Listado de Cuentas</li>
  </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Cuentas registradas</div>
        <div class="card-body">
            <label>
                Buscar
                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
            </label>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre Cuenta</th>
                  <th>Nivel</th>
                  <th>Debe/Haber</th>
                  <th>Estado</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <button type="button" class="btn btn-info">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>

                  </td>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    @stop