<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ACCESO AL SISTEMA</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark" style="background-image: url(img/fondo.jpg); background-size: 100%;">
  <br>
  <div class="container">
    <div class="card card-login mx-auto mt-5" style="background-color: rgba(0, 0, 0, 0.5)">
      <div class="card-header text-center" style="color: white;">ACCESO AL SISTEMA <br>
        <img src="img/login1.png" height="150" width="90">
      </div>
      <div class="card-body">
        <form action="controlador/acceso.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1" style="color: white;">USUARIO</label>
            <input class="form-control" name="user" type="text" placeholder="USUARIO" required="" style="background-color: rgba(0, 0, 0, 0.5)">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: white;">CONTRASEÑA</label>
            <input class="form-control" name="pass" type="password" placeholder="CONTRASEÑA" style="background-color: rgba(0, 0, 0, 0.5)">
          </div>
          <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" value="Acceder">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
</body>
<?php
if (isset($_POST['error'])) {
 
?>
     <script type="text/javascript">
       window.alert("usuario o contraseña incorrecto");
     </script>
<?php
}
?>
</html>
