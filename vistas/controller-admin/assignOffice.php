<?php
include '../../controlador/consultas.php';
include '../../controlador/conexion.php';
$ofi = $_POST['ofi'];
$user = $_POST['user'];
$val = Oficina_Asignar($user,$ofi);
$mysqli->query($val);
header('location: ../vistas-administrador/admin.php');
?>