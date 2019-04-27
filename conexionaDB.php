<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pokemons";
$conexion = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conexion,"utf8");
?>