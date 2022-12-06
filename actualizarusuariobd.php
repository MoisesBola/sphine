<?php
 
include "conexion.php";

 if($_POST)
 {
    $proveedor = $_POST['usuario'];
    $valor = $_POST['contraseña'];
    $cantidad=$_POST['rol_u'];
    $id = $_POST['idForm1'];
    $queryUpdate = "UPDATE motos.usuario SET idusuario = '$proveedor', contrasena = '$valor' , tipo_u= '$cantidad'WHERE idusuario = '$id'";

    $resultUpdate = pg_query($conn, $queryUpdate); 

    if($resultUpdate)
    {
        include_once "alerta.php";
    }
    else
    {
       include "alertaerror.php";
    }

 }

 $query = "SELECT idusuario, contrasena, tipo_u FROM motos.usuario";

 $result = pg_query($conn, $query); 

 ?>

 

 
 <?php
 if($_GET)
 {
    $idproductos = $_GET['id'];
    $querySelectByID = "SELECT idusuario, contrasena, tipo_u  FROM motos.usuario WHERE idusuario = '$idproductos'";
    $resultSelectByID = pg_query($conn, $querySelectByID); 
    
    $rowSelectByID = pg_fetch_array($resultSelectByID);
 }
 ?>