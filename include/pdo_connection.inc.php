<?php 

$user='root';
$pass='';
$dsn='mysql:host=localhost;dbname=login_users;charste=utf8';

try {
	$pdo= new PDO($dsn, $user, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Error: ".$e->getMessage();
	
}






 ?>