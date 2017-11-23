<?php 
session_start();
include '../../controlador/conexion.php';
include '../../controlador/consultas.php';
if (isset($_POST['submit'])) {
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $celular = $_POST['celular'];
  $fec = $_POST['fec'];
  $query = Persona_Update($dni,$nombre,$direccion,$celular,$fec);
  $mysqli->query($query);
}
if (isset($_SESSION["usuario"])&&$_SESSION["cat"]==1) 
{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SISTEMA DE GESTION DE COLAS - OFICINA SECRETARIA GENERAL</title>
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
  
  <link href="../../css/sweetalert2.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-ligth" id="page-top" style="background-image: url(../../img/fondo1.jpg) ; background-size: 100%;">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
    <a class="navbar-brand" href="admin.php">ADMINISTRADOR</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admin.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Personal</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="javascript:loadurl('AddUsers.php','main')" class="boton-ver"><i class="fa fa-user-plus "></i> Registrar Personal</a>
            </li>
            <li>
              <a href="#" id="mostrar" class="boton-personal" ><i class="fa fa-eye"></i> Ver Personal</a>
            </li>
            <li>
              <a href="#" id="mostrar" class="boton-usuarios"><i class="fa fa-eye"></i> Ver Usuarios</a>
            </li>
            
          </ul>

          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Components" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-briefcase"></i>
            <span class="nav-link-text">Oficinas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="Components">
            <li>
              <a href="javascript:loadurl('AddOffice.php','main')" class="boton-ver"><i class="fa fa-plus"></i> Registrar Oficinas</a>
            </li>
            <li>
              <a href="javascript:loadurl('AssignOffice.php','main')" class="boton-ver"><i class="fa fa-sign-in"></i> Asignar Oficina</a>
            </li>
            <li>
              <a href="#" id="mostrar" class="boton-oficinas"><i class="fa fa-eye "></i> Ver Oficinas</a>
            </li>
          </ul>
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
          <a href="#!" class="btn-exit-system" >
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>

  <div  id="main">
  </div>
  <div class="content-wrapper" style="display:none;" id="cambio">
  <div class="container-fluid personal">
      <div class="card mb-6">
        <div class="card-header">
          <i class="fa fa-users"></i> <b>Personal</b> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Celular</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Editar</th>
                </tr>
              </thead>
              
              <tbody>
                  <?php
                  
                  $query1 = Persona_Mostrar();
                  $execute1 = $mysqli->query($query1);
                  while ($row1=mysqli_fetch_array($execute1)) 
                  {
                  ?>  
                  <tr>
                    <td><?=$row1[0] ?></td>
                    <td><?=$row1[1] ?></td>
                    <td><?=$row1[2] ?></td>
                    <td><?=$row1[3] ?></td>
                    <td><?=$row1[4] ?></td>
                    <?php 
                    $row1[1]=str_replace(' ', '+', $row1[1]);
                    $row1[2]=str_replace(' ', '+', $row1[2]);
                    $row1[3]=str_replace(' ', '+', $row1[3]);
                    $row1[4]=str_replace(' ', '+', $row1[4]);
                    ?>
                    <td><?php echo "<a href='#' data-toggle='modal' data-target='#editarModal' onclick=editarDatos('$row1[0]','$row1[1]','$row1[2]','$row1[3]','$row1[4]');><i class='fa fa-pencil-square-o'></i></a>" ?></td>
                  </tr>
                  <?php
                  }
                  ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"><?php echo date('d-m-Y'); ?></div>
      </div>
    </div>
  <div class="container-fluid usuarios">
      <div class="card mb-6">
        <div class="card-header">
          <i class="fa fa-users"></i> <b>Usuarios</b> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataUsers" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Tipo</th>
                  <th>Estado</th>
                  <th>Cambiar de Estado</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Tipo</th>
                  <th>Estado</th>
                  <th>Cambiar de Estado</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php
                  include '../../controlador/conexion.php';
                  
                  $query1 = Usuario_Mostrar();
                  $execute1 = $mysqli->query($query1);
                  while ($row1=mysqli_fetch_array($execute1)) 
                  {
                  ?>  
                  <tr>
                    <td><?=$row1[0] ?></td>
                    <td><?=$row1[1] ?></td>
                    <td><?php 
                    if ($row1[2]==1) {
                      echo 'Administrador';
                    }
                    elseif ($row1[2]==2) {
                      echo 'Secretaria';
                    }
                    else echo 'Recepcionista';
                     ?></td>
                     <td><?php 
                    if ($row1[3]==1) {
                      echo 'Activo';
                    }
                    else echo 'Inactivo';
                     ?></td>
                    <td><i class='fa fa-pencil-square-o'></i></td>
                  </tr>
                  <?php
                  }
                  ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"><?php echo date('d-m-Y'); ?></div>
      </div>
    </div>
  <div class="container-fluid oficinas">
      <div class="card mb-6">
        <div class="card-header">
          <i class="fa fa-briefcase"></i> <b>Oficinas</b> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataOffices" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombres</th>
                  <th>Oficina</th>
                  <th>Fecha de Inicio</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nombres</th>
                  <th>Oficina</th>
                  <th>Fecha de Inicio</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php
                  include '../../controlador/conexion.php';
                  $query1 = Oficina_Encargado();
                  $execute1 = $mysqli->query($query1);
                  while ($row1=mysqli_fetch_array($execute1)) 
                  {
                  ?>  
                  <tr>
                    <td><?=$row1[0] ?></td>
                    <td><?=$row1[1] ?></td>
                    <td><?=$row1[2] ?></td>
                  <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
        <div class="card-footer small text-muted"><?php echo date('d-m-Y'); ?></div>
      </div>
    </div>    
  </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>

    <footer class="sticky-footer" style="background-color: rgba(0, 0, 0, 0.5)">
      <div class="container">
        <div class="text-center">
          <small><strong style="color: white;">Copyright © Desarrollado por Antony Salazar - Oliver Lozano</strong> </small>
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
          <div class="modal-header" style="background-color: yellow;">
            <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Click en Salir si desea cerrar Sesion.</div>
          <div class="modal-footer">
            <button class="btn" type="button" style="background-color: red;color: white;" data-dismiss="modal">Cancelar</button>
            <a class="btn" style="background-color: green;color: white;" href="../../controlador/logout.php">Salir</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Desactivar Usuario Modal-->
    <div class="modal fade" id="desactivar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea desactivar el usuario?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Click en aceptar si desea ejecutar la acción.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="controlador/DesUser.php">Aceptar</a>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Actualizar Persona -->
    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: lightblue;">
            <h5 class="modal-title" id="exampleModalLabel">Editar Persona</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="POST" id="formulario">
              <input type="text" class="form-control" name="dni" id="dni" readonly><br>
              <input type="text" class="form-control" name="nombre" size="50" id="nombre"><br>
              <input type="text" class="form-control" name="direccion" size="50" id="direccion"><br>
              <input type="text" class="form-control" name="celular" size="50" id="celular"><br>
              <input type="date" class="form-control" name="fec" id="fec"><br>
            </form>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn" style="background-color: green;color: white;" form="formulario" name="submit">
            <button class="btn" type="button" style="background-color: red;color: white;" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>
    <!-- Integracion de data-tables-->    
    <script src="../../js/sb-admin-datatables.min.js"></script>
    <!-- Integracion de ajaxs-->
    <script src="../../js/ajax.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/sweetalert2.min.js"></script>
    
    <!--script src="../../js/sb-admin-charts.min.js"></script-->
    <!-- Script para traducir el datable-->
    <script >
    $(document).ready(function(){
      $('#ed').DataTable({
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
      $(".boton-ver").click(function(){
         $("#main").show(1000);
         $("#cambio").hide("slow");
      });
      $(".boton-usuarios").click(function(){
         $(".personal").hide(1000);
         $(".usuarios").show(1000);
         $("#main").hide(1000);
         $(".oficinas").hide(1000);
         $("#cambio").show("slow");
      });
      $(".boton-personal").click(function(){
         $(".personal").show(1000);
         $(".usuarios").hide(1000);
         $("#main").hide(1000);
         $(".oficinas").hide(1000);
         $("#cambio").show("slow");
      });
      $(".boton-oficinas").click(function(){
         $(".personal").hide(1000);
         $(".oficinas").show(1000);
         $(".usuarios").hide(1000);
         $("#main").hide(1000);
         $("#cambio").show("slow");
      });
      $(document).ready(function(){ 
        
        $("#mostrar").click(function(){$("#cambio").show("slow")}); 
      });
      
    });
    
  </script>
  <script type="text/javascript">
    function editarDatos(dni,nombre,direccion,celular,fec)
    {
      document.getElementById('dni').value=dni;
      document.getElementById('nombre').value=nombre.split('+').join(' ');
      document.getElementById('direccion').value=direccion.split('+').join(' ');
      document.getElementById('celular').value=celular.split('+').join(' ');
      document.getElementById('fec').value=fec.split('+').join(' ');
    }
  </script>
</body>
</html>
<?php
}
else  {
  header('location: ../../controlador/logout.php');
}

?>
