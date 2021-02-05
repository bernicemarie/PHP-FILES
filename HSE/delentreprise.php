<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM entreprise WHERE id='$id' ") ;

if ($suppression) {
	header('location:listeentreprise.php?msg=Suppression bien effectuée');
}else{

	echo "suppression NO";
}

 ?>

