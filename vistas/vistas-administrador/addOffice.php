<div class="container">
    <div class="card card-login mx-auto mt-5" style="background-color: rgba(0, 0, 0, 0.6);border-color: white;">
      <div class="card-header text-center" style="color: white;background-color: rgba(0, 255, 0, 0.6);">REGISTRAR OFICINA<br>
      </div>
      <div class="card-body">
        <form action="../controller-admin/addOficce.php" method="POST">
          <div class="form-group" style="text-align: center;">
            <label for="exampleInputEmail1" style="color: white;">Nombre de Oficina</label>
            <br><br>
            <input class="form-control" name="ofi" maxlength="50" type="text" placeholder="Nombre de Oficina" required="" style="background-color: rgba(0, 0, 0, 0.5);color: white;">
          </div>
          <br><br><br>
          <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" value="Aceptar" style="background-color: green;">
          </div>
        </form>
      </div>
    </div>
</div>
