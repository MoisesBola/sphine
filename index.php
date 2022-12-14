
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bienvenido</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
  <link rel="shortcut icon" href="images/SEDENSALUD.png" type="imgages/SEDENSALUD.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body >
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/SEDENSALUD.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  action="logeo.php" method="POST" >
					<span class="login100-form-title">
						Acceso de usuarios
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere nombre de usuario" >
						<input class="input100" type="text" name="correo" placeholder="Usuario" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere contrase??a">
						<input class="input100" type="password" name="contrase??a" placeholder="Contrase??a">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  >
							Iniciar sesi??n
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Olvid?? su
						</span>
						<a class="txt2" href="#">
							??Usuario / Contrase??a?
						</a>
					</div>

					<div class="text-center p-t-46">
						
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
											</div>
				</form>
			</div>
		</div>
	</div>
	


 
  		
  		


	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


	

</body>


</html>
