  @extends ('modulo_secretaria.layout_secretaria')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Secretario</a>
        </li>
        <li class="breadcrumb-item active">Registrar Transferencia</li>
      </ol>        
            <div class="form-row" >
              <div class="col-md-2">
                <label for="exampleInputName">Fecha</label>
                <input class="form-control" type="date" aria-describedby="nameHelp" >
                <br>
              </div>
            </div>
     
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Caja</div>
        <div class="card-body">
        
  
      
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row" >
              <div class="col-md-2">
                <label><input type="checkbox" id="cbox1" value="first_checkbox"> ingreso</label><br>
                <label><input type="checkbox" id="cbox1" value="first_checkbox"> Egreso</label><br>
                <label for="exampleInputName">Monto</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="12-12-12">
              </div>
              </div>
              
  </div>
        </div>
    </div></div>
    <!-- /.container-fluid-->
       <!-- paete 2-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>Banco</div>
        <div class="card-body">
        
  
      
      <div class="card-body">
      
          <div class="form-group">
            <label><input type="checkbox" id="cbox1" value="first_checkbox"> Deposito</label><br>
              <label><input type="checkbox" id="cbox1" value="first_checkbox"> Retiro</label><br>
            <div class="form-row" >
              
              <div class="col-md-4">
                <label for="exampleInputName">Numero de cuenta</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="12-12-12">
              </div>
              <div class="col-md-4"  >
                <label for="exampleInputLastName">Banco</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="...">
              </div>
               <div class="col-md-4"  >
                <label for="exampleInputLastName">Monto</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="...">
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>

      <!-- /.parte 2-->
        <!-- paete 3-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Datos de responsables</div>
        <div class="card-body">
        
  
      
      <div class="card-body">
      
          <div class="form-group">
            <label for="exampleInputName">Autorizado por:  </label>
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
    
      
      
      <!-- /.parte 3-->
         <a class="btn btn-primary btn-block" href="login.html">Guardar</a>
        </form>   

@stop