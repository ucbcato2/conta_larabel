@extends('modulo_admin.layout_administrador')
@section('content')

      <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Administrador</a>
    </li>
    <li class="breadcrumb-item active">Datos de la Entidad</li>
  </ol>

      <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col left">
  <form>

      <strong> DATOS DE LA ENTIDAD </strong><br><br>
      <div class="form-row">
          <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-5">
              <label for="inputPassword4">Direccion</label>
              <input type="text" class="form-control" id="" placeholder="Direccion">
          </div>

      </div>

      <div class="form-row">
          <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Telefono</label>
              <input type="text" class="form-control" id="nombre" placeholder="Telefono">
          </div>
          <div class="form-group col-md-5">
              <label for="inputPassword4">Ciudad</label>
              <input type="text" class="form-control" id="" placeholder="Ciudad">
          </div>

      </div>

      <strong>AÑO Y PERIODO </strong><br><br>
      <div class="form-row">
          <div class="form-group col-md-5">

              <label for="exampleInputEmail1">Año</label>
              <input type="text" class="form-control" id="" placeholder="Año">
          </div>
          <div class="form-group col-md-5">
              <label for="inputPassword4">Periodo</label>
              <input type="text" class="form-control" id="" placeholder="Periodo">
          </div>

      </div>

      <strong>DATOS DEL RESPONSABLE</strong><br><br>
      <div class="form-row">
          <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" id="" placeholder="Nombre">
          </div>
          <div class="form-group col-md-4">
              <label for="inputPassword4">Apellido</label>
              <input type="text" class="form-control" id="" placeholder="Apellido">
          </div>
          <div class="form-group col-md-2">
              <label for="inputPassword4">Documento de identidad</label>
              <input type="text" class="form-control" id="" placeholder="CI">
          </div>

      </div>
      <button type="submit" class="btn btn-primary btn-lg">Editar </button>

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