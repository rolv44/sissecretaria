<div class="container">
    <div class="card card-login mx-auto mt-5" style="background-color: rgba(0, 0, 0, 0.6);border-color: white;">
      <div class="card-header text-center" style="color: white;background-color: rgba(0, 255, 0, 0.6);">REGISTRAR OFICINA<br>
      </div>
      <div class="card-body">
        <form action="../controller-admin/assignOffice.php" method="POST">
          <div class="form-group" style="text-align: center;">
            <label for="exampleInputEmail1" style="color: white;">Nombre de Oficina</label>
            <select class="form-control" name="ofi" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
              <?php 
               include '../../controlador/conexion.php';
               include '../../controlador/consultas.php';
               $query = Oficina_Mostrar();
               $exec = $mysqli->query($query);
               while ($row=mysqli_fetch_array($exec)) {
               ?>
                <option value="<?=$row[0] ?>"><?=$row[1] ?></option>
               <?php 
               }
              ?>
            </select>
            
          </div>
          <div class="form-group" style="text-align: center;">
            <label for="exampleInputEmail1" style="color: white;">Encargado de Oficina</label>
            <select class="form-control" name="user" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
              <?php 
               include '../../controlador/conexion.php';
               $query1 = Persona_Mostrar();
               $exec1 = $mysqli->query($query1);
               while ($row1=mysqli_fetch_array($exec1)) {
               ?>
                <option value="<?=$row1[0] ?>"><?=$row1[1] ?></option>
               <?php 
               }
              ?>
            </select>
            
          </div>
          <br><br><br>
          <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" value="Aceptar" style="background-color: green;">
          </div>
        </form>
      </div>
    </div>
</div>
