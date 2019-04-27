<?php
include ("conexionaDB.php");
$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$imagen = $_POST['img'];
$tipo1 = $_POST['tipo1'];
$tipo2 = $_POST['tipo2'];
$stat1 = $_POST['stat1'];
$valor1 = $_POST['valor1'];
$stat2 = $_POST['stat2'];
$valor2 = $_POST['valor2'];
$evol1 = $_POST['evol1'];
$img1 = $_POST['img1'];
$evol2 = $_POST['evol2'];
$img2 = $_POST['img2'];

$solicitud = "INSERT INTO pokemons (Nombre, Numero, ImagenPoke, Tipo1, Tipo2, Stat1, Valor1, Stat2, Valor2, Evolucion1, Imagen1, Evolucion2, Imagen2) 
VALUES ('$nombre','$numero','$imagen','$tipo1','$tipo2','$stat1','$valor1','$stat2','$valor2','$evol1','$img1','$evol2','$img2')";

$resultado = mysqli_query ($conexion, $solicitud);
header ("location: formulario.php");
?>
