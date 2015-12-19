<?php 
require_once("site.php");

$host = 'localhost';
$name = 'pagina web';
$port = '3306';
$passw = '';
$user  = 'root';

if (isset($_POST["email"]) && isset($_POST["password"])){
	$conexion = mysql_connect($host, $user, $passw)
	or die("Tienes una mierda de conexion:" .mysql_error());
	mysql_select_db($name,$conexion) or die("No se pudo seleccionar la base de datos XD");
	
	
	$email = mysql_real_escape_string($_POST["email"]);
	$pass = mysql_real_escape_string($_POST["password"]);
	
	$query = "SELECT * FROM users WHERE email= '$email' AND password='$pass'";
	$result = mysql_query($query, $conexion);
	$linea = mysql_fetch_array($result, MYSQL_ASSOC);
	if($linea){
		$username = $linea["username"];
		session_start();
		$_SESSION["username"] = "$username";
		header("Location: ./index.php");
	}else{
			
	}
}
$cabecera = getCabecera("login");
$cuerpo = getCuerpo();
$pie = getPie();

echo "<!DOCTYPE HTML>
<html>
	<head>
		
		<script src='javascript/script.js'></script>
	
		<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
	
		<meta name='viewport' content='initial-scale=1'>
		
		<meta charset='UTF-8'>
		
		<link rel='stylesheet' href='css/estilo.css'>
		
		<title>
			PWSN
		</title>
	</head>
	<body>
		<div class='container-fluid'>
			$cabecera
		</div>
		
		<div class='container'>
			$cuerpo
		</div>
		
		<div class='container-fluid'>
			$pie
		</div>
	</body>
</html>

";

function getCuerpo(){
	return "<div class='row' style='min-height:820px;'>
		<div class='col-md-2'>
		</div>
		<div class='col-md-8'>
			<div class='page-header'>
				<h1 class = 'titulo-login' >
						Login <small class = 'titulo-login2'>To get amazing content!</small>
				</h1>
			</div>
			<form class='form-horizontal' role='form' method='post' action='login.php'>
				<div class='form-group'>
					 
					<label for='inputEmail3' class='col-sm-2 control-label login-label'>
						Email
					</label>
					<div class='col-sm-10'>
						<input type='email' class='form-control' id='inputEmail3' name='email'/>
					</div>
				</div>
				<div class='form-group'>
					 
					<label for='inputPassword3' class='col-sm-2 control-label login-label2'>
						Password
					</label>
					<div class='col-sm-10'>
						<input type='password' class='form-control' id='inputPassword3' name= 'password'/>
					</div>
				</div>
				<div class='form-group'>
					<div class='col-sm-offset-2 col-sm-10'>
						<div class='checkbox'>
							 
							<label class ='login-lable3'>
								<input type='checkbox' /> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<div class='col-sm-offset-2 col-sm-10'>
						 
						<button type='submit' class='btn btn-default' >
							Sign in
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class='col-md-2'>
		</div>
	</div>";
}

?>