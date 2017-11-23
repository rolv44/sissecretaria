<?php
include '../../controlador/consultas.php';
include '../../controlador/conexion.php';
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$fecha = $_POST['fecha'];
$tipo = $_POST['tipo'];
$val = Persona_Insertar($dni,$nombres,$direccion,$celular,$fecha);
$user = Usuario_Crear($dni,$tipo);
$mysqli->query($val);
$mysqli->query($user);
header('location: ../vistas-administrador/admin.php');
?>