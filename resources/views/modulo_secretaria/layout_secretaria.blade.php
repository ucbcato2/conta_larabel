<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistema de Contabilidad de Costos</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ url('assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ url('assets/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Sistema de Contabilidad</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index_sec.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="registrar_in.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Regsitrar Ingresos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Regsitrar Egresos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="registrar_egreso">Registrar ficha Egreso</a>
            </li>
            <li>
              <a href="registrar_gasto">Registrar gasto</a>
            </li>
            <li>
              <a href="registrar_inversion">Regsitrar Inversion</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="registrar_transferencia">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text" >Regsitrar Trasnferencias</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Content begin -->

  @yield('content')  

<!-- Content finish-->
 
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Grupo 2 Contabilidad 2017 2017</small>
        </div>
      </div>
    </footer>
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
   
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ url('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('assets/js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ url('assets/js/sb-admin-charts.min.js') }}"></script>
  </div>
</body>

</html>
