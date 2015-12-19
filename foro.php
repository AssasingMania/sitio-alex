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
	return "
	
	<div class='row'>
		<div class='col-md-12'>
			<h3>
				Title subject
			</h3>
			<p>
				<span>fecha</span>
			</p>
			<div class='row'>
				<div class='col-md-8'>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class='col-md-4'>
					<div class='row'>
						<div class='col-md-6'>
							<img alt='Bootstrap Image Preview' src='http://lorempixel.com/140/140/' />
						</div>
						<div class='col-md-6'>
							 
							<address>
								 <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title='Phone'>P:</abbr> (123) 456-7890
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class='row'>
		<div class='col-md-12'>
			<h3>
				Title subject
			</h3>
			<p>
				<span>fecha</span>
			</p>
			<div class='row'>
				<div class='col-md-8'>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class='col-md-4'>
					<div class='row'>
						<div class='col-md-6'>
							<img alt='Bootstrap Image Preview' src='http://lorempixel.com/140/140/' />
						</div>
						<div class='col-md-6'>
							 
							<address>
								 <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title='Phone'>P:</abbr> (123) 456-7890
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class='row'>
		<div class='col-md-12'>
			<h3>
				Title subject
			</h3>
			<p>
				<span>fecha</span>
			</p>
			<div class='row'>
				<div class='col-md-8'>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class='col-md-4'>
					<div class='row'>
						<div class='col-md-6'>
							<img alt='Bootstrap Image Preview' src='http://lorempixel.com/140/140/' />
						</div>
						<div class='col-md-6'>
							 
							<address>
								 <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title='Phone'>P:</abbr> (123) 456-7890
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	";
}

?>