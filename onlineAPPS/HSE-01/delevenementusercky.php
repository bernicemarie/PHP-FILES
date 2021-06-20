<?php 

include('connect.php');

$id=$_GET['id'];



$suppression = $db->exec("DELETE FROM eventscky WHERE id='$id' ") ;

if ($suppression) {
	header('location:datausercky.php?msg=Suppression bien effectuée');
}
else{

	echo "Aucune suppression";
}

 ?>

