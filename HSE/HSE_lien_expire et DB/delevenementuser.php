<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM events WHERE id='$id' ") ;

if ($suppression) {
	header('location:datauser.php?msg=Suppression bien effectuée');
}
else{

	echo "Aucune suppression";
}

 ?>

