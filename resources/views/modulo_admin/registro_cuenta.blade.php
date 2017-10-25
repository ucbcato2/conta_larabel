@extends('modulo_admin.layout_administrador')
@section('content')

      <!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <a href="#">Administrador</a>
</li>
<li class="breadcrumb-item active">Registrar nueva cuenta</li>
</ol>

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
             <div class="col left">

    <form>
          <div class="form-group row">
              <label for="exampleConfirmPassword">Clase Cuenta</label>
              <div class="col-sm-10">

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



      <!-- <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-legend col-sm-2">Radios</legend>
                <div class="col-sm-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            Option three is disabled
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>-->

         <fieldset class="form-group">
             <div class="row">
                 <legend class="col-form-legend col-sm-2">Codigo de cuenta</legend>
                 <div class="col-sm-10">
                     <div class="form-check">
                         <label class="form-check-label">
                             <input class="form-check-input" type="radio" name="clase" id="clase" value="option1" checked>
                             Clase
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                             <input type="text" disabled>
                         </label>

                     </div>
                     <div class="form-check">
                         <label class="form-check-label">
                             <input class="form-check-input" type="radio" name="grupo" id="grupo" value="option2">
                             Grupo
                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                             <input type="text" disabled>
                         </label>
                     </div>
                     <div class="form-check">
                         <label class="form-check-label">
                             <input class="form-check-input" type="radio" name="subgrupo" id="subgrupo" value="option3">
                             Sub Grupo
                             <input type="text" disabled>
                         </label>
                     </div>
                     <div class="form-check">
                         <label class="form-check-label">
                             <input class="form-check-input" type="radio" name="cuentadel" id="cuentadel" value="option1">
                             Cuenta del
                             <input type="text" disabled>
                         </label>
                     </div>
                 </div>
             </div>
         </fieldset>


         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="inputEmail4">Nombre Cuenta</label>
                 <input type="text" class="form-control" id="" placeholder="">
             </div>
             <div class="form-group col-md-6">
                 <label for="inputPassword4">Tipo de cuenta</label>
                 <select id="" class="form-control">
                     <option selected>DEBE</option>
                     <option>HABER</option>
                 </select>
             </div>
         </div>

         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="exampleInputEmail1">Codificacion de la cuenta</label>
                 <input class="form-control" id="" type="text" aria-describedby="emailHelp" placeholder="">
             </div>
         </div>

            <button type="button" class="btn btn-success">Registrar</button>

    </form>


        <div class="text-center">
          <a class="d-block small mt-3" href="register.html"> </a>
          <a class="d-block small" href="forgot-password.html"> </a>
        </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seguro desea salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccion Salir </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html">SALIR</a>
          </div>
        </div>
      </div>
    </div>

             </div>
        </div>
    </div>
</div>

 @stop