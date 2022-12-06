<html>

<head>
	<title>mostrar datos</title>

<body>

	<br>

	<table width="100%" align="center" class="table table-condensed">
		<tr>
			<td label style="font-size:20px; background-color:#84b6f4">ID Producto</td>
			<td label style="font-size:20px; background-color:#84b6f4">Nombre</td>
			<td label style="font-size:20px; background-color:#84b6f4">Proovedor</td>
			<td label style="font-size:20px; background-color:#84b6f4">Valor </td>
			<td label style="font-size:20px; background-color:#84b6f4">Valor de compra </td>
			<td label style="font-size:20px; background-color:#84b6f4">Cantidad</td>

		</tr>

		<?php
		require_once "conexion.php";
		$sql = "SELECT * from  motos.producto ";
		$result = pg_query($conn, $sql);

		while ($mostrar = pg_fetch_array($result)) {
		?>

			<tr>

				<td><?php echo $mostrar['idproducto'] ?></td>
				<td><?php echo $mostrar['nombre_producto'] ?></td>
				<td><?php echo $mostrar['proveedor'] ?></td>
				<td><?php echo $mostrar['valor'] ?></td>
				<td><?php echo $mostrar['valor_compra'] ?></td>
				<td><?php echo $mostrar['cantidad'] ?></td>

			</tr>
		<?php
		}

		?>

	</table>

	<a class="btn btn-primary" href="productos.php"><i class="fa fa-download"></i> Descargar archivo PDF</a>
	</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Bloque de anuncios adaptable -->
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6676636635558550" data-ad-slot="8523024962" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
			?>
		</div>
	</div>

</body>

</html>
<?php
			require_once 'dompdf/autoload.inc.php';

			use Dompdf\Dompdf;

			$dompdf = new DOMPDF();
			$dompdf->load_html(ob_get_clean());
			$dompdf->render();
			$pdf = $dompdf->output();
			$filename = "reportedeproductos.pdf";
			file_put_contents($filename, $pdf);
			$dompdf->stream($filename);