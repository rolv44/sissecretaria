<div class="container">
    <div class="card card-login mx-auto mt-5" style="background-color: rgba(0, 0, 0, 0.6);border-color: white;">
      <div class="card-header text-center" style="color: white;background-color: rgba(0, 255, 0, 0.6);">REGISTRAR PERSONAL<br>
      </div>
      <div class="card-body">
        <form action="../controller-admin/addPersona.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1" style="color: white;">DNI</label>
            <input class="form-control" name="dni" maxlength="8" type="text" placeholder="DNI" required="" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: white;">NOMBRES</label>
            <input class="form-control" name="nombres" type="text" placeholder="NOMBRES" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" style="color: white;">DIRECCION</label>
            <input class="form-control" name="direccion" type="text" placeholder="APELLIDOS" required="" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: white;">CELULAR</label>
            <input class="form-control" name="celular" type="text" placeholder="CELULAR" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: white;">TIPO DE USUARIO</label>
            <select class="form-control" name="tipo" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
            	<option value=1>Administrador</option>
            	<option value=2>Secretaria</option>
            	<option value=3>Recepcionista</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: white;">FECHA</label>
            <input class="form-control" name="fecha" type="date" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
          </div>
          <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" value="Aceptar" style="background-color: green;">
          </div>
        </form>
      </div>
    </div>
</div>
