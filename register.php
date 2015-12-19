<?php 
require_once("site.php");
require_once("db.php");
$cabecera = getCabecera("register");
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
	$user = $_POST["user"];
	$password = $_POST["password"];
	$confirm = $_POST["confirm"];
	$email = $_POST["email"];
	
	//var_dump($_POST);
	
	if(isset($user) && isset($password) && isset($confirm) && isset($email)){
		if($password == $confirm){
			$query = "SELECT * FROM users WHERE email=? OR username=?";
			$result = dbQuery($query, array($email, $user));
			if(isset($result[0])){
				echo "ya hay un usuario";
			}
		}else{
			$alert = "passwords don't match";
		}
	}
	
	return "<div class='row' style='min-height:820px;'>
		<div class='col-md-2'>
		</div>
		<div class='col-md-8'>
			<div class='page-header'>
				<h1 class = 'titulo-register'>
					Register here <small class = 'titulo-register2'>To start playing!!!</small>
				</h1>
			</div>
			<form class='form-horizontal' role='form' action='register.php' method='post'>
				<div class='form-group'>
					 
					<label for='username' class='col-sm-2 control-label' lable-register'>
						Username
					</label>
					<div class='col-sm-10'>
						<input type='text' class='form-control' id='username' name='user'/>
					</div>
				</div>
				<div class='form-group'>
					 
					<label for='inputEmail3' class='col-sm-2 control-label' lable-register'>
						Email
					</label>
					<div class='col-sm-10'>
						<input type='email' class='form-control' id='inputEmail3' name= 'email'/>
					</div>
				</div>
				<div class='form-group'>
					 
					<label for='inputPassword3' class='col-sm-2 control-label' lable-register2>
						Password
					</label>
					<div class='col-sm-10'>
						<input type='password' class='form-control' id='inputPassword3' name='password'/>
					</div>
				</div>
				
				<div class='form-group'>
					 
					<label for='inputPassword4' class='col-sm-2 control-label' lable-register3>
						Confirm
					</label>
					<div class='col-sm-10'>
						<input type='password' class='form-control' id='inputPassword4' name='confirm'/>
					</div>
				</div>
				
				<div class='form-group'>
					<div class='col-sm-offset-2 col-sm-10'>
						 
						<button type='submit' class='btn btn-default' >
							Register
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