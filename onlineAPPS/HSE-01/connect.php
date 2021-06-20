<?php 

$link ='mysql:dbname=hse;host=localhost';
$user = 'root';
$password ='Clsdums€2021';

try {
	$db = new PDO($link,$user,$password);
} catch (PDOException $e) {
	echo "Erreur de connexion".$e->GetMessage();
}
 ?>