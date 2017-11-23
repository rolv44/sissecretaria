<div class="content-wrapper">
    <div class="container-fluid">
      <div class="card mb-6">
        <div class="card-header">
          <i class="fa fa-briefcase"></i> <b>Oficinas</b> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
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
                  include '../../controlador/consultas.php';
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