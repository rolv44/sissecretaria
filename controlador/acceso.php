<?php
session_start();
include 'conexion.php';
include 'consultas.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$query = validar($user,$pass);
$execute = $mysqli->query($query);
while ($row=mysqli_fetch_array($execute)) {
	$val = $row[0];
}
if ($val) 
	{
	$_SESSION["usuario"]=$user;
	header('location: redirecciona.php');
	}
else
	{?>
		<script>
    	window.onload=function(){
        document.forms["formulario"].submit();
    	}
    	</script>
		<form action='../index.php' method='POST' name='formulario'>;
		<input type='hidden' value='1' name='error'>;
		</form>;
	<?php
	}
?>