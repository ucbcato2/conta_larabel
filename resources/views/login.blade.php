@extends('layout_login')
@section('content')
    <body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Ingreso al Sistema Contable</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Número de carnet</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            En caso de olvidar la contraseña contactase con el administrador</label>
                    </div>
                </div>
                <a class="btn btn-primary btn-block" href="index.html">Entrar</a>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="register.html"> </a>
                <a class="d-block small" href="forgot-password.html"> </a>
            </div>
        </div>
    </div>
</div>
    </body>
    @stop