@extends('modulo_admin.layout_emergente')
@section('content')
    <div class="card-header">Editar datos de Usuario</div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-10">
                        <label for="exampleInputName">Nombre</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">Apellido Paterno</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputName">Apellido Materno</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Documento de identidad</label>
                        <input class="form-control" id="" type="Integer" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="exampleInputName">Nombre de Uusario</label>
                        <input class="form-control" id="" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">Contraseña</label>
                        <input class="form-control" id="" type="password" aria-describedby="nameHelp" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputName">Confirme Contraseña</label>
                        <input class="form-control" id="" type="password" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <input type ='button' class="btn btn-secondary"  value = 'Guardar Cambios' onclick="location.href = 'listado_usuarios'"/>
        </form>
    </div>

@stop