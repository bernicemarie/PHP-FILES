<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM events WHERE id='$id' ") ;

if ($suppression) {
	header('location:data.php?msg=Suppression bien effectuée');
}
else{

	echo "Aucune suppression";
}

 ?>

