<?php
include 'conexion.php';

$a = $_POST["idproducto"];
$b = $_POST["proveedor"];
$c = $_POST["valor"];
$d = $_POST["cantidad"];
$e = $_POST["nombre_producto"];
$f = $_POST["valor1"];
$x=is_int( $d);
if ($c!= 0  || $f!=0 || $x==true || $x!=0  ) {
 
  $sql = "INSERT INTO motos.producto (idproducto,proveedor,valor,cantidad,nombre_producto,valor_compra)
  VALUES ('$a', '$b', '$c','$d','$e','$f')";
 
  if (pg_query($conn ,$sql) == TRUE) {
    header('Location: principal.php?mensaje=agg');
  } else {
    include "alertaerror.php";
    include "seccionagregar.php";
  }
} else {
  include "alertaerror.php";
  include "seccionagregar.php";
}
pg_close($conn);

