<?php 

$createUsers = "
CREATE TABLE IF NOT EXIST users(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,username VARCHAR(50) UNIQUE, email VARCHAR(50) UNIQUE, password VARCHAR(50)
)
";

function dbQuery($query, $parameters){
	$host = "localhost";
	$name = "paginaweb";
	$port = 3306;
	$passw = "";
	$user = "root";
	$db = new PDO("mysql:host=$host;
				dbname=$name;
				charset=utf8", $user, $passw);
				
	$stmt = $db->prepare($query);
	$stmt->execute($parameters);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);

} 
?>
