
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
$idFactura = $_POST["idfactura"] ?? '';
$producto = $_POST["producto"] ?? [];
$precio = $_POST["precio"] ?? [];
$empleado = $_POST["emp_doc"] ?? '';
$cliente = $_POST["cl_doc"] ?? '';
$cantidad = $_POST["cantidad"] ?? [];



for($i=0;$i<count($precio);$i++){
  $precio_total[$i]=$precio[$i]*$cantidad[$i];
}






//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor".mysql_error();
        }
  else
        {
           
        }
        //indicamos el nombre de la base datos
        $datab = "mybd";
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
        
        
        $instruccion_SQL = "INSERT INTO facturas (idfactura, empleados_cedula, clientes_cedula)
                             VALUES ('$idFactura','$empleado','$cliente')";

        $resultado = mysqli_query($connection,$instruccion_SQL);

       

        $n=0;
        

        foreach($producto as $prod){

          $precio=$precio_total[$n];
          $cant=$cantidad[$n];
          
          $instruccion_SQL2 = "INSERT INTO detalle (cantidad, precio_total, id_factura, id_producto)
        VALUES ('$cant','$precio','$idFactura','$prod')";
       

          $n+=1;

        $resultado2 = mysqli_query($connection,$instruccion_SQL2);
        }

       
                           
                            
        
        
       
        if($resultado2){
          echo '<script language="javascript">alert("registro completado exitosamente");</script>';
        }
        
        // $destinatario=$correo;
        // $asunto="hola";
        // $mensaje="registro exitoso";
        // $header="enviado desde donbosco";
        
        // mail($destinatario, $asunto, $mensaje, $header);

        echo "<script>setTimeout(\"location.href='factura.php'\",1000)</script>";
        
        

        

mysqli_close( $connection );

   


?>

