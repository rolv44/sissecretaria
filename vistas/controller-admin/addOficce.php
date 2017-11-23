<?php
include '../../controlador/consultas.php';
include '../../controlador/conexion.php';
$nombres = $_POST['ofi'];
$val = Oficina_Crear($nombres);
$mysqli->query($val);
header('location: ../vistas-administrador/admin.php');
?>