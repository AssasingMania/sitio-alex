<?php 
session_start();
require_once("site.php");
$cabecera = getCabecera("index");
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
	//$user = $_SESSION["username"];
	//return "$user";
}

?>