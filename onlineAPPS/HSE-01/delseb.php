<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM vehicule WHERE id='$id' ") ;

if ($suppression) {
	header('location:listeseb.php?msg=Suppression bien effectuée');
}else{

	echo "Aucune suppression n'a été effectuée!";
}

 ?>

