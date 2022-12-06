<?php
include_once 'conexion.php';

$a= $_POST["usuario"];
$b= $_POST["pass1"];
$c= $_POST["rol"];




$sql = "INSERT INTO motos.usuario (idusuario, contrasena, tipo_u)
VALUES ('$a', '$b', '$c')";

if (pg_query($conn ,$sql) == TRUE) {
    header('Location:mostrarusuarios.php?mensaje=agg');
} else {
  include "alertaerror.php";
  include "registrar_usuario.php";
}

pg_close($conn);