<?php 
session_start();
include 'controlador/conexion.php';
$hoy = date('d-m-Y');

if (isset($_SESSION["usuario"])&&$_SESSION["cat"]==2) 
{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>SISTEMA DE GESTION DE COLAS - OFICINA SECRETARIA GENERAL</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" >
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="Modulo-Atencion.php">SECRETARIA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Atencion</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="Modulo-Atencion.php"><i class="fa fa-list-ol"></i> Personas en cola</a>
            </li>
            <li>
              <a href="AddOfi.php"><i class="fa fa-check-square-o"></i> Personas Atendidas</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler" >
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" >
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 Nuevos Tickets!</div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-6">
        <div class="card-header">
          <i class="fa fa-list-ol"></i> <b>Personas en cola</b> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Numero de Ticket</th>
                  <th>Nombre</th>
                  <th>Atender</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Numero de Ticket</th>
                  <th>Nombre</th>
                  <th>Atender</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>OF1-3</td>
                  <td>Alberto Perea</td>
                  <td align="center"><a href=""><i class="fa fa-toggle-on fa-lg"></i></a></td>
                </tr>
                <tr>
                  <td>OF1-4</td>
                  <td>Juan Mendoza</td>
                  <td align="center"><a href=""><i class="fa fa-toggle-on fa-lg"></i></a></td>
                </tr>
                <tr>
                  <td>OF1-5</td>
                  <td>Jose Reategui</td>
                  <td align="center"><a href=""><i class="fa fa-toggle-on fa-lg"></i></a></td>
                </tr>
                <tr>
                  <td>OF1-6</td>
                  <td>Mario Pernia</td>
                  <td align="center"><a href=""><i class="fa fa-toggle-on fa-lg"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"><?=$hoy ?></div>
      </div>
    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Desarrollado por Antony Salazar - Oliver Lozano</small>
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
            <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Click en Salir si desea cerrar Sesion.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="controlador/logout.php">Salir</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <!-- Script para traducir el datable-->
    <script >
    $(document).ready(function(){
      $('#tabla').DataTable({
        "lengthMenu": [ 5, 10, 15, 25, 50,100 ],
        "language":{
          "lengthMenu": "Mostrar _MENU_ Registros por pagina",
          "info" : "Mostrando pagina _PAGE_ de _PAGES_",
          "infoEmpty": "No hay Registros Disponibles",
          "infoFiltered": "(Filtrada de _MAX_ registros)",
          "loadingRecords": "Cargando...",
          "processing" : "Procesando...",
          "search" : "Buscar",
          "zeroRecords" : "No se encontraron registros",
          "paginate" :{
            "next" : "Siguiente",
            "previous" : "Anterior"
          }
        }

      });
    });
  </script>
  </div>
</body>
</html>
<?php
}else{
  //header('location: controlador/logout.php');
  echo "mal";
}
?>
