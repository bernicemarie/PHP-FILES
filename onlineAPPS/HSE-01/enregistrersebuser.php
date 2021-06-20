<?php 

include('connect.php');

$seb = $_POST['nseb'];
$imma = $_POST['im'];


$con=$db->query("SELECT count(id) FROM vehicule WHERE nom_seb='$seb'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, ce numéro de Seb existe déjà.');
  window.location.href='datasebuser.php';
  </script>
  <?php
}else{

 
$insert = $db->exec("INSERT INTO vehicule(nom_seb,modele) VALUES('$seb','$imma') ") ;

if ($insert ) {
	 
	header('location:datasebuser.php?msg=Insertion bien effectuée');
}
else{

	echo "Aucune insertion effectuée";
}
}




 ?>

