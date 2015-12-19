<?php 
require_once("./lib.php");
session_start();

function getCabecera($location){
	
	if($location == "index"){
		$homeActive = "class='active'";
	}
	if($location == "login"){
		$loginActive = "class='active'";
	}
	if($location == "register"){
		$registerActive = "class='active'";
	}
	
	$username = $_SESSION["username"];
	
	$rightDropDown = "<li class='dropdown' style='margin-right:12px;'>
							 <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user' aria-hidden='true' style='margin-right:5px;'></span>$username<strong class='caret'></strong></a>
							<ul class='dropdown-menu'>
								<li>
									<a href='#'>Action</a>
								</li>
								<li>
									<a href='#'>Another action</a>
								</li>
								<li>
									<a href='#'>Something else here</a>
								</li>
								<li class='divider'>
								</li>
								<li>
									<a href='./logout.php'><span class='glyphicon glyphicon-off' aria-hidden='true' style='margin-right:5px;'></span>Log out</a>
								</li>
							</ul>
						</li>";
	
	if(!isLogged()){
		$rightDropDown = "	<li $loginActive>
							<a href='login.php'>Login   </a>
						</li>
						<li style='margin-right:25px;' $registerActive>
							<a href='register.php'>Register</a>
						</li>
						
						";
	}
	
	return "<div class='row'>
		<div class='col-md-12'>
			<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
				<div class='navbar-header'>
					 
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
						 <span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span>
					</button> <a class='navbar-brand' href='#'>Brand</a>
				</div>
				
				<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
					<ul class='nav navbar-nav'>
						<li $homeActive>
							<a href='/sitio/index.php'>Home</a>
						</li>
						<li>
							<a href='#'>Link</a>
						</li>
						<li class='dropdown'>
							 <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Dropdown<strong class='caret'></strong></a>
							<ul class='dropdown-menu'>
								<li>
									<a href='#'>Action</a>
								</li>
								<li>
									<a href='#'>Another action</a>
								</li>
								<li>
									<a href='#'>Something else here</a>
								</li>
								<li class='divider'>
								</li>
								<li>
									<a href='#'>Separated link</a>
								</li>
								<li class='divider'>
								</li>
								<li>
									<a href='#'>One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class='navbar-form navbar-left' role='search'>
						<div class='form-group'>
							<input type='text' class='form-control' />
						</div> 
						<button type='submit' class='btn btn-default'>
							Submit
						</button>
					</form>
					<ul class='nav navbar-nav navbar-right'>
						$rightDropDown
					</ul>
				</div>
				
			</nav>
		</div>
	</div>";
}


function getPie(){
	
	$enlaces = array("http://www.google.es", "http://www.justmine.me", "http://www.techtalents.es");
	
	$elementos = "";
	
	foreach($enlaces as $elemento){
		$elementos = $elementos . "
								<li>
									<a href='$elemento' target='blank'>
										$elemento
									</a>
								</li>";
	}
	
	return "<div class='row page-footer'>
		<div class='col-md-2'>
			<a href='http://techtalents.es'>
				<img alt='Logo' class='logo-footer img-responsive' src='img/logo_techtalens.png' />
			</a>
		</div>
		<div class='col-md-8'>
			<h3 class='text-center'>
				Ultimate web page!!!
			</h3>
		</div>
		<div class='col-md-2'>
			<ul>
				$elementos
			</ul>
		</div>
	</div>";
}


?>