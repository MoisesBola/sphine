<?php 

include_once "conexion.php";

 ?>


<br>

	<table  width="100%"  align="center" class="table table-condensed"  >
		<tr>    
		    <td label style="font-size:20px; background-color:#84b6f4">usuarios</td>
			<td label style="font-size:20px; background-color:#84b6f4">contraseña</td>
			<td label style="font-size:20px; background-color:#84b6f4">rol  </td>
            <td label style="font-size:20px; background-color:#84b6f4">accion  </td>
			<td label style="font-size:20px; background-color:#84b6f4">accion  </td>
			
				
		</tr>

		<?php 
		$sql="SELECT * from  motos.usuario ";
		$result=pg_query($conn,$sql);

		while($mostrar=pg_fetch_array($result)){
		 ?>
	      <td><?php echo $mostrar['idusuario'] ?></td>
			<td><?php echo $mostrar['contrasena'] ?></td>
			<td><?php echo $mostrar['tipo_u'] ?></td>
			
			<td><a href="actualizarusuario.php?id=<?php echo $mostrar['idusuario'];   ?>">actualizar</a></td>
			<td><a href="eliminarusuario.php?id=<?php echo $mostrar['idusuario'] ?>">eliminar</a></td>
		<tr>
		
			
		</tr>
	<?php 
	}
	
	 ?>
	</table>


	