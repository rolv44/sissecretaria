
    <div class="container-fluid">
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
                  include '../../controlador/consultas.php';
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
  