
@extends('modulo_admin.layout_administrador')
@section('content')

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrador</a>
        </li>
        <li class="breadcrumb-item active">Registrar Nuevo Usuario</li>
      </ol>
      <div class="card mb-3">
          <div class="card-body">
      <form>

          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre">
              </div>
              <div class="form-group col-md-4">
                  <label for="inputPassword4">Documento de identidad</label>
                  <input type="text" class="form-control" id="" placeholder="CI">
              </div>

          </div>

          <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="inputPassword4">Apellido Paterno</label>
                  <input type="text" class="form-control" id="" placeholder="Apellido Paterno">
              </div>
              <div class="form-group col-md-4">
                  <label for="inputPassword4">Apellido Materno</label>
                  <input type="text" class="form-control" id="" placeholder="Apellido Materno">
              </div>
          </div>

          <div class="form-row">

              <div class="form-group col-md-4">
                  <label for="inputPassword4">Nombre de Usuario</label>
                  <input type="text" class="form-control" id="" placeholder="Usuario">
              </div>
              <div class="form-group col-md-4">
                  <label for="inputPassword4">Contraseña</label>
                  <input type="password" class="form-control" id="" placeholder="contraseña">
              </div>

          </div>

          <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="exampleConfirmPassword">Cargo</label>
                  <p>
                      <select id="cargo" name="cargo">
                          <option>Administrador</option>
                          <option>Secretaria</option>
                          <option>Contador</option>
                      </select>
                  </p>
              </div>
          </div>

    <button type="submit" class="btn btn-success">Registrar </button>

      </form>
        
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html"> </a>
          <a class="d-block small" href="forgot-password.html"> </a>
        </div>
      </div>
      </div>

 @stop