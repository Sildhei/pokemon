<?php
session_start();
$username = $_POST['email'];
$password = $_POST['password'];

include ("conexionadbusuarios.php");
$solicitud = "SELECT * FROM ingreso where Email='$username'";
$resultado = mysqli_query ($conexion, $solicitud);

 if ($datos = mysqli_fetch_array ($resultado)){
    if($password==$datos['Pass']){
        $_SESSION['id']=$datos['ID'];
        $_SESSION['user']=$datos['User'];
    header("Location: index.php");
echo  $_SESSION['id']; }
    else {
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
        echo $pass; 
        echo "<script>location.href='inicio.php'</script>";
        }
    }else{
    echo '<script>alert("EL USUARIO NO EXISTE, REGISTRARSE")</script>';
    echo "<script>location.href='registrarse.php'</script>";
    }
?>




