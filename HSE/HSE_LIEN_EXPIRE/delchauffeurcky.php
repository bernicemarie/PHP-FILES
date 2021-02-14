<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM chauffeurcky WHERE id='$id' ") ;

if ($suppression) {
	header('location:datachauffeurcky.php');
}else{

	echo "Aucune suppression n'a été effectuée, contactez votre Administrateur Principal!";
}

 ?>

