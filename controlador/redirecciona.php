<?php 
session_start();
include 'conexion.php';
include 'consultas.php';
$query = Usuario_Mostrar_uno($_SESSION['usuario']);
$execute =  $mysqli->query($query);
while ($row=mysqli_fetch_array($execute)) {
	$tipo = $row[2];
	$estado = $row[4];
}
$_SESSION["cat"]=$tipo;
if ($estado==1) {
	if ($tipo==1) {
		header("location: ../vistas/vistas-administrador/admin.php");
	}
	if ($tipo==2) {
		header("location: ../vistas/vistas-secretaria/secretaria.php");
	}
}
?>