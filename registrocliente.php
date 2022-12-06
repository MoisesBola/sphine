<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario

$cedula=$_POST["cedula"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];






//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor".mysql_error();
        }
  else
        {
           
        }
        //indicamos el nombre de la base datos
        $datab = "mybd1";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,"mydb1");

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL3 = "INSERT INTO clientes (cedula, nombre1, nombre2, apellido1,apellido2)
        VALUES ('$cedula','$nombre1','$nombre2','$apellido1','$apellido2')";
        
       

       
                           
                            
        
        $resultado3 = mysqli_query($connection,$instruccion_SQL3);
        if($resultado3){
          echo '<script language="javascript">alert("registro completado exitosamente");</script>';
        }
        
        // $destinatario=$correo;
        // $asunto="hola";
        // $mensaje="registro exitoso";
        // $header="enviado desde donbosco";
        
        // mail($destinatario, $asunto, $mensaje, $header);

        echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
        
        

        

mysqli_close( $connection );

   


?>

