<?php
include ("conexionadbusuarios.php");
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['password'];

$solicitud = "INSERT INTO ingreso (Email, User, Pass) VALUES ('$email','$user','$pass')";

$resultado = mysqli_query ($conexion, $solicitud);
header ("location: inicio.php");
?>
