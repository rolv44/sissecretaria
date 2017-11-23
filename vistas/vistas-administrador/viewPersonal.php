<div class="content-wrapper">
  <div class="container-fluid">
      <div class="card mb-6">
        <div class="card-header">
          <i class="fa fa-users"></i> <b>Personal</b> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
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
                  include '../../controlador/conexion.php';
                  include '../../controlador/consultas.php';
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
</div>