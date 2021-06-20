<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM entreprise WHERE id='$id' ") ;

if ($suppression) {
	header('location:listeentreprisecky.php?msg=Suppression bien effectuée');
}else{

	echo "Aucune suppression, contactez votre Administrateur principal";
}

 ?>

