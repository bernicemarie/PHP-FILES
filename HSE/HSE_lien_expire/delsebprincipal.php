<?php 

include('connect.php');

$id=$_GET['id'];
$suppression = $db->exec("DELETE FROM vehiculecky WHERE id='$id' ") ;

if ($suppression) {
	header('location:listesebprincipal.php?msg=Suppression bien effectuée');
}else{

	echo "Aucune suppression n'a été effectuée, contactez votre Administrateur Principal!";
}

 ?>

