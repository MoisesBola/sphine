<?php
 include 'conexion.php';
 
 if($_POST)
 {
    $proveedor = $_POST['proveedorForm'];
    $valor = $_POST['valorForm'];
    $valor1 = $_POST['valor1Form'];
    $cantidad=$_POST['cantidadForm'];
    $id = $_POST['idForm'];
    $nombre=$_POST['nombreForm'];
    $x=is_int( $cantidad);
   if($valor1!=0 || $x==true and  $valor !=0    ){
    $queryUpdate = "UPDATE motos.producto SET nombre_producto='$nombre', proveedor = '$proveedor', valor = '$valor',valor_compra = '$valor1'  , cantidad = '$cantidad'WHERE idproducto = '$id'";
      
    $resultUpdate = pg_query($conn, $queryUpdate); 

    if($resultUpdate   )
    {
      include_once "alerta.php";
    }
    else
    {
       include_once "alertaerror.php";
    }
  

   }
   else{
      include_once "alertaerror.php";
   }
 }

 $query = "SELECT idproducto, proveedor, valor,valor_compra FROM motos.producto";

 $result = pg_query($conn, $query); 

 ?>

 

 
 <?php
 if($_GET)
 {
    $idproductos = $_GET['id'];
    $querySelectByID = "SELECT nombre_producto,idproducto, proveedor, valor,valor_compra,cantidad FROM motos.producto WHERE idproducto = '$idproductos'";
    $resultSelectByID = pg_query($conn, $querySelectByID); 
    
    $rowSelectByID = pg_fetch_array($resultSelectByID);
 }
 pg_close($conn);
 ?>