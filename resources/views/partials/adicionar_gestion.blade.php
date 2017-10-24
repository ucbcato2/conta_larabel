@extends('modulo_admin.layout_administrador')
@section('content')

<div class="container">
    <div class="">
      
      <div class="card-body">
      <div class="row">
  <div class="col left">
  <form>
          <div class="form-group">
            <label for="exampleInputEmail1">DATOS DE LA ENTIDAD</label><br>
            <label for="exampleInputEmail1">Nombre</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
            <label for="exampleInputEmail1">Direccion</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
            <label for="exampleInputEmail1">Telefono</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
            <label for="exampleInputEmail1">Ciudad</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
          </div>
          
          <div class="form-group">
            <div class="form-check">
              
            </div>
          </div>
          
  </div>
  <div class="col right">
          <div class="form-group">
            <label for="exampleInputEmail1">DATOS DEL RESPONSABLE</label><br>
            <label for="exampleInputEmail1">Nombre completo</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
            <label for="exampleInputEmail1">CI</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder=
            "">
            <label for="exampleInputEmail1">AÑO Y PERIODO</label><br>
            <label for="exampleInputEmail1">Año</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
           <label for="exampleInputEmail1">Periodo</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="">
  </div>
</div>
<a class="btn btn-primary btn-block" href="index.html">Guardar</a>
<a class="btn btn-primary btn-block" href="index.html">Editar</a>
        </form>
        
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html"> </a>
          <a class="d-block small" href="forgot-password.html"> </a>
        </div>
      </div>
    </div>
  </div>

 @stop