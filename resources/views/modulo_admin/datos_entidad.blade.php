@extends('modulo_admin.layout_administrador')
@section('content')

      <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Administrador</a>
    </li>
    <li class="breadcrumb-item active">Balance Inicial</li>
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
      <button type="submit" class="btn btn-success btn-lg">Guardar </button>
      <input type="button" class="btn btn-info btn-lg" onclick="location.href='adicionar_gestion'" value="Balance inicial">


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