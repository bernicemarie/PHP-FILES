<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM chauffeur WHERE id='$id' ") ;

if ($suppression) {
	header('location:datachauffeur.php');
}else{

	echo "Aucune suppression n'a été effectuée!";
}

 ?>

