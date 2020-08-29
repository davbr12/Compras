<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: catalogo.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Iniciar Sesion</title>
	
    <link rel="stylesheet" href="../libs/fonts/icomoon/style.css">
	<link rel="icon" type="image/png" href="../libs/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../libs/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../libs/login/css/main.css">
	<link rel="stylesheet" href="../libs/css/style.css">
</head>
<body>
<?php include("header.php"); ?> 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="iniciarsesion.php"  >
					<span class="login100-form-title p-b-32">
						Bienvenido
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Usuario necesario" pattern="[A-Za-z0-9_-]{1,7}">
						<input class="input100" type="text" name="usuario" id="usuario">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Contraseña necesaria" pattern="[A-Za-z0-9_-]{1,7}">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="pass">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="btnEntrar">
							Login
						</button>
					</div>
			
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	<?php include("footer.php"); ?> 
	 <?php
	 			
				$conexion = mysqli_connect("localhost","root","","store") or die($conexion->error);
                error_reporting(0);
				session_start();
                $usuario =  $conexion->escape_string($_POST['usuario']);
                $contra =  $conexion->escape_string($_POST['pass']);
                $btnAccion = $_POST['btnEntrar'];

                if (isset($btnAccion)) {
                    $query = "SELECT * FROM usuario where email ='$usuario' and passworda = '$contra'";
                	$result = mysqli_query($conexion,$query) or die ($conexion->error);
                	while ($row = $result->fetch_assoc()) {
                        
						if ($row['email']==$usuario && $row['passworda']==$contra) {
						   $_SESSION['usuario']=$usuario;
						   $_SESSION['tipo']=$row['nivel'];
						   $_SESSION['id']=$row['id'];?>
						   <script type="text/javascript">window.location="catalogo.php";</script>
						   <?php
						}else{
							echo "<script>alert('Error nne');</script>";
						}
                        
                    }
                    
                }
                

			?>
			
			

	<script src="../libs/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../libs/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="../libs/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../libs/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../libs/login/vendor/select2/select2.min.js"></script>
	<script src="../libs/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../libs/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../libs/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="../libs/login/js/main.js"></script>

</body>
</html>