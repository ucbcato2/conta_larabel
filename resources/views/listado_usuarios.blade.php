 @extends('modulo_admin.layout_administrador')
@section('content')

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrador</a>
        </li>
        <li class="breadcrumb-item active">Listado Usuarios</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Usuarios Registrados </div>
        <div class="card-body">
            <label>
                Buscar
                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
            </label>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nro</th>
                  <th>Nombre</th>
                  <th>Apellido paterno</th>
                  <th>Apellido Materno</th>
                  <th>Cedula de identidad</th>
                  <th>Nombre Usuario</th>
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
                  <td></td>
                  <td></td>
                  <td>
                    <button type="button" href="modicar_usuario.blade.php" class="btn btn-info">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>

                  </td>
                  
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    @stop