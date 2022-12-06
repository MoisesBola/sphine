
<?php
session_start();
require_once('conexion.php');


// Check connection

$usuario = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = pg_query($conn, "SELECT idusuario, contrasena FROM motos.usuario WHERE idusuario='$usuario' AND contrasena='$contraseña'");


$resultSelectByID = pg_query($conn,"SELECT idusuario, contrasena,tipo_u  FROM motos.usuario WHERE idusuario='$usuario' AND contrasena='$contraseña' ");

$rowSelectByID =pg_fetch_array($resultSelectByID);


$fila = pg_num_rows($sql);
$rol = $rowSelectByID['tipo_u'];
echo $rowSelectByID;

if ($fila == 1) {
    $_SESSION['rol']=$rol;
    switch ($_SESSION['rol']) {
        case 2:
            
           
            header('location: principal.php');
          

            break;
        case 1:
            
            
            header('location: mostrarusuarios.php');
            break;
         case 0;   
         header('location: index.php');
         break;

         case
         header('location: index.php');
         break;
    }
} else {
    include_once "alertaerror.php";
    include_once "index.php";;
}

?>