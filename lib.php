<?php
session_start();
function isLogged(){
	return isset($_SESSION["username"]);
}
?>