
<html>
<head>
	<title>mostrar datos</title>

<body>

<br>

	<table  width="100%"  align="center" class="table table-condensed" >
		<tr>    
			<td label style="font-size:20px; background-color:#84b6f4">ID Producto</td>
			<td label style="font-size:20px; background-color:#84b6f4">Nombre</td>
			<td label style="font-size:20px; background-color:#84b6f4">Proovedor</td>
			<td label style="font-size:20px; background-color:#84b6f4">Valor    </td>
			<td label style="font-size:20px; background-color:#84b6f4">Valor de compra    </td>
			<td label style="font-size:20px; background-color:#84b6f4">Cantidad</td>
				
		</tr>	

		<?php 
        require_once "conexion.php";
		$sql="SELECT * from  motos.producto ";
		$result=pg_query($conn,$sql);

		while($mostrar=pg_fetch_array($result)){
		 ?>

		<tr>
        
			<td ><?php echo $mostrar['idproducto'] ?></td>
			<td ><?php echo $mostrar['nombre_producto'] ?></td>
			<td><?php echo $mostrar['proveedor'] ?></td>
			<td><?php echo $mostrar['valor'] ?></td>
			<td><?php echo $mostrar['valor_compra'] ?></td>
			<td><?php echo $mostrar['cantidad'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>