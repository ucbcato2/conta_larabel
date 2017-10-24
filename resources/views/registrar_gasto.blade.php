
@extends ('modulo_secretaria.layout_secretaria')

@section('content')


<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Secretario</a>
        </li>
        <li class="breadcrumb-item active">Registrar Egreso</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Datos generales</div>
        <div class="card-body">
        
  
      
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row" >
              <div class="col-md-2">
                <label for="exampleInputName">Fecha</label>
           <input class="form-control" type="date"  name="FechaIn" size="18" value=""/>
              </div>
              <div class="col-md-4">
                 <label for="exampleInputLastName">Tipo de Cambio</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="...">
              </div>
                <div class="col-md-3"  >
                           <label for="exampleInputEmail1">Moneda</label>
                 <p>
                  <select name="dp">
                        <option>Bs</option>
                       <option>$us</option>
                  </select>
                </p>       
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
               <div class="col-md-3">
                <label for="exampleInputEmail1">Destino de pago</label>
                 <p>
                  <select name="dp">
                        <option>Caja</option>
                       <option>Banco</option>
                      
                  </select>
                </p>
             </div>
               <div class="col-md-3">
                
              </div>
             <div class="col-md-3">
                <label for="exampleConfirmPassword">Cuenta</label>
                <p>
                  <select name="c">
                        <option>Servicio Profesional</option>
                       <option>SErvicio Basico</option>
                       <option>Refrigerio personal</option>
                  </select>
                </p>
              </div>
              
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
               <div class="col-md-6">
                <label for="exampleInputPassword1">Número de Comprobante</label>
                <input class="form-control" id="exampleInputPassword1" type="text" placeholder="...">
              </div>
              <div class="col-md-6">
                <label for="exampleInputPassword1">Pagado a </label>
                <input class="form-control" id="exampleInputPassword1" type="text" placeholder="...">
              </div>
              
            </div>
          </div>
        
       
    
  </div>
        </div>
       
      </div>
  <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Detalle </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Cuenta</th>
                  <th>Concepto</th>
                  <th>Monto</th>
                   <th>Factura/Recibo</th>
                </tr>
              </thead>
          <tbody>            
                <tr>
                  <td>123</td>
                  <td>098765</td>
                  <td>Material Limpieza</td>
                 
                  <td>Bs2000</td>
                  <td>232134</td>
                   <td><input type="button" class="borrar" value="Eliminar" /></td>
                </tr>
                <tr>
                  <td>124</td>
                  <td>0987654</td>
                  <td>Transporte</td>   
                 <td>Bs210</td>
                 <td>232134</td>
                   <td><input type="button" class="borrar" value="Eliminar" /></td>
                </tr>
                <tr>
                  <td>125</td>
                  <td>98765</td>
                  <td>Material de Oficina</td>
                  <td>Bs3000</td>
                  <td>232134</td>
                   <td><input type="button" class="borrar" value="Eliminar" /></td>
                </tr>
               
             
              </tbody>
            </table>
            
            </button>
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Agregar</button>
            <p align="right">Total: Bs. 5210</p>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /.container-fluid-->
       <!-- paete 2-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Datos de responsables</div>
        <div class="card-body">
        
  
      
      <div class="card-body">
      
          <div class="form-group">
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
          <div class="form-group">
            <label for="exampleInputName">Autorizado  por:  </label>
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
          <div class="form-group">
             <label for="exampleInputName">Elaborado por:  </label>
            <div class="form-row">
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
      
      <!-- /.parte 2-->
      
         <a class="btn btn-primary btn-block" href="login.html">Guardar</a>
        </form>   

@stop