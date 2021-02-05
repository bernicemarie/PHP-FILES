<?php 

include('connect.php');

$id=$_GET['id'];
$suppression = $db->exec("DELETE FROM login WHERE id='$id' ") ;

if ($suppression) {
	header('location:listeusercky.php?msg=Suppression bien effectuée');
}else{

	echo "Aucune suppression n'a été effectuée, contactez votre Administrateur Principal!";
}

 ?>

