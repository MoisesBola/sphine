<?php
include 'conexion.php';
$a= $_POST["idproducto"];
$b= $_POST["proveedor"];
$c= $_POST["valor"];


$sql = "INSERT INTO productos (idproducto, proveedor, valor)
VALUES ($a, $b, $c)";

if (pg_query($conn,$sql) === TRUE) {
    header('Location: principal1.php?mensaje=agg');
} else {
    echo "Error: " . $sql . "<br>" ;
}

