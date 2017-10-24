
@extends ('modulo_secretaria.layout_secretaria')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Secretaria</a>
        </li>
        <li class="breadcrumb-item active">Ingresos</li>
      </ol>
<!--Cabecera-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Datos Generales</div>
        <div class="card-body">

            <!--inicio fecha -->
          <div class="form-row" >
              <div class="col-md-2">
                <label for="exampleInputName">Fecha</label>
                <input class="form-control" type="date"  name="FechaI" size="18" value=""/>
              </div>
                   <!--Fin Fecha-->
              <div class="col-md-3">
                      <p><label for="exampleInputLastName">Tipo de Cambio</label>
                      <input class="form-control" id="exampleInputLastName" type="integer" aria-describedby="nameHelp" placeholder="..."></p>
                    </div>
                    <div class="col-md-2"  >
                        <label for="exampleInputEmail1">Moneda</label>
                        <p><select name="dp">
                          <option>Bs</option>
                          <option>$us</option>
                        </select></p>       
                    </div>
                    <div class="col-md-3"><label for="exampleInputEmail1">Destino de pago</label>
                        <p><select name="dp">
                        <option>Caja</option>
                       <option>Banco</option> 
                           </select></p>
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputPassword1">Número de Comprobante</label>
                    <input class="form-control" id="exampleInputPassword1" type="text" placeholder="...">
                </div>
          </div>
                    
                   <div class="form-group">
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="exampleConfirmPassword">Cuenta</label>
                          <p><select name="c">
                              <option>Servicio Profesional</option>
                              <option>SErvicio Basico</option>
                              <option>Refrigerio personal</option>
                          </select></p>
                    </div>
                    <div class="col-md-3">
                      <label for="exampleInputPassword1">Pagado a </label>
                      <input class="form-control" id="exampleInputPassword1" type="text" >
                  </div>
                </div>
              </div>
              </div>
              </div>

          <!--Fin cabecera-->    
       <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Detalle</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nº</th>
                  <th>Cuenta</th>  
                  <th>Concepto</th>  
                  <th>Origen/Destino pago</th>  
                  <th>Total</th>      
                  <th>Entregado a</th> 
                   <th>Recibido de</th> 
                </tr>
              </thead>
              <tfoot>
                <tr align="center" style="font-size:1.2em">
                  <th colspan="5">Totales</th>
                  <th></th>
                  <th></th>
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
                  <td></td>
                </tr>
                <tr>
                   <td></td>
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
                  <td></td>
                </tr>
                <tr>
                  <td></td>
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
                  <td></td>
                </tr>
                <tr>
                   <td></td>
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
                  <td></td>
                </tr>
                <tr>
                   <td></td>
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
                  <td></td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-primary btn-block" href="agrega_ingreso.html">Agregar</a>
          </div>
        </div>
        <div class="card-footer small text-muted">Actualizado     </div>
      </div>
    </div>
    <!--Involucrados-->
     <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Involucrados</div>
        <div class="card-body">
             <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">Recibido por:  </label>
                          <div class="form-row" >
                              <div class="col-md-4">
                                  <label for="exampleInputName">Nombre</label>
                                  <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="12-12-12">
                              </div>
                              <div class="col-md-4"  >
                                  <label for="exampleInputLastName">CI</label>
                                  <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="...">
                              </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputName">Elaborado por:  </label>
                          <div class="form-row" >
              
                              <div class="col-md-4">
                                  <label for="exampleInputName">Nombre</label>
                                  <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="12-12-12">
                              </div>
                              <div class="col-md-4"  >
                                  <label for="exampleInputLastName">CI</label>
                                  <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="...">
                              </div>
                          </div>
                    </div>
                </div>
              </div> 
         </div>
      </div>

@stop