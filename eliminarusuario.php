<?php 
include "conexion.php";

$id= $_GET['id'];
$queryDelete = "DELETE FROM motos.usuario WHERE idusuario = '$id'";
$resultUpdate = pg_query($conn, $queryDelete); 

if($resultUpdate)
{
    
    include_once "alerta.php";
    include_once "mostrarusuarios.php";
}
else
{
   include "alertaerror.php";
}


  
 


?>